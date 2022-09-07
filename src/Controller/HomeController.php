<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\{TextType,ButtonType,EmailType,HiddenType,PasswordType,TextareaType,SubmitType,NumberType,DateType,MoneyType,BirthdayType};


class HomeController extends AbstractController
{

    /**
     * @Route("/", name="home")
     */
    public function home(Request $request): Response
    {

        return $this->render('home/home.html.twig', [
            'controller_name' => 'Home_Ctrl',
        ]);
    }


}