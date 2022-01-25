<?php

declare(strict_types=1);

namespace App\Form\Type;

use App\Entity\Planet;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PlanetV1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class)
            ->add('diameter', NumberType::class)
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'gas' => 'gas',
                    'ice' => 'ice',
                    'stone' => 'stone',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults(
            [
                'data_class' => Planet::class,
            ]
        );
    }
}
