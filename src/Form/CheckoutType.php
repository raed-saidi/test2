<?php

namespace App\Form;

use App\Entity\Order;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class CheckoutType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('shippingAddress', TextareaType::class, [
                'attr' => ['class' => 'form-control', 'rows' => 3, 'placeholder' => 'Enter shipping address'],
                'label_attr' => ['class' => 'form-label'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter your shipping address',
                    ]),
                ],
            ])
            ->add('billingAddress', TextareaType::class, [
                'attr' => ['class' => 'form-control', 'rows' => 3, 'placeholder' => 'Enter billing address'],
                'label_attr' => ['class' => 'form-label'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter your billing address',
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Order::class,
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'csrf_token_id' => 'checkout_form',
        ]);
    }
}