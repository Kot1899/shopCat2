<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class myController extends AbstractController
{
    /**
     * @return Response
     * @Route("/", name="mainPage")
     */
    public function mainPage(): Response
    {
        return $this->render("main/mainPage.html.twig");
    }
}