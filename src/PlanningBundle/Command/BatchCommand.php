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

    
    public function getSaleDocumentCustomer($customerId) 
    {
        // Customer 

        $customerSrc = $this->getContainer()
            ->get('doctrine.orm.customer_entity_manager')
            ->getRepository(\SqlSrvBundle\Entity\Customer::class)
            ->findById($customerId);

        if (!empty($customerSrc)) 
        {
            $customerDest =  new \PlanningBundle\Entity\EBP\Customer();
            $customerDest->setId($customerSrc[0]->getId());
            $customerDest->setCustomerId($customerSrc[0]->getId());
            $customerDest->setCivility($customerSrc[0]->getCivility());
            $customerDest->setMainDeliveryAddress1($customerSrc[0]->getMaindeliveryaddressAddress1()); 
            $customerDest->setMainDeliveryAddress2($customerSrc[0]->getMaindeliveryaddressAddress2()); 
            $customerDest->setMainDeliveryAddressCity($customerSrc[0]->getMaindeliveryaddressCity()); 
            $customerDest->setMainDeliveryAddressZipCode($customerSrc[0]->getMaindeliveryaddressZipcode()); 
            $customerDest->setMainDeliveryAddressState($customerSrc[0]->getMaindeliveryaddressState()); 
            $customerDest->setMainDeliveryAddressCountry($customerSrc[0]->getMaindeliveryaddressCountryisocode());

            $customerDest->setMainInvoicingAddress1($customerSrc[0]->getMaininvoicingaddressAddress1());
            $customerDest->setMainInvoicingAddress2($customerSrc[0]->getMaininvoicingaddressAddress2());
            $customerDest->setMainInvoicingAddressCity($customerSrc[0]->getMaininvoicingaddressCity());
            $customerDest->setMainInvoicingAddressZipCode($customerSrc[0]->getMaininvoicingaddressZipcode());
            $customerDest->setMainInvoicingAddressState($customerSrc[0]->getMaininvoicingaddressState());
            $customerDest->setMainInvoicingAddressCountry($customerSrc[0]->getMaininvoicingaddressCountryisocode());
            
            return $customerDest;
        }
        
        return null;
    }
    
    /**
     * 
     * @param type $saleDocumentLineId
     * @return Item
     */
    public function getItemInSaleDocumentLineId($itemid) 
    {
        // Set Item : 
        $itemSrc = $this->getContainer()
        ->get('doctrine.orm.customer_entity_manager')
        ->getRepository(Item::class)
        ->findById($itemid);
        
        $em = $this->getContainer()
         ->get('doctrine.orm.default_entity_manager');
        
        if (!empty($itemSrc)) {
            $itemDest = new \PlanningBundle\Entity\EBP\Item();
            $itemDest->setId($itemSrc[0]->getId());
            $itemDest->setCaption($itemSrc[0]->getCaption());
            $itemDest->setDesComm($itemSrc[0]->getDescom());
            $itemDest->setNote($itemSrc[0]->getNotesclear());
            

            
            $em->merge($itemDest);
            $em->flush();
            return $itemDest;
        }
        
        return null;
        
    }
    /**
     * Return saleDocumentLines 
     * @param type $saleDocumentId
     * @return SaleDocumentLinePlanning
     */
    public function getSaleDocumentLines($saleDocumentId)
    {
        $saleDocumentLinesSrc = $this->getContainer()
        ->get('doctrine.orm.customer_entity_manager')
        ->getRepository(SaleDocumentline::class)
        ->findBySaleDocumentId($saleDocumentId);


        $em = $this->getContainer()
         ->get('doctrine.orm.default_entity_manager');
        foreach ($saleDocumentLinesSrc as $saleDocumentLineSrc)
        {
            $saleDocumentLineDest = new \PlanningBundle\Entity\EBP\SaleDocumentLine();
            $saleDocumentLineDest->setId($saleDocumentLineSrc->getId());
            $saleDocumentLineDest->setDescription($saleDocumentLineSrc->getDescription());
            $saleDocumentLineDest->setQuantity($saleDocumentLineSrc->getQuantity());
            $saleDocumentLineDest->setItem($this->getItemInSaleDocumentLineId($saleDocumentLineSrc->getitemid()));
 
            $em->merge($saleDocumentLineDest);
            $em->flush();
            $saleDocumentLinesDest[] = $saleDocumentLineDest;
        }
        
        return $saleDocumentLinesDest;
            
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

            $countSaleDocument = 0;
            foreach ($saleDocuments as $document => $attribut) {


                $saleDocument = new \PlanningBundle\Entity\EBP\SaleDocument();
                $saleDocument->setId($attribut['id']);
                $saleDocument->setDocumentNumber($attribut['documentnumber']);
                $saleDocument->setDocumentDate($attribut['documentdate']);
                $saleDocument->setDocumentWishDate($attribut['deliverydate']);
                $saleDocument->setCustomerName($attribut['customername']);
                $saleDocument->setNumberPrefix($attribut['numberprefix']);
                
                $saleDocument->setSaleDocumentLines($this->getSaleDocumentLines($attribut['id']));
                $saleDocument->setCustomer($this->getSaleDocumentCustomer($attribut['customerid']));
                
                dump($saleDocument->getSaleDocumentLines());
                
                $countSaleDocument++;
                $progress->advance();

                $em->merge($saleDocument);
                $em->flush(); // Detaches all objects from Doctrine!    
            }
 
            $progress->finish();

        }

    }
}