<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\OperateursRepository;
use App\Entity\Operateurs;


class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(Request $request): Response
    {
        // 1. Obtain doctrine manager
        $em = $this->getDoctrine()->getManager();
        
        // 2. Setup repository of some entity
        $repoOperateurs = $em->getRepository(Operateurs::class);
        
        // 3. Query how many rows are there in the Articles table
        $totalOperateurs = $repoOperateurs->createQueryBuilder('a')
            ->select('count(a.id)')
            ->getQuery()
            ->getSingleScalarResult();
        
        // 4. Return a number as response
        //$data = new Response($totalOperateurs);

        return $this->render('home/home.html.twig', [
            'controller_name' => 'Home_Ctrl',
            'donnees' => $totalOperateurs,
        ]);
    }


}