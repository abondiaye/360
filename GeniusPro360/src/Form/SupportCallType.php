<?php

namespace App\Form;

use App\Entity\SupportCall;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SupportCallType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('problemDescription')
            ->add('callStartTime', null, [
                'widget' => 'single_text',
            ])
            ->add('callEndTime', null, [
                'widget' => 'single_text',
            ])
            ->add('status')
            ->add('client', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'id',
            ])
            ->add('technician', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SupportCall::class,
        ]);
    }
}
