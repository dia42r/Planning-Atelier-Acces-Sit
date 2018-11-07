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
            ->setDescription(' Batch de synchronisation des commandes ebp avec le planning atelier')
            ;
    }

    
    public function getSaleDocumentCustomer($customerId) 
    {
        // Customer 

        $customerSrc = $this->getContainer()
            ->get('doctrine.orm.customer_entity_manager')
            ->getRepository(\SqlSrvBundle\Entity\Customer::class)
            ->findById($customerId);
                
        $em = $this->getContainer()
         ->get('doctrine.orm.default_entity_manager');

        
        $customer = $em->getRepository(\PlanningBundle\Entity\EBP\Customer::class)
        ->find($customerSrc[0]->getId());
            
        if (is_null($customer)) {
            
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
            
        } else {
            $customer->setCustomerId($customerSrc[0]->getId());
            $customer->setCivility($customerSrc[0]->getCivility());
            $customer->setMainDeliveryAddress1($customerSrc[0]->getMaindeliveryaddressAddress1()); 
            $customer->setMainDeliveryAddress2($customerSrc[0]->getMaindeliveryaddressAddress2()); 
            $customer->setMainDeliveryAddressCity($customerSrc[0]->getMaindeliveryaddressCity()); 
            $customer->setMainDeliveryAddressZipCode($customerSrc[0]->getMaindeliveryaddressZipcode()); 
            $customer->setMainDeliveryAddressState($customerSrc[0]->getMaindeliveryaddressState()); 
            $customer->setMainDeliveryAddressCountry($customerSrc[0]->getMaindeliveryaddressCountryisocode());

            $customer->setMainInvoicingAddress1($customerSrc[0]->getMaininvoicingaddressAddress1());
            $customer->setMainInvoicingAddress2($customerSrc[0]->getMaininvoicingaddressAddress2());
            $customer->setMainInvoicingAddressCity($customerSrc[0]->getMaininvoicingaddressCity());
            $customer->setMainInvoicingAddressZipCode($customerSrc[0]->getMaininvoicingaddressZipcode());
            $customer->setMainInvoicingAddressState($customerSrc[0]->getMaininvoicingaddressState());
            $customer->setMainInvoicingAddressCountry($customerSrc[0]->getMaininvoicingaddressCountryisocode());
            
            $em->persist($customer);
        }
        $em->flush();
        
        return is_null($customer) ? $customerDest : $customer;
        
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
            $item = $em->getRepository(\PlanningBundle\Entity\EBP\Item::class)
                    ->find($itemSrc[0]->getId());
          
            if ( is_null($item)) {
                $itemDest = new \PlanningBundle\Entity\EBP\Item();
                $itemDest->setId($itemSrc[0]->getId());
                $itemDest->setCaption($itemSrc[0]->getCaption());
                $itemDest->setDesComm($itemSrc[0]->getDescom());
                $itemDest->setNote($itemSrc[0]->getNotesclear());

                $em->persist($itemDest);
                $em->flush();
                return $itemDest;
                
            } 
//            else {
//                $item->setCaption($itemSrc[0]->getCaption());
//                $item->setDesComm($itemSrc[0]->getDescom());
//                $item->setNote($itemSrc[0]->getNotesclear());
//            }
        }   
    }
    /**
     * Return saleDocumentLines 
     * @param SaleDocument $saleDocument
     * @return SaleDocumentLine
     */
    public function getSaleDocumentLines(\PlanningBundle\Entity\EBP\SaleDocument $saleDocument)
    {
        $saleDocumentLinesSrc = $this->getContainer()
        ->get('doctrine.orm.customer_entity_manager')
        ->getRepository(SaleDocumentline::class)
        ->findBySaleDocumentId($saleDocument->getId());
                
        $em = $this->getContainer()
         ->get('doctrine.orm.default_entity_manager');
        foreach ($saleDocumentLinesSrc as $saleDocumentLineSrc)
        {
            $saleDocumentLine = $em->getRepository(\PlanningBundle\Entity\EBP\SaleDocumentLine::class)
            ->find($saleDocumentLineSrc->getId());
            
            if (is_null($saleDocumentLine)) {
                            
                $saleDocumentLineDest = new \PlanningBundle\Entity\EBP\SaleDocumentLine();
                $saleDocumentLineDest->setId($saleDocumentLineSrc->getId());
                $saleDocumentLineDest->setDescription($saleDocumentLineSrc->getDescriptionclear());
                $saleDocumentLineDest->setQuantity($saleDocumentLineSrc->getQuantity());
                $saleDocumentLineDest->setSaleDocumentNumber($saleDocument->getDocumentNumber());
                $saleDocumentLineDest->setSaleDocument($saleDocument);
                $saleDocumentLineDest->setItem($this->getItemInSaleDocumentLineId($saleDocumentLineSrc->getitemid()));
                $saleDocumentLineDest->setUnitId($saleDocumentLineSrc->getunitId());

                $em->persist($saleDocumentLineDest);
                $saleDocumentLinesDest[] = $saleDocumentLineDest;
            } else {
                
                $saleDocumentLine->setDescription($saleDocumentLineSrc->getDescriptionclear());
                $saleDocumentLine->setQuantity($saleDocumentLineSrc->getQuantity());
                $saleDocumentLine->setSaleDocumentNumber($saleDocument->getDocumentNumber());
                $saleDocumentLine->setSaleDocument($saleDocument);
                // $saleDocumentLine->setItem($this->getItemInSaleDocumentLineId($saleDocumentLineSrc->getitemid()));
                $saleDocumentLine->setUnitId($saleDocumentLineSrc->getunitId());
                $saleDocumentLinesDest[] = $saleDocumentLine;
            }
        }
        $em->flush();
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
        $date = new \DateTime("now");
        foreach ($saleDocuments as $document => $attribut) {

            $saleDoc = $em->getRepository(\PlanningBundle\Entity\EBP\SaleDocument::class)
                ->find($attribut['id']);

            if (is_null($saleDoc)) {

                $saleDocument = new \PlanningBundle\Entity\EBP\SaleDocument();
                $saleDocument->setId($attribut['id']);
                $saleDocument->setDocumentNumber($attribut['documentnumber']);
                $saleDocument->setDocumentDate($attribut['documentdate']);
                $saleDocument->setDocumentWishDate($attribut['deliverydate']);
                $saleDocument->setCustomerName($attribut['customername']);
                $saleDocument->setNumberPrefix($attribut['numberprefix']);

                $saleDocument->setSaleDocumentLines($this->getSaleDocumentLines($saleDocument));
                $saleDocument->setCustomer($this->getSaleDocumentCustomer($attribut['customerid']));
                $saleDocument->setLastImportDate($date);
                $em->persist($saleDocument);
            } else {
                
                $saleDoc->setDocumentNumber($attribut['documentnumber']);
                $saleDoc->setDocumentDate($attribut['documentdate']);
                $saleDoc->setDocumentWishDate($attribut['deliverydate']);
                $saleDoc->setCustomerName($attribut['customername']);
                $saleDoc->setNumberPrefix($attribut['numberprefix']);

                $saleDoc->setSaleDocumentLines($this->getSaleDocumentLines($saleDoc));
                $saleDoc->setCustomer($this->getSaleDocumentCustomer($attribut['customerid']));
                $saleDoc->setLastImportDate($date);
            }
        $countSaleDocument++;    
        $progress->advance();    
        }
        $em->flush();
        $progress->finish();
    }
}