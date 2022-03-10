<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ReservationType extends AbstractType
{
    //formulaire de la fonction ajouter
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nbrPersonnes')->add('heure',TimeType::class, [
            'widget' => 'choice',
            'hours' => range(date('H'), 23),
            'minutes' => range(date('i')+1, 59)
        ])->add('date',DateType::class, array(
            'widget' => 'choice',
            'years' => range(date('Y'), date('Y')),
            'months' => range(date('m'), 12),
            'days' => range(date('d'), 31)
        ))
            ->add('name')
            //bouton reset pour effacer tous les champs
            ->add('reset', ResetType::class)
            ->add('ok',SubmitType::class);
    }



}
