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
            ->add('operateur', EntityType::class, [
                // looks for choices from this entity
                'class' => Operateurs::class,
                // uses the User.username property as the visible option string
                'choice_label' => 'raison_sociale',
                // used to render a select box, check boxes or radios
                'multiple' => true,
                'label' => 'Opérateurs : ',
                'attr' => [
                    'class' => 'input-form',
                ],
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Categories::class,
        ]);
    }
}
