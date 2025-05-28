<?php
namespace App\Controller;

use App\Entity\User;
use App\Security\FormLoginAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface; // Added for CSRF token
use Symfony\Component\Security\Core\Security;
class PasswordDebugController extends AbstractController
{
    #[Route('/debug/password-test/{email}/{password}', name: 'debug_password_test')]
    public function testPassword(
        string $email,
        string $password,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher
    ): Response {
        if ($this->getParameter('kernel.environment') !== 'dev') {
            throw $this->createNotFoundException('Only available in dev environment');
        }

        $user = $entityManager->getRepository(User::class)->findOneBy(['email' => $email]);

        if (!$user) {
            return new Response('User not found', Response::HTTP_NOT_FOUND);
        }

        $isValid = $passwordHasher->isPasswordValid($user, $password);
        $storedHash = $user->getPassword();

        return new Response(sprintf(
            "User: %s\nStored Hash: %s\nInput Password: %s\nValid: %s\nIs Google User: %s",
            $email,
            $storedHash,
            $password,
            $isValid ? 'YES' : 'NO',
            $user->isGoogleUser() ? 'YES' : 'NO'
        ));
    }

    #[Route('/debug/auth-test/{email}/{password}', name: 'debug_auth_test')]
    public function testAuth(
        string $email,
        string $password,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher,
        FormLoginAuthenticator $authenticator,
        Request $request,
        CsrfTokenManagerInterface $csrfTokenManager // Injected CSRF token manager
    ): Response {
        if ($this->getParameter('kernel.environment') !== 'dev') {
            throw $this->createNotFoundException('Only available in dev environment');
        }

        $user = $entityManager->getRepository(User::class)->findOneBy(['email' => $email]);
        if (!$user) {
            return new Response('User not found', Response::HTTP_NOT_FOUND);
        }

        $request->request->set('email', $email);
        $request->request->set('password', $password);
        $request->request->set('_csrf_token', $csrfTokenManager->getToken('authenticate')->getValue());

        try {
            $passport = $authenticator->authenticate($request);
            return new Response('Authentication would succeed for ' . $email);
        } catch (\Exception $e) {
            return new Response('Authentication failed: ' . $e->getMessage(), Response::HTTP_FORBIDDEN);
        }
    }
}