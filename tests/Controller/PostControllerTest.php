<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class PostControllerTest extends WebTestCase
{
    public function testRenderForm()
    {
        $client = self::createClient();

        $crawler = $client->request('post','/post/hello-world');

        $form = $crawler->selectButton('submit')->form();
        $form['firstName'] = 'Ivan';
        $form['lastName'] = 'Ivanov';
        $form['username'] = 'IvanovMaster';

        $div = $crawler
            ->filter('div:contains("Valid first name is required.")')
            ->eq(1)
            ;
    }
}