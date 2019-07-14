<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\Form\Extension\Core\Type\DateType;

use App\Entity\Employe;
use App\Entity\Service;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use App\Repository\EmployeRepository;
use App\Repository\ServiceRepository;

class EntController extends AbstractController
{
    /**
     * @Route("/", name="ent")
     */
    public function index()
    {
        return $this->render('ent/index.html.twig', [
            'controller_name' => 'EntController',
        ]);
    }

    /**
     * @Route("/ent/gestemp",name="gestemp")
     * @Route("/ent/{id}/edit", name="ent_edit")
     */
    public function form(Employe $employe = null, Request $request, ObjectManager $manager)
    {
        if(!$employe)
        {
            $employe = new Employe();
        }

        $form = $this->createFormBuilder($employe)
                     ->add('matricule')
                     ->add('nomComplet')
                     ->add('dateNaissance',DateType::class, [
                         'widget'=>'single_text',
                         'format'=>'yyyy-MM-dd'
                     ])
                     ->add('salaire')
                     ->add('idService',EntityType::class,[
                            'class'=> Service::class,
                            'choice_label'=>'libelle',
                     ])
                     ->getForm();
        
                     $form->handleRequest($request);

        if($form->isSubmitted())
        {
            $manager->persist($employe);
            $manager->flush();
            return $this->redirectToroute("all");
        }


        return $this->render('ent/gestemp.html.twig', [
            'formEmploye' => $form->createView(),
            'monButton' => $employe->getId() !== null
        ]);
    }

    /**
     * @Route("ent/all", name="all")
     */

    public function All(EmployeRepository $repo)
    {
        $employes = $repo->findAll();

        return $this->render('ent/all.html.twig',[
            'controller_name' => 'EntController',
            'employes' => $employes
        ]);
    }


    /**
     * @Route("ent/gestServ", name="gestServ")
     * @Route("ent/{id}/edit_serv", name="edit_serv")
     */
    public function formServ(Service $service = null, Request $request,ObjectManager $manager,ServiceRepository $serv)
    {
        $service1 = $serv->findAll();
        
        if(!$service){
            
            $service = new Service();
        }
        
        $form = $this->createFormBuilder($service)
                     ->add('libelle')
                      ->getForm();

                      $form->handleRequest($request);

        if($form->isSubmitted())
        {
            $manager->persist($service);
            $manager->flush();
            return $this->redirectToroute("gestServ");
        }


        return $this->render('ent/services.html.twig', [
            'formService' => $form->createView(),
            'monButton' => $service->getId() !== null,
            'services' => $service1
            
        ]);
                      
    }

    /**
     * @Route("ent/valid/{id}", name="valid")
     */
    public function valid(Employe $employe)
    {
        if(!$employe)
        {
            $employe = new Employe();
        }
        return $this->render('ent/valid.html.twig',[
            'controller_name' => 'EntController',
            'monButton' => $employe->getId()
        ]);
    }
    
    
    /**
     * @Route("ent/all/{id}", name = "sup")
     */
    public function sup(Employe $employe)
    {
        $quit = $this->getDoctrine()->getManager();
        $quit->remove($employe);
        $quit->flush();
        return $this->redirectToroute("all");
    }
}
