<?php


namespace PlanningBundle\Security;


use PlanningBundle\PlanningBundle;
use PlanningBundle\Entity\Main\User;
use PlanningBundle\Form\LoginForm;
use PlanningBundle\Repository\UserRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\Authenticator\AbstractFormLoginAuthenticator;
use Symfony\Component\Security\Http\Util\TargetPathTrait;

class LoginFormAuthenticator extends AbstractFormLoginAuthenticator
{
    use TargetPathTrait;

    /**
     * @var FormFactoryInterface
     */
    private $formFactory;

    /**
     * @var EntityManager
     */
    private $em;

    /**
     * @var RouterInterface
     */
    private $router;
    /**
     * @var UserPasswordEncoder
     */
    private $passwordEncoder;

    /**
     * LoginFormAuthenticator constructor.
     */
    public function __construct(FormFactoryInterface $formFactory, RouterInterface $router, UserPasswordEncoder $passwordEncoder, $em)
    {
        $this->formFactory = $formFactory;
        $this->em = $em;
        $this->router = $router;
        $this->passwordEncoder = $passwordEncoder;
    }

    public function getCredentials(Request $request)
    {
        $isLoginSubmit = $request->getPathInfo() == "/connexion" && $request->isMethod("POST");
        if (!$isLoginSubmit) {
            return null;
        }
        $form = $this->formFactory->create(LoginForm::class);
        $form->handleRequest($request);
        $data = $form->getData();
        $request->getSession()->set(
            Security::LAST_USERNAME,
            $data['username']
        );

        return $data;
    }

    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        $username = $credentials["username"];
        return  $this->em->getRepository(User::class)
            ->findOneBy(["username" => $username]);
    }

    protected function getLoginUrl()
    {
        return $this->router->generate('connexion_securisée');
    }

    public function checkCredentials($credentials, UserInterface $user)
    {

        $password = $credentials['password'];

        if ($this->passwordEncoder->isPasswordValid($user, $password)) {
            return true;
        }

        return false;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {
        $targetPath = $this->getTargetPath($request->getSession(), $providerKey);

        if (!$targetPath) {
            $targetPath = $this->router->generate("planifier-une-commande");
        }

        return new RedirectResponse($targetPath);
    }

    function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
    }


}