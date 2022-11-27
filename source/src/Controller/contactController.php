<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class contactController extends AbstractController
{
    /**
     * @return Response
     * @Route("/contact", name="contactPage")
     */
    public function contactPage(): Response
    {
        return $this->render("contact/contactPage.html.twig");
    }
}