<?php

namespace App\Repository;

use App\Entity\CartProducts;
use App\Entity\Product;
use App\Service\Cart\Cart;
use App\Service\Cart\CartService;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Ramsey\Uuid\Uuid;

class CartRepository implements CartService
{

    private EntityRepository $repository;

    public function __construct(private EntityManagerInterface $entityManager)
    {
        $this->repository = $this->entityManager->getRepository(\App\Entity\Product::class);
    }

    public function addProduct(string $cartId, string $productId): void
    {
        $cart = $this->entityManager->find(\App\Entity\Cart::class, $cartId);
        $product = $this->entityManager->find(Product::class, $productId);

        if ($cart && $product && !$cart->isFull()) {
            $cart->addProduct($product);
            $this->entityManager->persist($cart);
            $this->entityManager->flush();
        }
    }

    public function removeProduct(string $cartId, string $productId): void
    {
        $cart = $this->entityManager->find(\App\Entity\Cart::class, $cartId);
        $product = $this->entityManager->find(Product::class, $productId);

        if (!$cart || !$product) {
            throw new \Exception('Cart or product not found');
        }

        $cartProductRepository = $this->entityManager->getRepository(CartProducts::class);
        $cartProduct = $cartProductRepository->findOneBy(['product' => $product, 'cart' => $cart]);

        if ($cartProduct !== null) {
            $this->entityManager->remove($cartProduct);
            $this->entityManager->flush();
        } else {
            throw new \Exception('Product not found in cart');
        }
    }

    public function create(): Cart
    {
        $cart = new \App\Entity\Cart(Uuid::uuid4()->toString());

        $this->entityManager->persist($cart);
        $this->entityManager->flush();

        return $cart;
    }
}
