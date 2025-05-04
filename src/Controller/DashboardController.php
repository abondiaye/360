<?php

namespace App\Controller;

use App\Repository\FlProjectsRepository;
use App\Repository\FlCustomerRepository;
use App\Repository\FlInvoicesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_ADMIN')]
#[Route('/admin')]
class DashboardController extends AbstractController
{
    #[Route('/', name: 'admin_dashboard')]
    public function index(
        FlProjectsRepository $projectsRepository,
        FlCustomerRepository $customersRepository,
        FlInvoicesRepository $invoicesRepository
    ): Response {
        $projectCount = $projectsRepository->count([]);
        $clientCount = $customersRepository->count([]);
        $invoiceCount = $invoicesRepository->count([]);

        return $this->render('admin/dashboard.html.twig', [
            'user' => $this->getUser(),
            'project_count' => $projectCount,
            'client_count' => $clientCount,
            'invoice_count' => $invoiceCount,
        ]);
    }
}
