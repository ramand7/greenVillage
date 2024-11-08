<?php

namespace App\Entity\Trait;

use Doctrine\ORM\Mapping as ORM;

trait DateTrait 
{
    
    #[ORM\Column(options: ['default' => 'CURRENT_TIMESTAMP'])]
    private ?\DateTimeImmutable $date = null; 

    public function getDate(): ?\DateTimeImmutable // getDate()
    {
        return $this->date; // date
    }

    public function setDate(\DateTimeImmutable $date): static // detDats
    {
        $this->date = $date; // date = $date

        return $this;
    }

}