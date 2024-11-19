<?php

namespace App\Form;

use App\Entity\Produit;
use App\Entity\Categories;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('libelle', TextType::class, [
                'attr' => [
                    'class' => 'form-control', 
                    // 'placeholder' => 'Libellé'
                    ]
            ])
            ->add('description', TextareaType::class, [
                'attr' => [
                    'class' => 'form-control',
                    // 'placeholder' => 'Description'
                ]
            ])
            ->add('prixht', MoneyType::class, [
                'attr' => [
                'class' => 'form-control',
                // 'placeholder' => 'Prix HT'
                ]
            ])
            ->add('tva', NumberType::class, [
                'attr' => [
                    'class' => 'form-control',
                    // 'placeholder' => 'TVA'
                ]
            ])
            ->add('stock', IntegerType::class, [
                'attr' => [
                    'class' => 'form-control',
                    // 'placeholder' => 'Stock'
                ]
            ])
            ->add('photo', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    // 'placeholder' => 'Photo'
                ]
            ])
            ->add('categorie', EntityType::class, [
                'class' => Categories::class,
                'choice_label' => 'nom'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }

// Pour être plus précis et pour plus de contrôle !!! (Voire même pour appliquer le thème Boostrap ??)

// public function buildForm(FormBuilderInterface $builder, array $options): void
//     {
//         $builder
//             ->add('libelle', TextType::class, [
//                 'label' => 'Libellé',
//             ])
//             ->add('description', TextareaType::class, [
//                 'label' => 'Description',
//                 'required' => false,
//             ])
//             ->add('prixht', MoneyType::class, [
//                 'label' => 'Prix HT',
//                 'currency' => 'EUR',
//             ])
//             ->add('tva', PercentType::class, [
//                 'label' => 'TVA',
//                 'type' => 'integer',
//             ])
//             ->add('stock', IntegerType::class, [
//                 'label' => 'Stock',
//             ])
//             ->add('photo', FileType::class, [
//                 'label' => 'Photo',
//                 'required' => false,
//                 'mapped' => false, // Si vous ne gérez pas directement le fichier dans l'entité
//             ]);
//     }


}

