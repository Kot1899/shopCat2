<?php

namespace App\Controller;

use App\Entity\MainPage;
use App\Form\registrationForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Registration;
use Doctrine\ORM\EntityManagerInterface;

use Doctrine\DoctrineBundle\Registry;
use Doctrine\Persistence\ManagerRegistry;

class registrationController extends AbstractController
{
    /**
     * @return Response
     * @Route("/registration", name="registrationPage")
     */
    public function registrationPage(ManagerRegistry $doctrine, Request $request ): Response
    {
        $registration=new Registration();
        $registrationPage=$this->createForm(registrationForm::class,$registration);
        $registrationPage->handleRequest($request);
        if(  $registrationPage->isSubmitted() && $registrationPage->isValid())
        {
            $em = $doctrine->getManager();
            $em->persist($registration);
            $em->flush();
            //            переход на сторінку головну після реєстрації
            return $this->redirectToRoute('mainPage');
        }
        return $this->render('registration/registrationPage.html.twig',[
            "registrationPage"=>$registrationPage->createView()
        ]);
    }

    /**
     * @return Response
     * @Route("/registration/edit/{userId}", name="registrationEdit")
     */
    public function registrationEdit(ManagerRegistry $doctrine, Request $request, $userId ): Response
    {
        $user=$doctrine->getRepository(Registration::class)->find($userId);
        $registrationPage=$this->createForm(registrationForm::class,$user);
        $registrationPage->handleRequest($request);
        if(  $registrationPage->isSubmitted() && $registrationPage->isValid())
        {
            $em = $doctrine->getManager();
            $em->persist($user);
            $em->flush();
//            переход на сторінку головну після реєстрації
            return $this->redirectToRoute('mainPage');
        }
        return $this->render('registration/registrationEdit.html.twig',[
            "registrationPage"=>$registrationPage->createView(),
            'user'=>$user,
        ]);
    }
}
