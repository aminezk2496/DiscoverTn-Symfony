<?php

namespace App\Form;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Evenement;
use App\Entity\EvenementType as et;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\ChoiceList\ChoiceList;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;


class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titreEvent',  TextType::class, [
                'label' => 'Titre',
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Le titre de l\'événement ne doit pas être vide',
                    ]),
                ],
                
                ],)
            ->add('dateDebutEvent', DateTimeType::class, [
                'required' => true,
                
            ])
            ->add('dateFinEvent', DateTimeType::class, [
                'required' => true,
                
            ])
            ->add('prixEvent',  TextType::class, [
                
                'required' => true,
                'constraints' => [
                    new Regex([
                        'pattern' => '/^\d+$/',
                        'message' => 'Le prix doit être un nombre entier.',
                    ]),
                ],
                
                ],)
            ->add('lieuEvent',TextType::class, [
                
                'required' => true,
                'constraints' => [
                    new Regex([
                        'pattern'=> '/^[^a-zA-Z]*$/',
                        'message'=>'Le lieu ne doit contenir que des chiffres et des caractères spéciaux',
                    ]),
                ],
                
                ],)
            ->add('descEvent')
            ->add('imageEvent', FileType::class,[
                'label'=>'Upload Image',
                'mapped'=>false,
                'required'=>true
            ])/*->add('idEvenementType', ChoiceType::class, [
                'choices' =>  [new et()],
            ])*/
            ->add('idEvenementType',EntityType::class, array(
                'class' => et::class,
                'label' => 'Type',
                'choice_label' => 'nom_evenement_type',
                'choice_value'=>'id_evenement_type',
                'placeholder' => '-',
               
                'multiple' => false,
                'expanded' => false,
                'mapped'=> true,
            ))
             /*->add('idEvenementType',ChoiceType::class , ['choices'=>
            [
                1=>1,
                2=>2,

            ], 'placeholder'=>'choisir',])*/
             
            ->add('save', SubmitType::class, ['label' => 'Envoyer','attr' => ['class' => 'btn btn-primary'],]);
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
