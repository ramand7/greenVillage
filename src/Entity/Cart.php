<?php

namespace App\Entity;

use App\Entity\User\Utilisateur;
use App\Repository\CartRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CartRepository::class)]
class Cart
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id;

    #[ORM\OneToMany(targetEntity: CartItem::class, mappedBy: 'cart', cascade: ['persist', 'remove'], orphanRemoval: false)]
    private Collection $items;

    #[ORM\Column(type: 'boolean')]
    private ?bool $isActive = true;

    #[ORM\ManyToOne(targetEntity: Utilisateur::class, inversedBy: 'carts')]
    #[ORM\JoinColumn(nullable: false)] // Le panier doit être associé à un utilisateur
    private ?Utilisateur $user = null;

    public function __construct()
    {
        $this->items = new ArrayCollection();
    }

    // Juste pour le test mais à supprimer quand on passe en production
		// In App\Entity\Cart.php
		// public function setTestId(int $id): self
		// {
		// 		$this->id = $id; // Lui fournir directement un id pour les tests
		// 		return $this;
		// }

	public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, CartItem>
     */
    public function getItems(): Collection
    {
			return $this->items;
    }

    public function addItem(CartItem $item): static
    {
        if (!$this->items->contains($item)) {
			$this->items->add($item); // Utiliseer uniquement une méthode pour ajouter
            $item->setCart($this); // Synchroniser la relation inverse
        //             dd([
        //     'item ajouté' => $item,
        //     'items dans le panier' => $this->items->toArray()
        // ]);
        }

        return $this;
    }

    public function removeItem(CartItem $item): static
    {
        if ($this->items->removeElement($item)) {
            
            // Mettre la valeur null pour l'article jusqu'à un nouvel ajout
            if ($item->getCart() === $this) {
                $item->setCart(null);
            }
        }

        return $this;
    }

    public function isIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): static
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getUser(): ?Utilisateur
    {
        return $this->user;
    }

    public function setUser(?Utilisateur $user): static
    {
        $this->user = $user;

        return $this;
    }

//     public function __toString(): string
// {
//     return sprintf('Cart #%d for user %s', $this->id ?? 0, $this->user->getUsername() ?? 'unknown');
// }

}
