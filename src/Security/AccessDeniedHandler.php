<?php

namespace App\Security;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Http\Authorization\AccessDeniedHandlerInterface;
use Symfony\Component\Routing\RouterInterface;

class AccessDeniedHandler implements AccessDeniedHandlerInterface
{
    private RouterInterface $router;
    private RequestStack $requestStack;

    public function __construct(RouterInterface $router, RequestStack $requestStack)
    {
        $this->router = $router;
        $this->requestStack = $requestStack;
    }

    public function handle(Request $request, AccessDeniedException $accessDeniedException): ?Response
    {
        // Récupérer la session à partir de la requête courante
        $session = $this->requestStack->getSession();
        // dd($session);

        // Vérifier que la session est bien une instance de Symfony\Component\HttpFoundation\Session\Session
        if ($session instanceof Session) {
            $session->getFlashBag()->add('error', 'Accès refusé. Droit insuffisant.');

            // Rediriger vers la page précédente si possible
            $referer = $request->headers->get('referer');
            if ($referer) {
                return new RedirectResponse($referer);
            }
        }

        // Rediriger l'utilisateur
        // return new RedirectResponse($this->router->generate('app_accueil'));
        return new RedirectResponse($this->router->generate('app_main'));
    }
}


