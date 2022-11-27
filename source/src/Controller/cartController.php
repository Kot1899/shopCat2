<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class cartController extends AbstractController
{
    /**
     * @return Response
     * @Route("/cartt", name="cartPage")
     */
    public function cartPage(): Response
    {
        return $this->render("cart/cartPage.html.twig");
    }
}