<?php

namespace PlanningBundle\Controller;

use PlanningBundle\Entity\Main\Actor;
use PlanningBundle\Entity\Main\Planification;
use PlanningBundle\Entity\Main\SousPlanification;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use PlanningBundle\Entity\Customer\SaleDocument;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\HttpFoundation\Response;
use PlanningBundle\Entity\Main\CalendarEvents as MyCustomEvent;

class HomeController extends Controller
{
    /**
     * @Route("/", name="premiere-page")
     */
    public function indexAction()
    {
        return $this->render('pages/page-accueil.html.twig');
    }

    /**
     * @Route("/search", name="search_result")
     * @Method({"GET", "POST"})
     */
    public function searchAction(Request $request)
    {
        $search = $request->query->get('term');
        $serializer = $this->container->get('jms_serializer');
        $saledocument = $this->getDoctrine()->getRepository(SaleDocument::class)->findSaleSearch($search);

        $data       = $serializer->serialize($saledocument, 'json');

        return new Response($data);
    }


    /**
     * @Route("/listes", name="listes-commandes")
     */
    public function listeCommandesAction(Request $request)
    {
        $form = $this->createFormBuilder(null)
            ->add('Rechercher', TextType::class, ['constraints' => new Length(['min' => 3]), 'attr' => ['placeholder' => 'Rechercher une CAT']])
            ->add('send', SubmitType::class, ['label' => 'Envoyer'])
            ->getForm();

        $form->handleRequest($request);

        if ( $form->isSubmitted() && $form->isValid() ) {

            $form['Rechercher']->getData();
            return $this->redirectToRoute('search_result');
        }

        $commandes = $this->getDoctrine()
            ->getRepository(SaleDocument::class)
            ->findBy([],['documentNumber' => 'desc']);

        $paginator = $this->get('knp_paginator');

        $pagination = $paginator->paginate(
            $commandes,
            $request->query->getInt('page', 1),
            30
        );

        return $this->render('pages/listes-des-commandes.html.twig', [
            'commandes' => $commandes,
            "pagination"=> $pagination,
            'form'      => $form
        ]);
    }



    /**
     * @Route("/saledocumentline-task/{id}", name="liste-taches")
     */
    public function TasksActions($id)
    {
        $task = $this->getDoctrine()
            ->getRepository(Planification::class)
            ->findOneBy(['saleDocumentLine' => $id]);

        $subtasks = $this->getDoctrine()
            ->getRepository(SousPlanification::class)
            ->findAllTasksBy($task->getId());

        dump($subtasks);
        die;

    }

    /**
     * @Route("/time-valid/{id}", name="temps-saisi")
     * @param Request $request
     * @param SousPlanification $sp
     * @return Response
     */
    public function TimeActions(Request $request, SousPlanification $sp)
    {
        $em = $this->getDoctrine()->getManager();
        $data = $request->request->get("time");
        $data = new \DateTime("0000-01-01 ".$data.":00");
        $sp->setTimePrevis($data);
        $em->persist($sp);
        $em->flush();

       return new Response($data->format("H:i"));

    }
}