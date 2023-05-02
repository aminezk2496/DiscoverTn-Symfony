<?php

namespace App\Form;

use App\Entity\Voiture;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

class VoitureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('serie', TextType::class, [
            'constraints' => [
                new NotBlank(),
            ],
        ])
        ->add('marque', TextType::class, [
            'constraints' => [
                new NotBlank(),
            ],
        ])
        ->add('nb_chv', TelType::class, [
            'constraints' => [
                new NotBlank(),
            ],
        ])
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'comfort' => 'comfort',
                    'normal' => 'normal',
                    
                ],
                'placeholder' => 'Choose an option',
            ])
        ;
        
        
       
        
        
      
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Voiture::class,
        ]);
    }
}
