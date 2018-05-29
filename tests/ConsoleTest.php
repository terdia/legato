<?php

namespace Tests;

use App\Command\Example;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;

class ConsoleTest extends TestCase
{
    /**
     * @test
     */
    public function welcomeCommand()
    {
        $app = new Application();
        $app->add(new Example());
        $command = $app->find('example:command');

        $symphonyCommandTester = new CommandTester($command);
        $symphonyCommandTester->execute([]);

        $this->assertSame('This is a sample command.', $symphonyCommandTester->getDisplay());
    }
}
