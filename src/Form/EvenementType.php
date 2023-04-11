<?php

namespace App\Form;

use App\Entity\Evenement;
use App\Entity\EvenementType AS EvenementTypeEntity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\ChoiceList\ChoiceList;

class EvenementType extends AbstractType
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
            ->add('idEvenementType', ChoiceType::class, [
                /*'placeholder' => 'Choose an author',
                 'choice_attr' => ChoiceList::attr($this, function (?EvenementType $EvenementTypeEntity) {
                    return $EvenementTypeEntity ? [$EvenementTypeEntity->getIdEvenementType() => $EvenementTypeEntity->getNomEvenementType()] : [];
                })*/
            ])
            ->add('save',SubmitType::class)
            ->add('Reset',ResetType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
