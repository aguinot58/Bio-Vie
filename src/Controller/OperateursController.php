<?php

namespace App\Controller;

use App\Entity\Operateurs;
use App\Form\OperateursType;
use App\Repository\OperateursRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\Tools\Pagination\Paginator;


#[Route('/operateurs')]
class OperateursController extends AbstractController
{
    #[Route('/', name: 'app_operateurs_index', methods: ['GET'])]
    public function index(OperateursRepository $operateursRepository, Request $request, $page = 1): Response
    {
        $request->getUri();

        if (strpos($request, "?page=") !== FALSE) {
            $Tblpage = explode("?page=", $request);
            $page = (int)$Tblpage[1];
        } else {
            $page = 1;
        }

        /* Extraction de toutes les artisans */

        // Create our query
        $query = $operateursRepository->createQueryBuilder('o')
            ->orderBy('o.id', 'ASC')
            ->getQuery();

        $limit = 7;

        $paginator = $operateursRepository->getAllOperateurs($query, $page, $limit);
        $maxPages = ceil($paginator->count() / $limit);
        $thisPage = $page;

        return $this->render('operateurs/index.html.twig', [
            'operateurs' => $paginator,
            'maxPages' => $maxPages, 
            'thisPage' => $thisPage,
        ]);
    }

    #[Route('/new', name: 'app_operateurs_new', methods: ['GET', 'POST'])]
    public function new(Request $request, OperateursRepository $operateursRepository): Response
    {
        $operateur = new Operateurs();
        $operateur->setDateMAJ(new \DateTime('now'));
        $form = $this->createForm(OperateursType::class, $operateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $operateursRepository->add($operateur, true);

            return $this->redirectToRoute('app_operateurs_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('operateurs/new.html.twig', [
            'operateur' => $operateur,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_operateurs_show', methods: ['GET'])]
    public function show(Operateurs $operateur): Response
    {
        return $this->render('operateurs/show.html.twig', [
            'operateur' => $operateur,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_operateurs_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Operateurs $operateur, OperateursRepository $operateursRepository): Response
    {
        $form = $this->createForm(OperateursType::class, $operateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $operateursRepository->add($operateur, true);

            return $this->redirectToRoute('app_operateurs_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('operateurs/edit.html.twig', [
            'operateur' => $operateur,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_operateurs_delete', methods: ['POST'])]
    public function delete(Request $request, Operateurs $operateur, OperateursRepository $operateursRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$operateur->getId(), $request->request->get('_token'))) {
            $operateursRepository->remove($operateur, true);
        }

        return $this->redirectToRoute('app_operateurs_index', [], Response::HTTP_SEE_OTHER);
    }
}
