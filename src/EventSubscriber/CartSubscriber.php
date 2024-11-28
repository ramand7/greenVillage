<?php

namespace App\EventSubscriber;

use App\Service\CartService;
use App\Repository\CartRepository;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Doctrine\ORM\EntityManagerInterface;
use Twig\Environment;

class CartSubscriber implements EventSubscriberInterface
{
    private $cartService;
		private $cartRepository;
		private $entityManager;
        private $twig;

    public function __construct(CartService $cartService, CartRepository $cartRepository, Environment $twig, EntityManagerInterface $entityManager)
    {
        $this->cartService = $cartService;
				$this->cartRepository = $cartRepository;
				$this->entityManager = $entityManager;
        $this->twig = $twig;
    }

    public function onControllerEvent(ControllerEvent $event)
    {
        // Récupération de la quantité totale d'articles dans le panier
        $cartTotalQuantity = $this->cartService->getTotalQuantity();
        // dump($totalQuantity);

        // Injection dans Twig
        $this->twig->addGlobal('cartTotalQuantity', $cartTotalQuantity);
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::CONTROLLER =>'onControllerEvent',
        ];
    }

}