<?php

namespace App\Controller\Admin;

use App\Entity\Blog;
use App\Entity\Logo;
use App\Entity\About;
use App\Entity\Contact;
use App\Entity\Service;
use App\Entity\Carousel;
use App\Entity\Supports;
use App\Entity\Personnel;
use App\Entity\Statistic;
use App\Entity\InfoFooter;
use App\Entity\Newsletter;
use App\Entity\InfoContact;
use App\Entity\Testimonial;
use App\Entity\WhyChooseUs;
use App\Entity\ReseauSocial;
use App\Entity\Certification;
use App\Entity\PersonnelReseauSocial;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\Admin\WhyChooseUsCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
      //  return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
         $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
         return $this->redirect($adminUrlGenerator->setController(PersonnelCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Securitedabord');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('A propos de nous', 'fa fa-list', About::class);
        yield MenuItem::linkToCrud('A propos du blog', 'fa fa-blog', Blog::class);
        yield MenuItem::linkToCrud('Carousel', 'fa fa-blog', Carousel::class);
        yield MenuItem::linkToCrud('Certification', 'fa fa-certificate', Certification::class);
        yield MenuItem::linkToCrud('Contact', 'fa fa-address-book', Contact::class);
        yield MenuItem::linkToCrud('Information Contact', 'fa fa-address-book', InfoContact::class);
        yield MenuItem::linkToCrud('Information Footer', 'fa fa-shoe-prints', InfoFooter::class);
        yield MenuItem::linkToCrud('Logo', 'fa fa-slack', Logo::class);
        yield MenuItem::linkToCrud('Newsletter', 'fa fa-envelope', Newsletter::class);
        yield MenuItem::linkToCrud('Personnel', 'fa fa-person', Personnel::class);
        yield MenuItem::linkToCrud('Personnel réseau social', 'fa fa-users', PersonnelReseauSocial::class);
        yield MenuItem::linkToCrud('Reseau sociale', 'fa fa-user-group', ReseauSocial::class);
        yield MenuItem::linkToCrud('Service', 'fa fa-server', Service::class);
        yield MenuItem::linkToCrud('Statistique', 'fa fa-chart-simple', Statistic::class);
        yield MenuItem::linkToCrud('Supports', 'fa fa-ticket', Supports::class);
        yield MenuItem::linkToCrud('Testimonial', 'fa fa-ticket', Testimonial::class);
        yield MenuItem::linkToCrud('Pourquoi nous choisir', 'fa fa-ticket', WhyChooseUs::class);
    }
}
