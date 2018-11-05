<?php

namespace PlanningBundle\Form\Main;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class PlanningType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('saleDocumentLine', EntityType::class, array(
                'label' => 'Numero de la commande',
                'disabled' => true,
                'class'  => 'PlanningBundle\Entity\EBP\SaleDocumentLine',
                'choice_label' => 'saleDocumentNumber'))
                
                ->add('startDate', DateType::class, array(
                        'label' => 'Date de debut',
                        'widget' => 'single_text',
                        'html5' => false,
                        'attr' => ['class' => 'js-datepicker'],
                    ))
                
                ->add('task', EntityType::class, array(
                'label' => 'Tâche',
                'class'  => 'PlanningBundle\Entity\Main\Task',
                'choice_label' => 'name'))
                
                ->add('actor', EntityType::class, array(
                    'label' => 'Acteur',
                    'class' => 'PlanningBundle\Entity\Main\Actor'
                ))
                

                ->add('duration', null, array(
                    'label' => 'Nbre d\' heure',
                ))
                ->add('endDate', null, array(
                    'label' => 'date de fin',
                    'disabled' => true
                ))
//                ->add('endDate', null, array(
//                        'widget' => 'single_text',
//                        'html5' => false,
//                        'attr' => ['class' => 'js-datepicker'],
//                        'required' => false,
//                        
//                    ))                
                ->add('comment',TextareaType::class, array(
                'label' => 'Commentaire',
                'attr' => array('class' => 'tinymce'),
                'required' => false,    
                    ))
                ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PlanningBundle\Entity\Main\Planning'
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
