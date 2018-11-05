<?php

namespace PlanningBundle\Form\EBP;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SaleDocumentLineType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('id')
                ->add('saleDocumentNumber')
                ->add('description')
                ->add('quantity')
                ->add('realQuantity')
                ->add('deliveryDate')
                ->add('deliveryState')
                ->add('comment')
                ->add('status')
                ->add('statusBis')
                ->add('totalTime')
                ->add('totalPrev')
                ->add('documentWishDate')
                ->add('unitId')
                ->add('item')
                ->add('saleDocument')
                ->add('planif');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PlanningBundle\Entity\EBP\SaleDocumentLine'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'planningbundle_ebp_saledocumentline';
    }


}
