<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UtilisateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomUtilisateur', TextType::class, ['attr'=>['class'=>'input1'],
                'required' => true
            ])
            ->add('prenomUtilisateur', TextType::class, ['attr'=>['class'=>'input1'],
                'required' => true
            ])
            ->add('emailUtilisateur', TextType::class, ['attr'=>['class'=>'input1'],
                'required' => true
            ])
            ->add('loginUtilisateur', TextType::class, ['attr'=>['class'=>'input1'],
                'required' => true
            ])
            ->add('mdpUtilisateur', PasswordType::class,['attr'=>['class'=>'input1'],
            'required' => true
            ])
            ->add('imageUtilisateur',FileType::class,['attr'=>['class'=>'input1'],
                'mapped' => false,
                'label' => "Importer une image",
                'required'=> true
            ])
            ->add('rankUtilisateur')
            ->add('telephoneUtilisateur', TextType::class, ['attr'=>['class'=>'input1'],
                'required' => true
            ])
            ->add('adresseUtilisateur', TextType::class, ['attr'=>['class'=>'input1'],
                'required' => true
            ])
            ->add('Submit',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
