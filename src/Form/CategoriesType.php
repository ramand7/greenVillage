<?php

namespace App\Form;

use App\Entity\Categories;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategoriesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'attr' => [
                    'class' => 'form-control', 
                    ]
            ])
            ->add('slug', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                ]
            ])
            ->add('image', TextType::class, [
                'attr' => [
                'class' => 'form-control',
                ],
                'required' => false,
            ])
				    ->add('parent', TextType::class, [
                'attr' => [
                'class' => 'form-control',
                ],
                'required' => false, // La catégorie parente n'a pas de parent
            ])
        ;
    }
    // Pour lier le formulaire à l'entité, on va utiliser la méthode configureOptions
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Categories::class,
        ]);
    }
}
