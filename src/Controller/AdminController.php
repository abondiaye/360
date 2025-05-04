<?php

namespace App\Controller;

use App\Entity\FlProjects;
use App\Form\FlProjectsType;
use App\Repository\FlProjectsRepository;
use App\Repository\FlCustomerRepository;
use App\Repository\FlInvoicesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class AdminController extends AbstractController
{
    #[Route('/', name: 'admin_dashboard')]
    public function dashboard(
        FlProjectsRepository $projectsRepository,
        FlCustomerRepository $customersRepository,
        FlInvoicesRepository $invoicesRepository
    ): Response {
        return $this->render('admin/dashboard.html.twig', [
            'project_count' => $projectsRepository->count([]),
            'client_count' => $customersRepository->count([]),
            'invoice_count' => $invoicesRepository->count([]),
        ]);
    }

    #[Route('/projects', name: 'admin_projects')]
    public function projects(FlProjectsRepository $projectsRepository): Response
    {
        return $this->render('admin/projects.html.twig', [
            'projects' => $projectsRepository->findAll(),
        ]);
    }

    #[Route('/projects/add', name: 'admin_add_project')]
    public function addProject(Request $request, EntityManagerInterface $em): Response
    {
        $project = new FlProjects();
        $form = $this->createForm(FlProjectsType::class, $project);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($project);
            $em->flush();

            $this->addFlash('success', 'Projet ajouté avec succès.');
            return $this->redirectToRoute('admin_projects');
        }

        return $this->render('admin/add_project.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/projects/{id}/delete', name: 'admin_delete_project', methods: ['POST'])]
public function deleteProject(
    FlProjects $project,
    Request $request,
    EntityManagerInterface $em
): Response {
    if ($this->isCsrfTokenValid('delete_project_' . $project->getId(), $request->request->get('_token'))) {
        $em->remove($project);
        $em->flush();
        $this->addFlash('success', 'Projet supprimé avec succès.');
    } else {
        $this->addFlash('danger', 'Token CSRF invalide.');
    }

    return $this->redirectToRoute('admin_projects');
}


    #[Route('/projects/{id}/edit', name: 'admin_edit_project')]
    public function editProject(
        FlProjects $project,
        Request $request,
        EntityManagerInterface $em
    ): Response {
        $form = $this->createForm(FlProjectsType::class, $project);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Projet modifié avec succès.');
            return $this->redirectToRoute('admin_projects');
        }

        return $this->render('admin/edit_project.html.twig', [
            'form' => $form->createView(),
            'project' => $project,
        ]);
    }

    #[Route('/clients', name: 'admin_clients')]
    public function clients(): Response
    {
        return $this->render('admin/clients.html.twig');
    }

    #[Route('/invoices', name: 'admin_invoices')]
    public function invoices(FlInvoicesRepository $invoicesRepository): Response
    {
    // Récupère toutes les factures depuis le repository
    $factures = $invoicesRepository->findAll();

    return $this->render('admin/invoices.html.twig', [
        'factures' => $factures,  // Passe la variable 'factures' au template
    ]);
}

    #[Route('/logout', name: 'admin_logout')]
    public function logout(): void
    {
        throw new \LogicException('Cette méthode est interceptée par le firewall de Symfony.');
    }
}
