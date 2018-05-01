<?php
namespace App\Command;

use Legato\Framework\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Example extends Command
{
    /**
     * Identifier for the console command
     *
     * @var string
     */
    protected $commandName = 'example:command';

    /**
     * Command description
     *
     * @var string
     */
    protected $description = 'Sample command without argument';

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
        $output->write('This is a sample command.');
    }
}