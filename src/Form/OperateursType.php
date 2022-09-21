<?php

namespace App\Form;

use App\Entity\Operateurs;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\{TextType,ButtonType,EmailType,ChoiceType,HiddenType,PasswordType,TextareaType,SubmitType,NumberType,DateType,MoneyType,BirthdayType};
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use App\Entity\Categories;
use App\Entity\Activites;

class OperateursType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('numeroBio', TextType::class, [
                'constraints' => [
                    new Length(['min' => 2]),
                    new Length(['max' => 25]),
                    new NotBlank(),
                ],
                'attr' => [
                    'class' => 'input-form',
                ],
                'label' => 'N° BIO : ',
            ])
            ->add('siret', TextType::class, [
                'constraints' => [
                    new Length(['min' => 2]),
                    new Length(['max' => 25]),
                    new NotBlank(),
                ],
                'attr' => [
                    'class' => 'input-form',
                ],
                'label' => 'N° Siret : ',
            ])
            ->add('codeNAF', TextType::class, [
                'constraints' => [
                    new Length(['min' => 2]),
                    new Length(['max' => 25]),
                    new NotBlank(),
                ],
                'attr' => [
                    'class' => 'input-form',
                ],
                'label' => 'Code NAF : ',
            ])
            ->add('gerant', TextType::class, [
                'constraints' => [
                    new Length(['min' => 2]),
                    new Length(['max' => 50]),
                    new NotBlank(),
                ],
                'attr' => [
                    'class' => 'input-form',
                ],
                'label' => 'Gérant : ',
            ])
            ->add('raisonSociale', TextType::class, [
                'constraints' => [
                    new Length(['min' => 2]),
                    new Length(['max' => 50]),
                    new NotBlank(),
                ],
                'attr' => [
                    'class' => 'input-form',
                ],
                'label' => 'Raison sociale : ',
            ])
            ->add('email', TextType::class, [
                'constraints' => [
                    new Length(['min' => 2]),
                    new Length(['max' => 255]),
                    new NotBlank(),
                ],
                'attr' => [
                    'class' => 'input-form',
                ],
                'label' => 'Email : ',
            ])
            ->add('telephone', TextType::class, [
                'constraints' => [
                    new Length(['min' => 10]),
                    new Length(['max' => 10]),
                    new NotBlank(),
                ],
                'attr' => [
                    'class' => 'input-form',
                ],
                'label' => 'N° Téléphone : ',
            ])
            ->add('siteWeb', TextType::class, [
                'constraints' => [
                    new Length(['min' => 2]),
                    new Length(['max' => 255]),
                    new NotBlank(),
                ],
                'attr' => [
                    'class' => 'input-form',
                ],
                'label' => 'Site web : ',
            ])
            ->add('categories', EntityType::class, [
                // looks for choices from this entity
                'class' => Categories::class,
            
                // uses the User.username property as the visible option string
                'choice_label' => 'nom',
            
                // used to render a select box, check boxes or radios
                 'multiple' => true,
                // 'expanded' => true,
                'label' => 'Catégories : ',
                'attr' => [
                    'class' => 'input-form',
                ],
            ])
            ->add('activites', EntityType::class, [
                // looks for choices from this entity
                'class' => Activites::class,
            
                // uses the User.username property as the visible option string
                'choice_label' => 'nom_activite',
            
                // used to render a select box, check boxes or radios
                 'multiple' => true,
                // 'expanded' => true,
                'label' => 'Activités : ',
                'attr' => [
                    'class' => 'input-form',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Operateurs::class,
        ]);
    }
}
