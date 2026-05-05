<?php

namespace App\Form;

use App\Entity\Product;
use App\Enum\Unit; // ASSURE-TOI QUE CE CHEMIN EST LE BON (src/Enum/Unit.php)
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EnumType; // On utilise EnumType
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom',
                'attr' => ['placeholder' => 'Ex: Développement Web']
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
                'attr' => ['rows' => 3, 'placeholder' => 'Détails de la prestation...']
            ])
            ->add('price', NumberType::class, [
                'label' => 'Prix',
                'html5' => true,
            ])
            ->add('unit', EnumType::class, [
            'class' => Unit::class,
            'label' => 'Unité',
            'choice_label' => function (Unit $unit) {
            return match ($unit->name) {
            'HEURE'   => 'Heure',
            'JOUR'    => 'Jour',
            'PIECE'   => 'Pièce',
            'MOIS'    => 'Mois',
            'FORFAIT' => 'Forfait',
            default   => $unit->value,
        };
    },
    'placeholder' => 'Choisir une unité...',
])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}