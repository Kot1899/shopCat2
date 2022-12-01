<?php

namespace App\Controller;

use App\Entity\ProductPage;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class productController extends AbstractController
{
    /**
     * @return Response
     * @Route("/product", name="productPage")
     */
    public function productPage(ManagerRegistry $doctrine): Response
    {
//        $productPage =$doctrine->getRepository(ProductPage::class)->find(1);
        $productPageArray =$doctrine->getRepository(productPage::class)->findAll();
        return $this->render("product/productPage.html.twig",[
//            "productPage"=>$productPage,
            "productPageArray"=>$productPageArray,
        ]);
    }
}
