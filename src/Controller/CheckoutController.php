<?php

namespace App\Controller;

use App\Entity\Order;
use App\Entity\OrderItem;
use App\Form\CheckoutType;
use App\Service\CartService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/checkout')]
#[IsGranted('ROLE_USER')]
class CheckoutController extends AbstractController
{
    #[Route('/', name: 'checkout_index')]
    public function index(Request $request, CartService $cartService, EntityManagerInterface $entityManager): Response
    {
        $cart = $cartService->getCart();

        if (empty($cart)) {
            $this->addFlash('error', 'Your cart is empty');
            return $this->redirectToRoute('cart_index');
        }

        $order = new Order();
        $order->setUser($this->getUser());
        $order->setTotal($cartService->getCartSummary()['total']); // Use getCartSummary
        $order->setStatus('pending');
        $order->setCreatedAt(new \DateTime());

        $form = $this->createForm(CheckoutType::class, $order);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle payment fields
            $cardName = $request->request->get('card_name');
            $cardNumber = $request->request->get('card_number');
            $cardExpiry = $request->request->get('card_expiry');
            $cardCvv = $request->request->get('card_cvv');
            $paymentMethod = $request->request->get('payment_method');

            // Validate payment fields
            if ($paymentMethod === 'credit' && (!$cardName || !$cardNumber || !$cardExpiry || !$cardCvv)) {
                $this->addFlash('error', 'Please fill in all payment details.');
                return $this->redirectToRoute('checkout_index');
            }

            // Create order items
            foreach ($cart as $item) {
                $orderItem = new OrderItem();
                $orderItem->setProduct($item['product']);
                $orderItem->setQuantity($item['quantity']);
                $orderItem->setPrice($item['product']->price);
                $orderItem->setOrder($order);
                $order->addItem($orderItem);

                // Update stock
                $product = $item['product'];
                $newStock = $product->getStock() - $item['quantity'];
                if ($newStock < 0) {
                    $this->addFlash('error', 'Insufficient stock for product: ' . $product->getName());
                    return $this->redirectToRoute('checkout_index');
                }
                $product->setStock($newStock);
                $entityManager->persist($product);
            }

            // Placeholder for payment processing
            if ($paymentMethod === 'credit') {
                // TODO: Integrate Stripe
                $order->setStatus('completed');
            }

            $entityManager->persist($order);
            $entityManager->flush();

            // Clear cart
            $cartService->clearCart();

            return $this->redirectToRoute('checkout_success', ['id' => $order->getId()]);
        }

        return $this->render('Checkout/index.html.twig', [
            'form' => $form->createView(),
            'cart' => $cart,
            'total' => $cartService->getCartSummary()['total'], // Use getCartSummary
        ]);
    }

    #[Route('/success/{id}', name: 'checkout_success')]
    public function success(Order $order): Response
    {
        if ($order->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException('You are not authorized to view this order');
        }

        return $this->render('checkout/success.html.twig', [
            'order' => $order,
        ]);
    }
}