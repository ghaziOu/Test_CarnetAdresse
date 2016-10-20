<?php

namespace MyApp\CarnetBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ContactControllerTest extends WebTestCase
{
    public function testAjoutercontact()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/AjouterContact');
    }

    public function testListcontact()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ListContact');
    }

    public function testSupprimercontact()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/SupprimerContact');
    }

    public function testModifercontact()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ModiferContact');
    }

}
