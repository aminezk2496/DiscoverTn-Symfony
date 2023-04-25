<?php

namespace App\Form;

use App\Entity\Hebergement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class HebergementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomHeber')
            ->add('descriptionHeber')
            ->add('nbChambre')
            ->add('prixHeber')
            ->add('localisationHeber', ChoiceType::class, [
                'choices' => [
                    'Tunis' => 'Tunis',
                    'Sousse' => 'Sousse',
                    'Nabeul' => 'Nabeul',
                ],
                'placeholder' => 'Sélectionner une ville',
            ])
            ->add('contactHeber')
            ->add('typeHeber', ChoiceType::class, [
                'choices' => [
                    'Motel' => 'Motel',
                    'Hotel' => 'Hotel',
                    'Maison hote' => 'Maison hote',
                ],
                'placeholder' => 'Sélectionner votre type',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Hebergement::class,
        ]);
    }
}
