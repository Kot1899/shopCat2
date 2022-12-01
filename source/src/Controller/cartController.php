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
     * @Route("/cart/{id}", name="cartPage")
     */
//    public function cartPage(): Response
//    {
//        return $this->render("cart/cartPage.html.twig");
//    }
    public function create(Request $request, $id)                        // для валідаціїї передавати далі реквест
    {
        $post= new Product();
        $postForm=$this->createForm(postForm::class, $post);
        $postForm->handleRequest($request);                         // для валідаціїї отримати реквест
        if( $postForm->isSubmitted() && $postForm->isValid()) {

        }
        return $this->render("cart/cartPage.html.twig",[
            'post'=>$post,
            'postForm'=>$postForm->createView(),
        ]);
    }
}

//need add Request

//if( $postFormNew->isSubmitted() && $postFormNew->isValid())
//{
//    $entityManager_PA = $doctrine->getManager();
//    $entityManager_PA->persist($mypost);
//    $entityManager_PA->flush();
//
//    return $this->redirectToRoute('post_showPost',[
//        'postId'=>$mypost->getId(),
//    ]);
//}