<?php

namespace App\Controller;

use App\Entity\ContactPage;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class contactController extends AbstractController
{
    /**
     * @return Response
     * @Route("/contact", name="contactPage")
     */
    public function contactPage(ManagerRegistry $doctrine): Response
    {
        $contactPage =$doctrine->getRepository(ContactPage::class)->find(1);
        $contactPageArray =$doctrine->getRepository(ContactPage::class)->findAll();
        return $this->render("contact/contactPage.html.twig",[
            "contactPage"=>$contactPage,
            "contactPageArray"=>$contactPageArray,
        ]);
    }
}
