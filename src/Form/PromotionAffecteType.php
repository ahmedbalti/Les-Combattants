<?php

namespace App\Form;

use App\Entity\Promotion;
use App\Entity\PromotionAffecte;
use App\Entity\Utilisateur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
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
            ->add('idUser', EntityType::class, ['class' => Utilisateur::class, 'choice_label' => 'nom'])
            ->add('idPromo', EntityType::class, ['class' => Promotion::class, 'choice_label' => 'title'])
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
