<?php

namespace PlanningBundle\Command;

use SqlSrvBundle\Entity\Item;
use SqlSrvBundle\Entity\Saledocument;
use SqlSrvBundle\Entity\Saledocumentline;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

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
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln([
            'Start',
            '====='
        ]);

        if ($input->getArgument('sql') == 1) {

            $test = $this->getContainer()
                ->get('doctrine.orm.customer_entity_manager')
                ->getRepository(Saledocument::class)
                ->findSafeDoc();

            $em = $this->getContainer()
                ->get('doctrine.orm.default_entity_manager');

            $output->writeln([
                'ready go',
                '========'
            ]);

            $progress = new ProgressBar($output, count($test));
            // starts and displays the progress bar
            $progress->start();

            $batchSize = 20;
            foreach ($test as $key => $safe ) {
//            dump($key);
//            dump($safe);
//            die;
                $safedocument = new \PlanningBundle\Entity\Customer\SaleDocument();
                $safedocument->setId($safe['id']);
                $safedocument->setDocumentNumber($safe['documentnumber']);
                $safedocument->setDocumentDate($safe['documentdate']);
                $safedocument->setDocumentWishDate($safe['deliverydate']);
                $safedocument->setCustomerName($safe['customername']);
                $safedocument->setNumberPrefix($safe['numberprefix']);

                $em->persist($safedocument);

                $progress->advance();
                if (($key % $batchSize) === 0) {
                    var_dump('ok');
//                var_dump($em);
                    $em->flush();
                    $em->clear(); // Detaches all objects from Doctrine!
                }
            }
            $em->flush();
            $em->clear();
        }
        elseif ($input->getArgument('sql') == 2){
            $items = $this->getContainer()
                ->get('doctrine.orm.customer_entity_manager')
                ->getRepository(Item::class)
                ->findItems();
            $em = $this->getContainer()->get('doctrine.orm.default_entity_manager');
            $output->writeln([
                'ready go',
                '========'
            ]);
            $progress = new ProgressBar($output, count($items));
// starts and displays the progress bar
            $progress->start();
            $batchSize = 20;
            foreach ($items as $key => $safe ) {
//            dump($key);
//            dump($safe['id'],$safe['caption']);
//            die;
                $item = new \PlanningBundle\Entity\Customer\Item();
                $item->setId($safe['id']);
                $item->setCaption($safe['caption']);
                $item->setDesComm($safe['descom']);
                $em->persist($item);
                $progress->advance();
                if (($key % $batchSize) === 0) {
//                dump($item);
                    dump('ok');
//                die;
                    $em->flush();
                    $em->clear(); // Detaches all objects from Doctrine!
                }
            }
            $em->flush();
            $em->clear();
            $progress->finish();
        }
        elseif ($input->getArgument('sql') == 3){

            $test = $this->getContainer()
                ->get('doctrine.orm.customer_entity_manager')
                ->getRepository(Saledocumentline::class)
                ->findDetails();
            $em = $this->getContainer()->get('doctrine.orm.default_entity_manager');
//        die("ok");
            $output->writeln([
                'ready go',
                '========'
            ]);
            $progress = new ProgressBar($output, count($test));
// starts and displays the progress bar
            $progress->start();
            $batchSize = 20;
            foreach ($test as $key => $safe ) {
//            dump($key);
//            dump($safe);
//            die;
                $safedocument = $em->getRepository(\PlanningBundle\Entity\Customer\SaleDocument::class)
                    ->find($safe['documentid']);
                if ($safe['itemid'] != null) {
                    $item = $em->getRepository(\PlanningBundle\Entity\Customer\Item::class)
                        ->find($safe['itemid']);
                }
                else {
                    $item = null;
                }
                if ($safedocument != null) {
                    $safedocumentline = new \PlanningBundle\Entity\Customer\SaleDocumentLine();
                    $safedocumentline->setId($safe['id']);
                    $safedocumentline->setSaleDocument($safedocument);
                    $safedocumentline->setDocumentid($safe['documentid']);
                    $safedocumentline->setItem($item);
                    $safedocumentline->setDescription($safe['descriptionclear']);
                    $safedocumentline->setQuantity($safe['quantity']);
                    $em->persist($safedocumentline);
                }
                else {
                    dump('non CAT');
                }
                $progress->advance();
                if (($key % $batchSize) === 0) {
//                dump($safedocumentline);
                    dump('succes');
//                die;
                    $em->flush();
                    $em->clear(); // Detaches all objects from Doctrine!
                }
            }
            $em->flush();
            $em->clear();
            $progress->finish();
        }
    }
}