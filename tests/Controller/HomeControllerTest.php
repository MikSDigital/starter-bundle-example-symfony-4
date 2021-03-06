<?php


namespace App\Tests\Controller;


use App\Tests\BaseTestCase;

class HomeControllerTest extends BaseTestCase
{
    /**
     * Testing that the home page loads
     */
    public function testHomePageAndChangeColorPage()
    {
        $client = $this->makeClient();
        $client->request('GET', '/');
        $this->assertStatusCode(200, $client);
    }
}