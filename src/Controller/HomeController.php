<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\OperateursRepository;
use App\Entity\Operateurs;
use App\Repository\CategoriesRepository;
use App\Entity\Categories;
use Doctrine\ORM\Tools\Pagination\Paginator;


class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * 
     */
    public function home(Request $request, CategoriesRepository $repoCategories, OperateursRepository $repoOperateurs, $page = 1, $cat = null): Response
    {
        $request->getUri();

        if (strpos($request, "?page=") !== FALSE) {
            $Tblpage = explode("?page=", $request);
            $page = (int)$Tblpage[1];
        } else {
            $page = 1;
        }

        /* Nombre total d'opérateurs */
        $totalOperateurs = $repoOperateurs->createQueryBuilder('a')
            ->select('count(a.id)')
            ->getQuery()
            ->getSingleScalarResult();


        /* Liste des catégories */
        $categories = $repoCategories->createQueryBuilder('a')
            ->select('a.nom, a.id')
            ->getQuery()
            ->getScalarResult();


        $form = $this->createFormBuilder()
                ->getForm();

        $cat = $request->query->get('categorie');


        /* Extraction de toutes les artisans */
        // Create our query
        /*$query = $repoOperateurs->createQueryBuilder('o')
            ->orderBy('o.id', 'ASC')
            ->getQuery();*/

        $query = $repoOperateurs->createQueryBuilder('o');
        if ($cat != '') {
            $query->where(':category MEMBER OF o.categories');  
            $query->setParameter("category", $cat);
        }
        $query->orderBy('o.id', 'ASC');
        $query->getQuery();

        $limit = 6;
        
        $paginator = $repoOperateurs->getAllOperateurs($query, $page, $limit);
        $maxPages = ceil($paginator->count() / $limit);
        $thisPage = $page;

        return $this->render('home/home.html.twig', [
            'controller_name' => 'Home_Ctrl',
            'maxPages' => $maxPages, 
            'thisPage' => $thisPage,
            'donnees' => $totalOperateurs,
            'categories' => $categories,
            'operateursFiltered' => $paginator,
            'form' => $form->createView(),
            'cat' => $cat,
        ]);
    }
}