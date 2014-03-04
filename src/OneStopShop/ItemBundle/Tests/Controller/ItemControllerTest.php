<?php

namespace OneStopShop\ItemBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ItemControllerTest extends WebTestCase
{
    public function testAdditem()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addItem');
    }

    public function testRemoveitem()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/removeItem');
    }

    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/index');
    }

}
