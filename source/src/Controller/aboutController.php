<?php

namespace App\Controller;

use App\Entity\AboutPage;
use App\Entity\MainPage;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class aboutController extends AbstractController
{
    /**
     * @return Response
     * @Route("/about", name="aboutPage")
     */
    public function aboutPage(ManagerRegistry $doctrine): Response
    {
        $aboutPage =$doctrine->getRepository(AboutPage::class)->find(1);
        $aboutPageArray =$doctrine->getRepository(AboutPage::class)->findAll();
        return $this->render("about/aboutPage.html.twig",[
            "aboutPage"=>$aboutPage,
            "aboutPageArray"=>$aboutPageArray,
        ]);
    }
}