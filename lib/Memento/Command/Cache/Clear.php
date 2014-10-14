<?php

namespace Memento\Command\Cache;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Clear extends Command
{
    protected function configure()
    {
        $this->setName('cache:clear')
        ->setDescription('Used to completely clear the file engine cache');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
<<<<<<< Updated upstream
        $output->writeln("Clearing memento cache dir");
=======
        $path = $input->getArgument('path');
        if (empty($path)) {
            $path = sys_get_temp_dir() . '/memento';
        } else {
            $path = realpath($input->getArgument('path'));
        }

        $output->writeln(sprintf("Clearing memento cache dir '%s'", $path));
>>>>>>> Stashed changes

        $path = realpath(dirname(__FILE__) . '/../../../../cache');
        $cmd = sprintf("rm -rf %s/*", $path);
        `$cmd`;

        $output->writeln("Successfully cleared cache dir");
    }
}
