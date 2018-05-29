<?php

namespace Tests;

use App\Controllers\IndexController;
use Illuminate\Container\Container;
use Legato\Framework\Request;
use PHPUnit\Framework\TestCase;

class BindingTest extends TestCase
{
    protected $container;
    protected $indexController;

    public function setUp()
    {
        parent::setUp();
        $this->container = new Container();
        $this->container->bind(Request::class);
    }

    /**
     * @test
     */
    public function inject_request_class()
    {
        $this->indexController = $this->container->make(IndexController::class);

        $this->assertInstanceOf(IndexController::class, $this->indexController);

        return $this->indexController;
    }
}
