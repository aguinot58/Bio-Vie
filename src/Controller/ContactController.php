<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\{TextType,ButtonType,EmailType,HiddenType,PasswordType,TextareaType,SubmitType,NumberType,DateType,MoneyType,BirthdayType};
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;



class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function contact(Request $request, MailerInterface $mailer): Response
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
                    'class' => 'input-form',
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
                    'placeholder' => 'Prénom',
                    'class' => 'input-form',
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
                    'placeholder' => 'Email',
                    'class' => 'input-form',
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
                    'placeholder' => 'Téléphone',
                    'class' => 'input-form',
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
                    'placeholder' => 'Sujet de votre message',
                    'class' => 'input-form',
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
                    'class' => 'textarea-form',
                ],
                'label' => ' ',
            ])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $data = $form->getData();

            $message = (new Email())
                ->from('admin@bioetvie.com')
                ->to('admin@bioetvie.com')
                ->subject($data['sujet'])
                ->text('Sender : '.$data['nom'].' '.$data['prenom'].' '.$data['telephone'].' '.$data['email'].\PHP_EOL.
                    $data['message'].\PHP_EOL,
                    'text/plain');
            $mailer->send($message);

            $this->addFlash('success', 'Votre message a été envoyé!');

            return $this->redirectToRoute('contact');

        }

        return $this->render('contact/contact.html.twig', [
            'controller_name' => 'Contact_Ctrl',
            'form' => $form->createView(),
        ]);
    }
}