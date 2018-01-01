<?php

namespace PlanningBundle\Controller;

use PlanningBundle\Form\LoginForm;
use Doctrine\ORM\Mapping as ORM;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends Controller
{
    /**
     * @Route("/connexion", name="connexion_securisée")
     */
    public function loginAction(AuthenticationUtils $authenticalUtils)
    {
        // get the login error if there is one
        $error = $authenticalUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticalUtils->getLastUsername();

        $form = $this->createForm(LoginForm::class, [
            '_username' => $lastUsername
        ]);
        return $this->render(
            'security/login.html.twig',
            [
                'form' => $form->createView(),
                'error' => $error,
            ]
        );
    }

    /**
     * @Route("/deconnexion", name="security_logout")
     */
    public function logoutAction()
    {
        throw new \Exception("zezezezeezdez");
    }
}
