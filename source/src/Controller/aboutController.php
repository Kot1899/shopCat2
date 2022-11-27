<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class aboutController extends AbstractController
{
    /**
     * @return Response
     * @Route("/about", name="aboutPage")
     */
    public function aboutPage(): Response
    {
        return $this->render("about/aboutPage.html.twig");
    }
}