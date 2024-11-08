<?php

namespace App\Entity\Trait;

use Doctrine\ORM\Mapping as ORM;

trait SlugTrait 
{
    
    #[ORM\Column(length: 255)]
    private ?string $slug = null;

    public function getslug(): ?string
    {
        return $this->slug; 
    }

    public function setSlug(String $slug): static 
    {
        $this->slug = $slug; 

        return $this;
    }

}