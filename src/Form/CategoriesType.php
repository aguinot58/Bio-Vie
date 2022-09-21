<?php

namespace App\Form;

use App\Entity\Categories;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\{TextType,ButtonType,EmailType,ChoiceType,HiddenType,PasswordType,TextareaType,SubmitType,NumberType,DateType,MoneyType,BirthdayType};
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

use App\Entity\Operateurs;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CategoriesType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options, Operateurs $operateurs = null): void
    {
        $builder
            ->add('nom', TextType::class, [
                'constraints' => [
                    new Length(['min' => 2]),
                    new Length(['max' => 25]),
                    new NotBlank(),
                ],
                'attr' => [
                    'class' => 'input-form',
                ],
                'label' => 'Nom : ',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Categories::class,
        ]);
    }
}
