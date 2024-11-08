<?php

namespace App\Entity;

use App\Entity\Trait\DateTrait;
use App\Repository\ApprovisionnementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ApprovisionnementRepository::class)]
class Approvisionnement
{
    use dateTrait;

    #[ORM\Column]
    private ?int $quantite = null;

    #[ORM\Id]
    #[ORM\ManyToOne(inversedBy: 'approvisionnements')]
    private ?Fournisseur $fournisseur = null;

    #[ORM\Id]
    #[ORM\ManyToOne(inversedBy: 'approvisionnements')]
    private ?Produit $produit = null;

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): static
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getFournisseur(): ?Fournisseur
    {
        return $this->fournisseur;
    }

    public function setFournisseur(?Fournisseur $fournisseur): static
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }

    public function getProduit(): ?Produit
    {
        return $this->produit;
    }

    public function setProduit(?Produit $produit): static
    {
        $this->produit = $produit;

        return $this;
    }
}
