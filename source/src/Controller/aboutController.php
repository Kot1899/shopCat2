<?php

namespace App\Controller;

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
        $aboutPage =$doctrine->getRepository(aboutPage::class)->find(4);
        return $this->render("about/aboutPage.html.twig",[
            "aboutPage"=>$aboutPage,
        ]);
    }
}