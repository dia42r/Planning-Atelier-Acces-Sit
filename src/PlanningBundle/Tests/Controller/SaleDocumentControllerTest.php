<?php

namespace PlanningBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SaleDocumentControllerTest extends WebTestCase
{
    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/show');
    }

    public function testShowdetail()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/showDetail');
    }

}
