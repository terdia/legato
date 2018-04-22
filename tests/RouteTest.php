<?php
namespace Tests;

use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;


class RouteTest extends TestCase
{
    protected $client;
    
    public function setUp()
    {
        parent::setUp();
        $this->client = new Client;
    }
    
    /**
     * @group ignore
     * @test
     */
    public function can_see_app_home_page()
    {
        $home_url = 'http://local.legato.com/';
        $response = $this->client->get($home_url);
        
        $contents = $response->getBody()->getContents();
        $this->assertContains('Start building that next app.', $contents);
        $this->assertSame(200, $response->getStatusCode());
    }
}