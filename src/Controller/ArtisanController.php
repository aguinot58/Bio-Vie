<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\OperateursRepository;

class ArtisanController extends AbstractController
{
    /**
     * @Route("/artisan/{id}/{cat}", name="artisan")
     */
    public function artisan(Request $request, OperateursRepository $operateursRepository, $id = 3, $cat = 1): Response
    {

        $operateur = $operateursRepository->findOneBySomeField($id);

        return $this->render('artisan/artisan.html.twig', [
            'controller_name' => 'Artisan_Ctrl',
            'categorie' => $cat,
            'operateur' => $operateur,
        ]);
        
    }
}