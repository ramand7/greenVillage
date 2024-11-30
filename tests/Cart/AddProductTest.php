<?php

namespace App\Tests\Cart;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\RequestStack;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\SecurityBundle\Security;
use App\Repository\CartRepository;
use App\Entity\Cart;
use App\Entity\CartItem;
use App\Entity\Produit;
use App\Entity\User\Utilisateur;
use App\Service\CartService;

class AddProductTest extends TestCase
{
    private $requestStack;
    private $cartRepository;
    private $entityManager;
    private $security;
    private $cart;

    protected function setUp(): void
    {
        // Mock des dépendances
        $this->requestStack = $this->createMock(RequestStack::class);
        $this->cartRepository = $this->createMock(CartRepository::class);
        $this->entityManager = $this->createMock(EntityManagerInterface::class);
        $this->security = $this->createMock(Security::class);

        // Utilisateur réel
        // $user = new Utilisateur();
        // $user->setNom('Gambier'); // Assurez-vous de configurer les propriétés nécessaires
        
        // Simuler un utilisateur connecté
        // $user = $this->createMock(Utilisateur::class);
        // $this->security->method('getUser')->willReturn($user);

        // $this->cart = (new Cart())
        //     ->setUser(new Utilisateur()) // En supposant que l'Utilisateur a été initialisé correctement
        //     ->setTestId(1); // Utiliser un fake id pour le test
        
        // Simuler un panier existant
        // $this->cart = new Cart();
        // $this->cart->setUser($user); // Utilisation de l'utilisateur réel 
        
    //     $this->cartRepository
    //         ->method('findOneBy')
    //         ->willReturn($this->cart);
        
    // }
    
    // public function testAddDifferentProductsToCart(): void
    // {
    //     $cartService = new CartService(
    //         $this->requestStack,
    //         $this->cartRepository,
    //         $this->entityManager,
    //         $this->security,
    //     );

    // $produit1 = (new Produit())->setTestId(11);
    // $produit2 = (new Produit())->setTestId(17);

    // $cart = (new Cart())->setTestId(1);

//     $cartItem1 = (new CartItem())
//         ->setTestId(1)
//         ->setProduit($produit1)
//         ->setCart($cart)
//         ->setQuantity(1);

//     $cartItem2 = (new CartItem())
//         ->setTestId(2)
//         ->setProduit($produit2)
//         ->setCart($cart)
//         ->setQuantity(1);

//     $cart->addItem($cartItem1);
//     $cart->addItem($cartItem2);

//     $this->assertCount(2, $cart->getItems());
//     $this->assertEquals(11, $cart->getItems()[0]->getProduit()->getId());
//     $this->assertEquals(17, $cart->getItems()[1]->getProduit()->getId());
//     }
// }


    
    
    // public function testSomething(): void
    // {
    //     $client = static::createClient();
    //     $crawler = $client->request('GET', '/');

    //     $this->assertResponseIsSuccessful();
    //     $this->assertSelectorTextContains('h1', 'Hello World');
    // }
}
}