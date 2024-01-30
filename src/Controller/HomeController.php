<?php

namespace App\Controller;

use App\Entity\Blog;
use App\Entity\Logo;
use App\Entity\About;
use App\Entity\Service;
use App\Entity\Carousel;
use App\Entity\Supports;
use App\Entity\Personnel;
use App\Entity\Statistic;
use App\Entity\InfoFooter;
use App\Entity\InfoContact;
use App\Entity\Testimonial;
use App\Entity\WhyChooseUs;
use App\Entity\Certification;
use App\Controller\AboutController;
use Doctrine\ORM\EntityManagerInterface;
use App\Controller\InfoContactController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    private EntityManagerInterface $em;
    public function __construct(EntityManagerInterface $em) // Injection de dépendance
    {
        $this->em = $em;
    }
    
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        
        //$infoContactResponse = $this->forward('App\Controller\InfoContactController::index');
        //$infoContactContent = $infoContactResponse->getContent();
        //$infoAboutResponse = $this->forward('App\Controller\AboutController::index');
        //$infoAboutContent = $infoAboutResponse->getContent();

        // Informations pour les contacts
        $infosContact = $this->em->getRepository(InfoContact::class)->findAll();
        
        // A propos de nous
        $infosAbout = $this->em->getRepository(About::class)->findAll(); 
        //Récupération du logo
        $logo = $this->em->getRepository(Logo::class)->findAll(); 
        //Infos carousel
        $infosCarousel = $this->em->getRepository(Carousel::class)->findAll();
        
        //Certification

        $certification = $this->em->getRepository(Certification::class)->findAll();

        //Partie sur a propos de nous

        $about = $this->em->getRepository(About::class)->findAll();

        $supports = $this->em->getRepository(Supports::class)->findAll();

        // Partie sur nos services

        $service = $this->em->getRepository(Service::class)->findAll();

        // Partie sur les statistiques

        $statistic = $this->em->getRepository(Statistic::class)->findAll();

        // Choisir

        $choix = $this->em->getRepository(WhyChooseUs::class)->findAll();

        // Partie sur le personnel

        $personnel = $this->em->getRepository(Personnel::class)->findAll();

        // Partie sur les témoignages

        $temo = $this->em->getRepository(Testimonial::class)->findAll();


        // Partie sur le blog

        $blog = $this->em->getRepository(Blog::class)->findAll();

        // Partie du footer

        $footer = $this->em->getRepository(InfoFooter::class)->findAll();





        return $this->render('home/index.html.twig', [
            'infosContact' => $infosContact,
            'infosAbout' => $infosAbout,
            'logo' => $logo,
            'infosCarousel' => $infosCarousel,
            'certification' => $certification,
            'about' => $about,
            'supports' => $supports,
            'service' => $service,
            'statistic' => $statistic,
            'choix' => $choix,
            'personnel' => $personnel,
            'temo' => $temo,
            'blog' => $blog,
            'footer' => $footer,
        ]);
    }
}
