<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 8, scale: 2)]
    private ?string $total = null;

    #[ORM\Column(length: 20)]
    private ?string $modepaiement = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 5, scale: 2)]
    private ?string $frais = null;

    #[ORM\Column(options: ['default' => 'CURRENT_TIMESTAMP'])]
    private ?\DateTimeImmutable $date = null;

    #[ORM\OneToMany(targetEntity: Facture::class, mappedBy: 'commande')]
    private Collection $factures;

    #[ORM\OneToMany(targetEntity: Livraison::class, mappedBy: 'commande')]
    private Collection $livraisons;

    #[ORM\OneToMany(targetEntity: Coupon::class, mappedBy: 'commande')]
    private Collection $coupons;

    public function __construct()
    {
        $this->factures = new ArrayCollection();
        $this->livraisons = new ArrayCollection();
        $this->coupons = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTotal(): ?string
    {
        return $this->total;
    }

    public function setTotal(string $total): static
    {
        $this->total = $total;

        return $this;
    }

    public function getModepaiement(): ?string
    {
        return $this->modepaiement;
    }

    public function setModepaiement(string $modepaiement): static
    {
        $this->modepaiement = $modepaiement;

        return $this;
    }

    public function getFrais(): ?string
    {
        return $this->frais;
    }

    public function setFrais(string $frais): static
    {
        $this->frais = $frais;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return Collection<int, Facture>
     */
    public function getFactures(): Collection
    {
        return $this->factures;
    }

    public function addFacture(Facture $facture): static
    {
        if (!$this->factures->contains($facture)) {
            $this->factures->add($facture);
            $facture->setCommande($this);
        }

        return $this;
    }

    public function removeFacture(Facture $facture): static
    {
        if ($this->factures->removeElement($facture)) {
            // set the owning side to null (unless already changed)
            if ($facture->getCommande() === $this) {
                $facture->setCommande(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Livraison>
     */
    public function getLivraisons(): Collection
    {
        return $this->livraisons;
    }

    public function addLivraison(Livraison $livraison): static
    {
        if (!$this->livraisons->contains($livraison)) {
            $this->livraisons->add($livraison);
            $livraison->setCommande($this);
        }

        return $this;
    }

    public function removeLivraison(Livraison $livraison): static
    {
        if ($this->livraisons->removeElement($livraison)) {
            // set the owning side to null (unless already changed)
            if ($livraison->getCommande() === $this) {
                $livraison->setCommande(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Coupon>
     */
    public function getCoupons(): Collection
    {
        return $this->coupons;
    }

    public function addCoupon(Coupon $coupon): static
    {
        if (!$this->coupons->contains($coupon)) {
            $this->coupons->add($coupon);
            $coupon->setCommande($this);
        }

        return $this;
    }

    public function removeCoupon(Coupon $coupon): static
    {
        if ($this->coupons->removeElement($coupon)) {
            // set the owning side to null (unless already changed)
            if ($coupon->getCommande() === $this) {
                $coupon->setCommande(null);
            }
        }

        return $this;
    }
}
