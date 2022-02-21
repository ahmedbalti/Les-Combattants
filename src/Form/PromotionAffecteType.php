<?php

namespace App\Form;

use App\Entity\PromotionAffecte;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PromotionAffecteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('delai', DateType::class)
            ->add('idUser', IntegerType::class)
            ->add('idPromo', IntegerType::class)
            ->add('delai', DateType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PromotionAffecte::class,
        ]);
    }
}
