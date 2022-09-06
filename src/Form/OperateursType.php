<?php

namespace App\Form;

use App\Entity\Operateurs;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OperateursType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('numeroBio')
            ->add('siret')
            ->add('codeNAF')
            ->add('gerant')
            ->add('raisonSociale')
            ->add('email')
            ->add('telephone')
            ->add('siteWeb')
            ->add('dateMAJ')
            ->add('categories')
            ->add('activites')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Operateurs::class,
        ]);
    }
}
