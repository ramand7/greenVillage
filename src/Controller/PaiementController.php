<?php

namespace App\Controller;

use App\Entity\Commande;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PaiementController extends AbstractController
{
    #[Route('/commande/{id}/paiement', name: 'paiement')]
		public function paiement(Commande $commande, ParameterBagInterface $params): Response
		{
				$stripeSecretKey = $params->get('stripe_secret_key');

				$stripe = new \Stripe\StripeClient($stripeSecretKey);
			
				// $stripe = new \Stripe\StripeClient($params->get('stripe_secret_key'));

				$checkoutSession = $stripe->checkout->sessions->create([
						'payment_method_types' => ['card'],
						'line_items' => [
								[
										'price_data' => [
												'currency' => 'eur',
												'product_data' => [
														'name' => 'Commande #' . $commande->getId(),
												],
												'unit_amount' => $commande->getTotal() * 100,
										],
										'quantity' => 1,
								],
						],
						'mode' => 'payment',
						'success_url' => $this->generateUrl('order_success', [], UrlGeneratorInterface::ABSOLUTE_URL),
						'cancel_url' => $this->generateUrl('order_cancel', [], UrlGeneratorInterface::ABSOLUTE_URL),
				]);

				return $this->render('commande/paiement.html.twig', [
						'checkout_session_id' => $checkoutSession->id,
						'stripe_public_key' => $params->get('stripe_public_key'),
						'commande' => $commande,
				]);
		}

    #[Route('/commande/success', name: 'order_success')]
		public function success(): Response
		{
				return $this->render('commande/success.html.twig');
		}

		#[Route('/commande/cancel', name: 'order_cancel')]
		public function cancel(): Response
		{
				return $this->render('commande/cancel.html.twig');
		}

    
    // #[Route('/paiement', name: 'app_paiement')]
    // public function index(): Response
    // {
    //     return $this->render('paiement/index.html.twig', [
    //         'controller_name' => 'PaiementController',
    //     ]);
    // }
}
