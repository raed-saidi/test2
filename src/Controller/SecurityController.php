<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->getUser()) {
            $this->addFlash('info', 'You are already logged in.');
            return $this->redirectToRoute('home');
        }

        $error = $authenticationUtils->getLastAuthenticationError();

        if ($error && $this->isGoogleUserPasswordError($error)) {
            $this->addFlash('warning', 'It looks like you registered with Google. Please use the "Login with Google" button instead.');
        }

        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    /**
     * Check if the error is related to a Google user trying to log in with password
     */
    private function isGoogleUserPasswordError($error): bool
    {
        if (!$error) {
            return false;
        }

        $errorMessage = $error->getMessage();
        return strpos($errorMessage, 'Invalid credentials') !== false;
    }
}