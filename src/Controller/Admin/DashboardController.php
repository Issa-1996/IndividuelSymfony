<?php

namespace App\Controller\Admin;

use App\Entity\Agence;
use App\Entity\Client;
use App\Entity\Compte;
use App\Entity\Profil;
use App\Entity\Transaction;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin")
     * 
     * @return Response
     */
    public function index(): Response
    {
        $routeBuilder = $this->get(AdminUrlGenerator::class);

        return $this->redirect($routeBuilder->setController(AgenceCrudController::class)->generateUrl());
    }

   /* public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Ionic');
    }*/

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Agence', 'fas fa-list', Agence::class);
        yield MenuItem::linkToCrud('Compte', 'fas fa-list', Compte::class);
        yield MenuItem::linkToCrud('User', 'fas fa-list', User::class);
        yield MenuItem::linkToCrud('Transaction', 'fas fa-list', Transaction::class);
        yield MenuItem::linkToCrud('Client', 'fas fa-list', Client::class);
        yield MenuItem::linkToCrud('Profil', 'fas fa-list', Profil::class);
    }
    
}
