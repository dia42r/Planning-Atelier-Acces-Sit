<?php

namespace PlanningBundle\Form\Main;

use Doctrine\ORM\EntityRepository;
use PlanningBundle\Entity\Main\Planning;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PlanningType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder->add('saleDocumentLine', EntityType::class, [
                    'label' => 'Numero de la commande',
                    'disabled' => true,
                    'class'  => 'PlanningBundle\Entity\EBP\SaleDocumentLine',
                    ])
                
                ->add('startDate', DateType::class, [
                        'label' => 'Date de debut',
                        'widget' => 'single_text',
                        'html5' => false,
                        'attr' => ['class' => 'js-datepicker'],
                        'required' => false
                        ])
                
                ->add('parentPlanning',EntityType::class, array(
                    'class' => Planning::class, 
                    'query_builder' => function (EntityRepository $er) use($options) {
                            return $er->createQueryBuilder('p')
                            ->join('p.saleDocumentLine', 's')
                            ->where('s.saleDocumentNumber = :saleDocument')
                            ->setParameter(':saleDocument', $options['sale_document'])
                            ->orderBy('p.startDate', 'ASC');
                    },
                    
                    'placeholder' => '-- Selectionner la après laquelle doit commencer cette tâche --',
                    'required' => false,
                    'label' => 'Commencer apres la tâche suivante ',
                    'choice_label' => 'info'
                         
                    
                ))
                            
                            
                ->add('task', EntityType::class, [
                    'label' => 'Tâche',
                    'class'  => 'PlanningBundle\Entity\Main\Task',
                    'placeholder' => '-- Selectionner une tâche --',
                    'choice_label' => 'name'
                    ])
                
                ->add('actor', EntityType::class, [
                    'label' => 'Acteur',
                    'class' => 'PlanningBundle\Entity\Main\Actor',
                    'placeholder' => '-- Selectionner un acteur --',
                    'required' => true
                    ])
                

                ->add('duration', null, array(
                    'label' => 'Nbre d\' heure',
                ))
                ->add('endDate', null, array(
                    'label' => 'date de fin',
                    'disabled' => true
                ))
                
                ->add('comment',TextareaType::class, [
                    'label' => 'Commentaire',
                    'attr' => array('class' => 'tinymce'),
                    'required' => false,    
                ])
                ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PlanningBundle\Entity\Main\Planning', 
            'sale_document' => null
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'planningbundle_main_planning';
    }


}
