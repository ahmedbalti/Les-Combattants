<?php

namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HotelType extends AbstractType
{
    //formulaire de la fonction ajouter

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Name')
            ->add('NbStars')
            ->add('NbRooms')
            ->add('Address')
            ->add('Description')
            ->add('cover', ImageType::class, array(
                'label' => 'Cover',
                'required' => true
            ))

            //bouton reset pour effacer tous les champs
            ->add('reset', ResetType::class)
            ->add('ok',SubmitType::class);

    }


}
