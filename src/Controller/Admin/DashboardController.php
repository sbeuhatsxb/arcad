<?php

namespace App\Controller\Admin;

use App\Entity\Award;
use App\Entity\Category;
use App\Entity\Education;
use App\Entity\Job;
use App\Entity\User;
use App\Entity\WebProject;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
//        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Sebastien');
    }

    public function configureMenuItems(): iterable
    {

        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Categories', 'icon class', Category::class);
        yield MenuItem::linkToCrud('Expériences', 'icon class', Job::class);
        yield MenuItem::linkToCrud('Certifications', 'icon class', Award::class);
        yield MenuItem::linkToCrud('Etudes', 'icon class', Education::class);
        yield MenuItem::linkToCrud('Projets web', 'icon class', WebProject::class);
        yield MenuItem::linkToCrud('Utilisateurs', 'icon class', User::class);
    }
}
