<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\Panier;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PanierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('quantite', NumberType::class)
            ->add('taille', ChoiceType::class, [
                'choices'  => [
                    'S' => 'S',
                    'M' => 'M',
                    'L' => 'L',
                    'XL' => 'XL',
                ]
            ])
            ->add('couleur', ChoiceType::class, [
                'choices'  => [
                    'Bleu' => 'Bleu',
                    'Black' => 'Black',
                    'Red' => 'Red',
                    'Pink' => 'Pink',
                    'White' => 'White',
                    'Gray' => 'Gray',
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Panier::class,
        ]);
    }
}
