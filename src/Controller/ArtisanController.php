<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\{TextType,ButtonType,EmailType,HiddenType,PasswordType,TextareaType,SubmitType,NumberType,DateType,MoneyType,BirthdayType};
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class ArtisanController extends AbstractController
{
    /**
     * @Route("/artisan/id/{id}", name="artisan")
     */
    public function artisan(Request $request, $id = 3): Response
    {

        return $this->render('artisan/artisan.html.twig', [
            'controller_name' => 'Artisan_Ctrl',
        ]);
        
    }
}