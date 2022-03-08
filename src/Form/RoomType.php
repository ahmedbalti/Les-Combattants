<?php

namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Vich\UploaderBundle\Form\Type\VichImageType;


class RoomType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Number')
            ->add('Etage')
            ->add('NbLit')
            ->add('Price')
            ->add('Description')
            ->add('Emplacement')
            ->add('Type')
            ->add('cover', ImageType::class, array(
                'label' => 'Cover',
                'required' => true ))
            ->add('reset', ResetType::class)
            ->add('ok',SubmitType::class)
        ;
    }



}
