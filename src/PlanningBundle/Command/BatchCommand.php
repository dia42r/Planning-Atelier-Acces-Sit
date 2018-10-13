<?php

namespace PlanningBundle\Command;

use SqlSrvBundle\Entity\Item;
use SqlSrvBundle\Entity\Saledocument;
use SqlSrvBundle\Entity\Saledocumentline;
use PlanningBundle\Entity\EBP\SaleDocumentLine as SaleDocumentLinePlanning;
use PlanningBundle\Entity\EBP\SaleDocument as SaleDocumentPlanning;
use PlanningBundle\Entity\EBP\Item as ItemPlanning;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use PlanningBundle\Repository\CustomerRepository;

class BatchCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('planning:batch')
            ->setDescription('Hello PhpStorm')
            ->addArgument(
                'sql',
                InputArgument::REQUIRED,
                'Who do you want to greet?'
            );
    }

    /**
     * {@inheritdoc}
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\Common\Persistence\Mapping\MappingException
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln([
            'Start syncronisation ',
            '====================='
        ]);

        if ( $input->getArgument('sql') == 1 ) {

            $saleDocuments = $this->getContainer()
                ->get('doctrine.orm.customer_entity_manager')
                ->getRepository(Saledocument::class)
                ->findSaleDocuments();

            $em = $this->getContainer()
                ->get('doctrine.orm.default_entity_manager');

            $output->writeln([
                ' Write ... ',
                ' =========='
            ]);

            $progress = new ProgressBar($output, count($saleDocuments));
            $progress->setFormat(' %current%/%max% [%bar%] %percent:3s%% %elapsed:6s%/%estimated:-6s% %memory:6s%');
            // starts and displays the progress bar
            $progress->start();

            $batchSize = 20;
            $countSaleDocument = 0;
            $countSaleDocumentLine = 0;
            $countItem = 0;

            foreach ($saleDocuments as $document => $value ) {
                
                $saleDocument = new \PlanningBundle\Entity\EBP\SaleDocument();
                $saleDocument->setId($value['id']);
                $saleDocument->setDocumentNumber($value['documentnumber']);
                $saleDocument->setDocumentDate($value['documentdate']);
                $saleDocument->setDocumentWishDate($value['deliverydate']);
                $saleDocument->setCustomerName($value['customername']);
                $saleDocument->setNumberPrefix($value['numberprefix']);

                dump(' SaleDocument : ' . $value['documentnumber']);
                
                // Customer 
                
                $customerSrc = $this->getContainer()
                    ->get('doctrine.orm.customer_entity_manager')
                    ->getRepository(\SqlSrvBundle\Entity\Customer::class)
                    ->findById($value['customerid']);
                

                dump($customerSrc[0]);
                dump($customerSrc[0]->getId());
                if (!empty($customerSrc)) {
                    $customerDest =  new \PlanningBundle\Entity\EBP\Customer();
                    $customerDest->setId($value['customerid']);
                    $customerDest->setCustomerId($value['customerid']);
                    $customerDest->setCivility($customerSrc[0]->getCivility());
                    $customerDest->setMainDeliveryAddress1($customerSrc[0]->getMaindeliveryaddressState()); 
                }

                $countSaleDocument++;

                $progress->advance();

                $saleDocumentLinesSrc = $this->getContainer()
                    ->get('doctrine.orm.customer_entity_manager')
                    ->getRepository(SaleDocumentline::class)
                    ->findBySaleDocumentId( $value['id']);
                
                $em->merge($customerDest);
                $em->flush(); 
                
                $em->merge($saleDocument);
                $em->flush(); // Detaches all objects from Doctrine!
                
                foreach (\array_values($saleDocumentLinesSrc) as $saleDocumentLineSrc ) {

                    $saleDocumentLinesDest = new \PlanningBundle\Entity\EBP\SaleDocumentLine();
                    
                    // Set Item : 
                    $itemSrc = $this->getContainer()
                    ->get('doctrine.orm.customer_entity_manager')
                    ->getRepository(Item::class)
                    ->findById($saleDocumentLineSrc->getItemid());
                    
                    if (!empty($itemSrc)) {
                        $itemDest = new \PlanningBundle\Entity\EBP\Item();
                        $itemDest->setId($itemSrc[0]->getId());
                        $itemDest->setCaption($itemSrc[0]->getCaption());
                        $itemDest->setDesComm($itemSrc[0]->getDescom());
                        $itemDest->setNote($itemSrc[0]->getNotesclear());
                        dump(' Item ' .$itemSrc[0]->getId());
                    }

                    // Set saleDocumentLine 
                    
                    $saleDocumentLinesDest->setId($saleDocumentLineSrc->getId());
                    $saleDocumentLinesDest->setSaleDocument($saleDocument);
                    $saleDocumentLinesDest->setQuantity($saleDocumentLineSrc->getQuantity());
                    $saleDocumentLinesDest->setItem($itemDest);
                    

                    dump(' SaleDocumentLine' .$saleDocumentLineSrc->getId());
                     
                    $em->merge($saleDocumentLinesDest);
                    $em->flush();
                    
                    $em->merge($itemDest);
                    $em->flush();
                    $saleDocument->addSaleDocumentLine($saleDocumentLinesDest);
                    $countItem++;
                    $countSaleDocumentLine++;
 
                }

                dump('add SaleDocument : '.$countSaleDocument);
                dump('add SaleDocumentLine: '.$countSaleDocumentLine);
                dump('add Item : '.$countItem);
 
            }
 
            $progress->finish();

        }

    }
}