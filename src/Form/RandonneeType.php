<?php

namespace App\Form;

use App\Entity\Randonnee;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;


class RandonneeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('dateRand')
            ->add('lieux', ChoiceType::class, [
                'choices' => [
                    'Bizerte' => 'Bizerte',
                    'AinDrahem' => 'AinDrahem',
                    'Nabeul' => 'Nabeul',
                    'Beja' => 'Beja',
                    'Klibia' => 'Klibia',
                    'Touzer' => 'Touzer',
                    'Gafsa' => 'Gafsa',
                    'Mahdia' => 'Mahdia',
                    'Haouaria' => 'Haouaria',
                    'Tabarka' => 'Tabarka',
                ]
            ])
            ->add('prix')
            ->add('niveauDiff',ChoiceType::class, [
                'choices' => [
                    'Faible' => 'Faible',
                    'Moyen' => 'Moyen',
                    'Difficile' => 'Difficile',
                ]
            ])
            ->add('programme')
            ->add('imagesr', FileType::class, [
                'label' => 'Image',
                'mapped' => false,
                'required' => true,
                'constraints' => [
                    new File([
                        'maxSize' => '2048k',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/gif',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid image (JPEG, PNG or GIF)',
                    ])
                ],
            ])   
            ->add('nbrPlacer', IntegerType::class, [
                'constraints' => [
                    new NotBlank(),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Randonnee::class,
        ]);
    }
}
