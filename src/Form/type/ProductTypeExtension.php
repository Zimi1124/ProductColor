<?php

declare(strict_types=1);

namespace App\Form\type;

use App\Entity\Product\ProductInterface;
use Sylius\Bundle\ProductBundle\Form\Type\ProductType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

final class ProductTypeExtension extends AbstractTypeExtension
{
    /**
     * @param array<string, mixed> $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('color', ChoiceType::class, [
                'choices' => [
                    'Undefined' => null,
                    'Red' => ProductInterface::COLOR_RED,
                    'Blue' => ProductInterface::COLOR_BLUE,
                    'Green' => ProductInterface::COLOR_GREEN,
                ],
            ])
        ;
    }

    public static function getExtendedTypes(): iterable
    {
        return [ProductType::class];
    }
}
