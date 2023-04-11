<?php

namespace App\Form;

use App\Entity\Evenement;
use App\Entity\EvenementType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class Evenement1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        
        $builder
            ->add('titreEvent')
            ->add('dateDebutEvent')
            ->add('dateFinEvent')
            ->add('prixEvent')
            ->add('lieuEvent')
            ->add('descEvent')
            ->add('imageEvent')
           /* ->add('idEvenementType',EntityType::class, array(
                'class' => EvenementType::class,
                'label' => 'Type',
                'choice_label' => 'nom_evenement_type',
                'placeholder' => '-',
                'choice_label' => function (EvenementType $group) {
                    return $group->getNomEvenementType();
                },
                'multiple' => false,
                'expanded' => false,
                'mapped'=> false,
            ))*/
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
