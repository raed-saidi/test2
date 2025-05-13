<?php

namespace App\Service;

use App\Entity\Product;
use Symfony\Component\HttpFoundation\RequestStack;

class CartService
{
    private $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    public function getCart(): array
    {
        $session = $this->requestStack->getSession();
        return $session->get('cart', []);
    }

    public function add(Product $product, int $quantity = 1): void
    {
        $session = $this->requestStack->getSession();
        $cart = $session->get('cart', []);
        $id = $product->getId();

        if (!empty($cart[$id])) {
            $cart[$id]['quantity'] += $quantity;
        } else {
            $cart[$id] = [
                'product' => $product,
                'quantity' => $quantity,
            ];
        }

        $session->set('cart', $cart);
    }

    public function remove(int $id): void
    {
        $session = $this->requestStack->getSession();
        $cart = $session->get('cart', []);

        if (!empty($cart[$id])) {
            unset($cart[$id]);
        }

        $session->set('cart', $cart);
    }

    public function update(int $id, int $quantity): void
    {
        $session = $this->requestStack->getSession();
        $cart = $session->get('cart', []);

        if (!empty($cart[$id])) {
            $cart[$id]['quantity'] = $quantity;
        }

        $session->set('cart', $cart);
    }

    public function clear(): void
    {
        $session = $this->requestStack->getSession();
        $session->remove('cart');
    }

    public function getTotal(): float
    {
        $total = 0;
        $cart = $this->getCart();

        foreach ($cart as $item) {
            $total += $item['product']->getPrice() * $item['quantity'];
        }

        return $total;
    }
}