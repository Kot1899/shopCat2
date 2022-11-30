<?php

namespace App\Controller;

use App\Entity\MainPage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;

use Doctrine\DoctrineBundle\Registry;
use Doctrine\Persistence\ManagerRegistry;

class myController extends AbstractController
{
    /**
     * @return Response
     * @Route("/", name="mainPage")
     */
    public function mainPage(ManagerRegistry $doctrine): Response
    {
        $mainPage =$doctrine->getRepository(MainPage::class)->find(4);
        return $this->render('main/mainPage.html.twig',[
            "mainPage"=>$mainPage,
        ]);
    }
}