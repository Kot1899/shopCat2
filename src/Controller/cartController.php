<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\postForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Sodium\add;

class cartController extends AbstractController
{
    /**
     * @return Response
     * @Route("/cart", name="cartPage")
     */
    public function cartPage(): Response
    {
        return $this->render("cart/cartPage.html.twig");
    }
}

