<?php

namespace App\command;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\HttpKernel\KernelInterface;

#[AsCommand(name: 'app:debug:bundles')]
class DebugBundlesCommand extends Command
{
    private $kernel;

    public function __construct(KernelInterface $kernel)
    {
        $this->kernel = $kernel;
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $bundles = $this->kernel->getBundles();
        foreach ($bundles as $name => $bundle) {
            $output->writeln($name . ': ' . get_class($bundle));
        }
        return Command::SUCCESS;
    }
}