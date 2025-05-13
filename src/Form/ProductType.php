<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Product;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Positive;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'Product Name'],
                'label_attr' => ['class' => 'form-label'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a product name',
                    ]),
                ],
            ])
            ->add('description', TextareaType::class, [
                'required' => false,
                'attr' => ['class' => 'form-control', 'rows' => 5, 'placeholder' => 'Product Description'],
                'label_attr' => ['class' => 'form-label'],
            ])
            ->add('price', MoneyType::class, [
                'currency' => 'USD',
                'divisor' => 1,
                'attr' => ['class' => 'form-control', 'placeholder' => 'Price'],
                'label_attr' => ['class' => 'form-label'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a price',
                    ]),
                    new Positive([
                        'message' => 'Price must be positive',
                    ]),
                ],
            ])
            ->add('stock', NumberType::class, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'Stock Quantity'],
                'label_attr' => ['class' => 'form-label'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter stock quantity',
                    ]),
                    new Positive([
                        'message' => 'Stock must be positive',
                    ]),
                ],
            ])
            ->add('category', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'name',
                'placeholder' => 'Select a category',
                'required' => false,
                'attr' => ['class' => 'form-control'],
                'label_attr' => ['class' => 'form-label'],
            ])
            ->add('imageFile', FileType::class, [
                'mapped' => false,
                'required' => false,
                'label' => 'Product Image',
                'attr' => ['class' => 'form-control'],
                'label_attr' => ['class' => 'form-label'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'csrf_token_id' => 'product_item',
        ]);
    }
}