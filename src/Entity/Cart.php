<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use JetBrains\PhpStorm\Pure;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

#[ORM\Entity]
class Cart implements \App\Service\Cart\Cart
{
    public const CAPACITY = 3;

    #[ORM\Id]
    #[ORM\Column(type: 'uuid', nullable: false)]
    private UuidInterface $id;

    #[ORM\OneToMany(mappedBy: 'cart', targetEntity: 'CartProducts', cascade: ['persist', 'remove'])]
    private Collection $cartProducts;
    public function __construct(string $id)
    {
        $this->id = Uuid::fromString($id);
        $this->cartProducts = new ArrayCollection();
    }

    public function getId(): string
    {
        return $this->id->toString();
    }

    public function getTotalPrice(): int
    {
        return array_reduce(
            $this->cartProducts->toArray(),
            static fn(int $total, CartProducts $product): int => $total + $product->getProduct()->getPrice(),
            0
        );
    }

    #[Pure]
    public function isFull(): bool
    {
        return $this->cartProducts->count() >= self::CAPACITY;
    }

    public function getProducts(): iterable
    {
        return $this->cartProducts->getIterator();
    }

    #[Pure]
    public function hasProduct(\App\Entity\Product $product): bool
    {
        return $this->cartProducts->contains($product);
    }

    public function addProduct(\App\Entity\Product $product): void
    {
        $cartProduct = new CartProducts($this, $product);
        $this->cartProducts->add($cartProduct);
    }

    public function removeProduct(\App\Entity\Product $product): void
    {
        $this->cartProducts->removeElement($product);
    }
}
