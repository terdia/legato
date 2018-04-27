<?php
namespace App\Command;

use Legato\Framework\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Welcome extends Command
{
    /**
     * Identifier for the console command
     *
     * @var string
     */
    protected $commandName = 'welcome:greeting';

    /**
     * Command description
     *
     * @var string
     */
    protected $description = 'Basic command with argument';

    public function __construct($name = null)
    {
        parent::__construct($name);
    }
    
    /**
     * You command logic
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return void
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('The Legato framework, build that next app');
    }
}