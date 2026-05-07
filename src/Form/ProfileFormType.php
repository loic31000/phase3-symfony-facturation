<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType; 
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfileFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('company_name', TextType::class, [
                'label' => 'Raison Sociale',
            ])
            ->add('siret', TextType::class, [
                'label' => 'SIRET',
                'required' => false,
            ])
            ->add('iban', TextType::class, [
                'label' => 'IBAN',
                'required' => false,
            ])
            ->add('cgv', TextareaType::class, [
            'label' => 'Conditions Générales de Vente (CGV)',
            'required' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}