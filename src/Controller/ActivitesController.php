<?php

namespace App\Controller;

use App\Entity\Activites;
use App\Form\ActivitesType;
use App\Repository\ActivitesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\Tools\Pagination\Paginator;

#[Route('/activites')]
class ActivitesController extends AbstractController
{
    #[Route('/', name: 'app_activites_index', methods: ['GET'])]
    public function index(ActivitesRepository $activitesRepository, Request $request, $page = 1): Response
    {
        $request->getUri();

        if (strpos($request, "?page=") !== FALSE) {
            $Tblpage = explode("?page=", $request);
            $page = (int)$Tblpage[1];
        } else {
            $page = 1;
        }

        /* Extraction de toutes les activités */

        // Create our query
        $query = $activitesRepository->createQueryBuilder('a')
            ->orderBy('a.id', 'ASC')
            ->getQuery();

        $limit = 7;

        $paginator = $activitesRepository->getAllActivites($query, $page, $limit);
        $maxPages = ceil($paginator->count() / $limit);
        $thisPage = $page;

        return $this->render('activites/index.html.twig', [
            'activites' => $paginator,
            'maxPages' => $maxPages, 
            'thisPage' => $thisPage,
        ]);
    }

    #[Route('/new', name: 'app_activites_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ActivitesRepository $activitesRepository): Response
    {
        $activite = new Activites();
        $form = $this->createForm(ActivitesType::class, $activite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $activitesRepository->add($activite, true);

            return $this->redirectToRoute('app_activites_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('activites/new.html.twig', [
            'activite' => $activite,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_activites_show', methods: ['GET'])]
    public function show(Activites $activite): Response
    {
        return $this->render('activites/show.html.twig', [
            'activite' => $activite,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_activites_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Activites $activite, ActivitesRepository $activitesRepository): Response
    {
        $form = $this->createForm(ActivitesType::class, $activite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $activitesRepository->add($activite, true);

            return $this->redirectToRoute('app_activites_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('activites/edit.html.twig', [
            'activite' => $activite,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_activites_delete', methods: ['POST'])]
    public function delete(Request $request, Activites $activite, ActivitesRepository $activitesRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$activite->getId(), $request->request->get('_token'))) {
            $activitesRepository->remove($activite, true);
        }

        return $this->redirectToRoute('app_activites_index', [], Response::HTTP_SEE_OTHER);
    }
}
