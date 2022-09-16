<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\{TextType,ButtonType,EmailType,HiddenType,PasswordType,TextareaType,SubmitType,NumberType,DateType,MoneyType,BirthdayType};
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;


class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function contact(Request $request): Response
    {

        $form = $this->createFormBuilder()
            ->add('nom', TextType::class, [
                'constraints' => [
                    new Length(['min' => 2]),
                    new Length(['max' => 25]),
                    new NotBlank(),
                ],
                'attr' => [
                    'placeholder' => 'Nom',
                ],
                'label' => ' ',
            ])
            ->add('prenom', TextType::class, [
                'constraints' => [
                    new Length(['min' => 2]),
                    new Length(['max' => 25]),
                    new NotBlank(),
                ],
                'attr' => [
                    'placeholder' => 'Prénom'
                ],
                'label' => ' ',
            ])
            ->add('email', EmailType::class, [
                'constraints' => [
                    new Length(['min' => 3]),
                    new Length(['max' => 50]),
                    new NotBlank(),
                ],
                'attr' => [
                    'placeholder' => 'Email'
                ],
                'label' => ' ',
            ])
            ->add('telephone', TextType::class, [
                'constraints' => [
                    new Length(['min' => 10]),
                    new Length(['max' => 10]),
                    new NotBlank(),
                ],
                'attr' => [
                    'placeholder' => 'Téléphone'
                ],
                'label' => ' ',
            ])
            ->add('sujet', TextType::class, [
                'constraints' => [
                    new Length(['min' => 2]),
                    new Length(['max' => 50]),
                    new NotBlank(),
                ],
                'attr' => [
                    'placeholder' => 'Sujet de votre message'
                ],
                'label' => ' ',
            ])
            ->add('message', TextareaType::class, [
                'constraints' => [
                    new Length(['min' => 2]),
                    new Length(['max' => 500]),
                    new NotBlank(),
                ],
                'attr' => [
                    'placeholder' => 'Message',
                    'rows' => '5',
                ],
                'label' => ' ',
            ])
            ->add('Envoyer', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $data = $form->getData();

            //var_dump($data);

        }

        return $this->render('contact/contact.html.twig', [
            'controller_name' => 'Contact_Ctrl',
            'form' => $form->createView(),
        ]);
    }
}