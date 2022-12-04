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
        $productPageArray =$doctrine->getRepository(productPage::class)->findAll();
        return $this->render("product/productPage.html.twig",[
            "productPageArray"=>$productPageArray,
        ]);
    }

    /**
     * @return Response
     * @Route("/product/{productId}", name="productId")
     */
    public function productId(ManagerRegistry $doctrine, $productId): Response
    {
        $productId =$doctrine->getRepository(ProductPage::class)->find($productId);
        return $this->render("product/productId.html.twig",[
            "productId"=>$productId,
        ]);
    }
}
