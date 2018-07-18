<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PrivacyControllerTest extends WebTestCase
{
    public function testPrivacyTemplate()
    {
        $client = static::createClient();
        $crawler = $client->request('POST', '/privacy');
        self::assertCount(1, $crawler->filter('p'));

    }
}