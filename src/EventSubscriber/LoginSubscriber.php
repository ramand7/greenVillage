<?php

namespace App\EventSubscriber;

use App\Repository\CartRepository;
use App\Service\CartService;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\SecurityBundle\Security;


class LoginSubscriber implements EventSubscriberInterface
{
    private $cartService;
    private $cartRepository;
    private $entityManager;
    private $security;

    public function __construct(CartService $cartService, CartRepository $cartRepository, EntityManagerInterface $entityManager, Security $security)
    {
        $this->cartService = $cartService;
        $this->cartRepository = $cartRepository;
        $this->entityManager = $entityManager;
        $this->security = $security;
    }

    public function onInteractivelogin(InteractiveLoginEvent $event): void
    {
        $user = $event->getAuthenticationToken()->getUser(); 
        $user = $this->security->getUser();


        if ($user){
            // Recherchez un panier actif pour l'utilisateur
            $cart = $this->cartRepository->findOneBy(['user' =>$user, 'isActive' => true]);

            if ($cart){
                // Associez le panier trouvé à la session
                $this->cartService->setCart($cart);
            } else {
                // Si aucun panier actif n'existe, créez-en un
                $cart = $this->cartService->getUserCart();
                $cart->setUser($user);

								$this->entityManager->persist($cart);
                $this->entityManager->flush();
            }
        }
    }

    public static function getSubscribedEvents(): array
    {
        return [
            InteractiveLoginEvent::class => 'onInteractiveLogin'
        ];
    }
}