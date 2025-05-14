<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class DebugController extends AbstractController
{
    #[Route('/debug/auth', name: 'debug_auth')]
    public function debugAuth(
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher
    ): Response {
        // Only available in dev environment
        if ($this->getParameter('kernel.environment') !== 'dev') {
            throw $this->createNotFoundException('Page not found');
        }

        $currentUser = $this->getUser();
        $userInfo = null;

        if ($currentUser instanceof UserInterface) {
            $userInfo = [
                'email' => $currentUser->getUserIdentifier(),
                'roles' => $currentUser->getRoles(),
            ];

            if ($currentUser instanceof User) {
                $userInfo['firstName'] = $currentUser->getFirstName();
                $userInfo['lastName'] = $currentUser->getLastName();
                $userInfo['isGoogleUser'] = $currentUser->isGoogleUser();
            }
        }

        // Get some sample users for testing
        $users = $entityManager->getRepository(User::class)->findBy([], ['id' => 'ASC'], 5);
        $sampleUsers = [];

        foreach ($users as $user) {
            $sampleUsers[] = [
                'id' => $user->getId(),
                'email' => $user->getEmail(),
                'firstName' => $user->getFirstName(),
                'lastName' => $user->getLastName(),
                'isGoogleUser' => $user->isGoogleUser(),
                'roles' => $user->getRoles(),
            ];
        }

        return $this->render('debug/auth.html.twig', [
            'currentUser' => $userInfo,
            'sampleUsers' => $sampleUsers,
        ]);
    }

    #[Route('/debug/test-password/{id}/{password}', name: 'debug_test_password')]
    public function testPassword(
        int $id,
        string $password,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher
    ): Response {
        // Only available in dev environment
        if ($this->getParameter('kernel.environment') !== 'dev') {
            throw $this->createNotFoundException('Page not found');
        }

        $user = $entityManager->getRepository(User::class)->find($id);

        if (!$user) {
            return new Response('User not found', Response::HTTP_NOT_FOUND);
        }

        $isValid = $passwordHasher->isPasswordValid($user, $password);

        return new Response(
            'Password check for ' . $user->getEmail() . ': ' .
            ($isValid ? 'VALID' : 'INVALID')
        );
    }
}