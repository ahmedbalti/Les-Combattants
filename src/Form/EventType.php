<?php

namespace App\Form;

use App\Entity\Event;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class)
            ->add('Date', \Symfony\Component\Form\Extension\Core\Type\DateType::class, [
                'help' => 'Entrez la date de votre evenement',
            ])
            ->add('type', ChoiceType::class, [
                    'choices'  => [
                        'Party' => "Party",
                        'rondonné' => "rondonne",
                        'autre' => "autre",
                    ],]
            )
            ->add('Description', TextareaType::class)
            ->add('lieuid', NumberType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}
