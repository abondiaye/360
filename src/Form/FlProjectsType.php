<?php

namespace App\Form;

use App\Entity\FlProjects;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FlProjectsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre du projet',
            ])
            ->add('description', TextType::class, [
                'label' => 'Description',
            ])
            ->add('active', CheckboxType::class, [
                'label' => 'Projet actif',
                'required' => false,
            ])
            ->add('createdOn', DateType::class, [
                'label' => 'Date de création',
                'widget' => 'single_text',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FlProjects::class,
        ]);
    }
}
