<?php
declare(strict_types=1);

namespace App\Entity;
trait Timestapable
{
    /**
     * @var \DateTimeInterface
     * @ORM\Column(type="datetime")
     */
    private \DateTimeInterface $createdAt;
    /**
     * @var \DateTimeInterface
     * @ORM\Column(type="datetime", nullable=true)
     */
    private ?\DateTimeInterface $updatedAt;

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }
    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->UpdatedAt;
    }
    public function setUpdatedAt(?\DateTimeInterface $updatedAt): Timestapable 
    {
        $this->UpdatedAt = $updatedAt;
        
        return $this;
    }
}