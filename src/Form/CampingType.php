<?php

namespace App\Form;

use App\Entity\Camping;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Validator\Constraints\Type;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class CampingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('dateDebut')
            ->add('dateFin')
            ->add('periode', IntegerType::class, [
                'constraints' => [
                    new NotBlank(),
                ],
            ])

            ->add('prix', NumberType::class, [
                'scale' => 2,
                'constraints' => [
                    new NotBlank(),
                    new Callback([
                        'callback' => function ($prix, ExecutionContextInterface $context) {
                            if (!preg_match('/^\d+(?:\.\d{1,2})?$/', $prix)) {
                                $context->buildViolation('Le prix doit être un nombre décimal valide avec au maximum 2 décimales')
                                        ->addViolation();
                            }
                        },
                    ]),
                ],
            ])
            ->add('description')
            ->add('imagec', FileType::class, [
                'label' => 'Image du camping',
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
        
            ->add('nbr_place')
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
            ]);
        ;
    }
    

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Camping::class,
        ]);
    }
}
