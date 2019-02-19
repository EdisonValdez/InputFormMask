<?php

namespace App\Form;

use App\Entity\LaunchFolders;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LaunchFoldersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code_name')
            ->add('link')
            ->add('folder_description')
            ->add('business_unit')
            ->add('folder_image')
            ->add('product_category')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => LaunchFolders::class,
        ]);
    }
}
