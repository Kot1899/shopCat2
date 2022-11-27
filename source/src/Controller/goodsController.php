<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class goodsController extends AbstractController
{
    /**
     * @return Response
     * @Route("/goods", name="goodsPage")
     */
    public function goodsPage(): Response
    {
        return $this->render("goods/goodsPage.html.twig");
    }
}