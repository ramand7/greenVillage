<?php

namespace App\Form;

use App\Entity\User\Utilisateur;
use App\Entity\Client\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UtilisateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email')
            ->add('roles')
            ->add('password')
            ->add('nom')
            ->add('prenom')
            ->add('adresse', TextType::class, [
                'mapped' => false
            ])
            ->add('ville', TextType::class, [
                'mapped' => false
            ])
            ->add('codepostal', TextType::class, [
                'mapped' => false
            ])
            ->add('telephone', TextType::class, [
                'mapped' => false
            ])         
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
