<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class accountController extends AbstractController
{
    /**
     * @return Response
     * @Route("/account", name="accountPage")
     */
    public function accountPage(): Response
    {
        return $this->render("account/accountPage.html.twig");
    }
}