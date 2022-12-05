<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;

use Doctrine\DoctrineBundle\Registry;
use Doctrine\Persistence\ManagerRegistry;



class createController extends AbstractController
{
//
//private $product=[
//['name'=>'Paolo', 'breed'=>'italian cat', "age"=>3, "story"=>'some story', 'character_cat'=>'hard', 'soldi'=>'6'],
//['name'=>'Filippo', 'breed'=>'italian cat', "age"=>9, "story"=>'some story', 'character_cat'=>'hunter', 'soldi'=>'18'],
//['name'=>'Ricardo', 'breed'=>'brazilian cat', "age"=>12, "story"=>'some story', 'character_cat'=>'hard', 'soldi'=>'24'],
//['name'=>'Ganerro', 'breed'=>'italian cat', "age"=>8, "story"=>'some story', 'character_cat'=>'predator', 'soldi'=>'16'],
//    ['name'=>'Pirlo', 'breed'=>'italian cat', "age"=>21, "story"=>' ', 'character_cat'=>'lion', 'soldi'=>'14'],
//];
//
    /**
     * @return Response
     * @Route("/create", name="createPage")
     */
    public function createPage(ManagerRegistry $doctrine): Response
    {

        $entityManager = $doctrine->getManager();

        foreach ($this->product as $item) {
            $product = new Product();
            $product->setName($item['name']);
            $product->setBreed($item['breed']);
            $product->setAge($item['age']);
            $product->setStory($item['story']);
            $product->setCharacterCat($item['character_cat']);
            $product->setSoldi($item['soldi']);

            $entityManager->persist($product);
        }
        $entityManager->flush();
        return new Response('Saved new goods with id ' . $product->getId());
    }

    /**
     * @return Response
     * @Route("/get", name="product_get")
     */
    public function getNumber(ManagerRegistry $doctrine): Response
    {
        $product =$doctrine->getRepository(Product::class)->find(11);
//        return new Response('Check out this great product: ' . $product->getName());

        $productAll =$doctrine->getRepository(Product::class)->findAll();
        return $this->render('create/getNumber.html.twig',[
            "productAll"=>$product,
        ]);

    }
//    /**
//     * @Route("/product/{id}", name="product_show")
//     */
//    public function show(int $id): Response
//    {
//        $product = $this->getDoctrine()
//            ->getRepository(Product::class)
//            ->find($id);
//
//        if (!$product) {
//            throw $this->createNotFoundException(
//                'No product found for id '.$id
//            );
//        }
//        return new Response('Check out this great product: '.$product->getName());
//    }


}