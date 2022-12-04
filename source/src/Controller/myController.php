<?php

namespace App\Controller;

use App\Entity\MainPage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
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

    /**
     * @Route ("/login", name="login")
     */
    public function loginAction(AuthenticationUtils $authenticationUtils): Response
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('main/login.html.twig', [
            'last_username' => $lastUsername,
            'error'         => $error,
        ]);
    }
}


