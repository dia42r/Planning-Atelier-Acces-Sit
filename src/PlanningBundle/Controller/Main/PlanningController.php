<?php

namespace PlanningBundle\Controller\Main;

use PlanningBundle\Entity\EBP\SaleDocumentLine;
use PlanningBundle\Entity\Main\Planning;
use PlanningBundle\Event\SaleDocumentLinePlannedEvent;
use PlanningBundle\Manager\PlanningManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Planning controller.
 *
 * @Route("v2/plannings")
 */
class PlanningController extends Controller {

    /**
     *
     * @var PlanningManager
     */
    private $planningManager;
    private $errors = array();

    public function __construct(PlanningManager $planningManager) {
        $this->planningManager = $planningManager;
    }
    /**
     * Lists all planning entities.
     *
     * @Route("/", name="planning_index")
     * @Method("GET")
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $plannings = $em->getRepository('PlanningBundle:Main\Planning')->findAll();

        return $this->render('main/planning/index.html.twig', array(
                    'plannings' => $plannings,
        ));
    }
    
    
    /**
     * @Route("/scheduling/{sale_document_line_id}", name="list_scheduling")
     * @param type $param
     */
    public function listSchedulingAction($sale_document_line_id) 
    {
        $plannings = $this->getDoctrine()->getManager()->getRepository(Planning::class)->findBySaleDocumentLine($sale_document_line_id);
        
        dump($plannings);
        return new Response($plannings);
        
    }
    
    /**
     * Creates a new planning entity.
     *
     * @Route("/new/{id}", name="planning_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request) 
    {
        $saleDocumentLine = $this->getDoctrine()
                ->getRepository(SaleDocumentLine::class)
                ->find($request->get('id'));

        $planning = new Planning();
        $planning->setSaleDocumentLine($saleDocumentLine);

        $form = $this->createForm('PlanningBundle\Form\Main\PlanningType', $planning);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $this->errors = $this->planningManager->validate($planning); 
            
            if (!empty($this->errors)) {
                return $this->render('main/planning/new.html.twig', ['planning' => $planning,
                    's_document_id' => $saleDocumentLine->getDocumentNumber(),
                    'errors' => $this->errors,
                    'form' => $form->createView(),
                    
                    ]);
            }
            $this->planningManager->calculateTaskEndDate($planning, $saleDocumentLine);
            $em = $this->getDoctrine()->getManager();
            $em->persist($planning);
            $em->flush();
            

            $event = new SaleDocumentLinePlannedEvent($planning->getSaleDocumentLine(), $this->planningManager);
            $this->get('event_dispatcher')->dispatch(SaleDocumentLinePlannedEvent::PLANNED, $event);
            return $this->redirectToRoute('detail_commande', array('id' => $planning->getSaleDocumentLine()->getDocumentNumber()));
        }

        return $this->render('main/planning/new.html.twig', array(
                    'planning' => $planning,
                    's_document_id' => $saleDocumentLine->getDocumentNumber(),
                    'form' => $form->createView(),
                    'errors' => $this->errors
        ));
    }

    /**
     * Finds and displays a planning entity.
     *
     * @Route("/{id}", name="planning_show")
     * @Method("GET")
     */
    public function showAction(Planning $planning) {
        $deleteForm = $this->createDeleteForm($planning);

        return $this->render('main/planning/show.html.twig', array(
                    'planning' => $planning,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing planning entity.
     *
     * @Route("/{id}/edit", name="planning_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Planning $planning) {

        $deleteForm = $this->createDeleteForm($planning);
        $editForm = $this->createForm('PlanningBundle\Form\Main\PlanningType', $planning);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            
            if (!empty($this->errors)) {
                return $this->render('main/planning/edit.html.twig', ['planning' => $planning,
                    's_document_id' => $planning->getSaleDocumentLine()->getDocumentNumber(),
                    'errors' => $this->errors,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                    
                    ]);
            }
            
            // $this->planningManager->calculateTaskEndDate($planning);

            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $event = new SaleDocumentLinePlannedEvent($planning->getSaleDocumentLine(), $this->planningManager);
            $this->get('event_dispatcher')
                    ->dispatch(SaleDocumentLinePlannedEvent::PLANNED, $event);

            return $this->redirectToRoute('detail_commande', array('id' => $planning->getSaleDocumentLine()->getDocumentNumber()));
        }

        return $this->render('main/planning/edit.html.twig', array(
                    'planning' => $planning,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                    's_document_id' => $planning->getSaleDocumentLine()->getDocumentNumber(),
                    'errors' => $this->errors
        ));
    }

    /**
     * Deletes a planning entity.
     *
     * @Route("/{id}", name="planning_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Planning $planning) 
    {
        $form = $this->createDeleteForm($planning);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($planning);
            $em->flush();
            
            $event = new SaleDocumentLinePlannedEvent($planning->getSaleDocumentLine(), $this->planningManager);
            $this->get('event_dispatcher')
                    ->dispatch(SaleDocumentLinePlannedEvent::DELETED, $event);
            return $this->redirectToRoute('detail_commande', array('id' => $planning->getSaleDocumentLine()->getDocumentNumber()));
        }
        return $this->redirectToRoute('detail_commande', array('id' => $planning->getSaleDocumentLine()->getDocumentNumber()));
    }

    /**
     * @Route("/setStatus/{id}/{status}", name="planning_status")
     */
    public function setStatus(Request $request) {

        $em = $this->getDoctrine()->getManager();
        $planning = $this->getDoctrine()
                ->getRepository(Planning::class)
                ->find($request->get('id'));

        $planning->setStatus($request->get('status'));
        $em->merge($planning);
        $em->flush();

        $event = new SaleDocumentLinePlannedEvent($planning->getSaleDocumentLine(), $this->planningManager);
        $this->get('event_dispatcher')
                ->dispatch(SaleDocumentLinePlannedEvent::PLANNED, $event);

        return $this->redirectToRoute('detail_commande', ['id' => $planning->getSaleDocumentLine()->getDocumentNumber()]);
    }

    /**
     * Creates a form to delete a planning entity.
     *
     * @param Planning $planning The planning entity
     *
     * @return Form The form
     */
    private function createDeleteForm(Planning $planning) 
    {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('planning_delete', array('id' => $planning->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }    

}
