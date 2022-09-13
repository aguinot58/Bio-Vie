<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class BackOfficeController extends AbstractController
{
    /**
     * @Route("/back", name="back")
     */
    public function back(Request $request): Response
    {

        return $this->render('backOffice/backOffice.html.twig', [
            'controller_name' => 'Back_Ctrl',
        ]);
    }
}