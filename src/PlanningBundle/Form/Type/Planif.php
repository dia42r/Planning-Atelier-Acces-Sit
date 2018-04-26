<?php

namespace PlanningBundle\Form\Type;

use PlanningBundle\Entity\Main\Planification;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Planif extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('timePlanif')
            ->add('datePlanif')
            ->add('actor')
            ->add('competences')
            ->add('startingDate')
            ->add('endDate')
            ->add('comment')
            ->add('saleDocumentLine');

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Planification::class,
        ));
    }

    public function getBlockPrefix()
    {
        return 'planning_bundle_planif';
    }
}
