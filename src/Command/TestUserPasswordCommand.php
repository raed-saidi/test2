<?php

namespace App\Command;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[AsCommand(
    name: 'app:test-user-password',
    description: 'Test user password hashing and validation',
)]
class TestUserPasswordCommand extends Command
{
    private $entityManager;
    private $passwordHasher;

    public function __construct(
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher
    ) {
        $this->entityManager = $entityManager;
        $this->passwordHasher = $passwordHasher;

        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addArgument('email', InputArgument::REQUIRED, 'User email')
            ->addArgument('password', InputArgument::REQUIRED, 'Password to test');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $email = $input->getArgument('email');
        $password = $input->getArgument('password');

        $user = $this->entityManager->getRepository(User::class)->findOneBy(['email' => $email]);

        if (!$user) {
            $io->error("User not found: $email");
            return Command::FAILURE;
        }

        // Check if it's a Google user
        if ($user->isGoogleUser()) {
            $io->warning("This is a Google-authenticated user. Password validation will fail.");
        }

        $isValid = $this->passwordHasher->isPasswordValid($user, $password);

        if ($isValid) {
            $io->success("Password is valid for user: $email");
        } else {
            $io->error("Password is NOT valid for user: $email");

            // Generate hash for the given password
            $hash = $this->passwordHasher->hashPassword($user, $password);
            $io->info("Generated hash for provided password: " . substr($hash, 0, 10) . "...");
            $io->info("Stored hash in database: " . substr($user->getPassword(), 0, 10) . "...");
        }

        $io->section('User Information');
        $io->table(
            ['ID', 'Email', 'First Name', 'Last Name', 'Google User?'],
            [
                [
                    $user->getId(),
                    $user->getEmail(),
                    $user->getFirstName(),
                    $user->getLastName(),
                    $user->isGoogleUser() ? 'Yes' : 'No'
                ]
            ]
        );

        return Command::SUCCESS;
    }
}