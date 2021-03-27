<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchRecetteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('mot', SearchType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control form-control-lg',
                    'placeholder' => 'Entrez un ou plusieurs mots clés...',
                ]
            ])
            ->add('Rechercher', SubmitType::class, [
                'attr' => [
                    'style' => 'margin: 10px 970px',
                    'class' => 'btn btn-primary'
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
