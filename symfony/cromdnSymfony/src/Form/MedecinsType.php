<?php

namespace App\Form;

use App\Entity\Delegations;
use App\Entity\Diplomes;
use App\Entity\Exercices;
use App\Entity\Gouvernorats;
use App\Entity\Medecins;
use App\Entity\Modes;
use App\Entity\Nationalites;
use App\Entity\Specialites;
use App\Entity\TypeModeExercices;
use App\Entity\Villes;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MedecinsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $nationalites = new Nationalites();
        $builder
            ->add('id')
            ->add('email')
            ->add('nom')
            ->add('prenom')
            ->add('dateNaissance')
            ->add('lieuNaissance')
            ->add('gsm')
            ->add('fixe')
            ->add('fax')
            ->add('sexe')
            ->add('adresse')
            ->add('etatActuel')
            ->add('anneeDiplome')
            ->add('epouse')
            ->add('siteWeb')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('deletedAt')
            ->add('idNationalite',EntityType::class,[
                'class' => Nationalites::class,
                'choice_label' => 'libelle',])
            ->add('idSpecialite',EntityType::class,[
                'class' => Specialites::class,
                'choice_label' => 'libelle',])
            ->add('idDiplome',EntityType::class,[
                'class' => Diplomes::class,
                'choice_label' => 'libelle',])
            ->add('idVille',EntityType::class,[
                'class' => Villes::class,
                'choice_label' => 'libelle',])
            ->add('idExercice',EntityType::class,[
                'class' => Exercices::class,
                'choice_label' => 'libelle',])
            ->add('idDelegation',EntityType::class,[
                'class' => Delegations::class,
                'choice_label' => 'libelle',])
            ->add('idMode',EntityType::class,[
                'class' => Modes::class,
                'choice_label' => 'libelle',])
            ->add('idGouvernorat',EntityType::class,[
                'class' => Gouvernorats::class,
                'choice_label' => 'libelle',])
            ->add('idTypeMode',EntityType::class,[
                'class' => TypeModeExercices::class,
                'choice_label' => 'libelle',])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Medecins::class,
        ]);
    }
}
