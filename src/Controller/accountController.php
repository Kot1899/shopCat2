<?php

namespace App\Controller;

use App\Entity\MainPage;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class accountController extends AbstractController
{
    /**
     * @return Response
     * @Route("/account", name="accountPage")
     */
    public function accountPage(ManagerRegistry $doctrine): Response
    {
        $mainPage =$doctrine->getRepository(MainPage::class)->find(4);
        return $this->render("account/accountPage.html.twig",[
            "mainPage"=>$mainPage,
        ]);
    }
}