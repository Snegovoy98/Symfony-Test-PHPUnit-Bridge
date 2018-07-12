<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PostControllerTest extends WebTestCase
{
    public function testRenderForm()
    {
        $client = self::createClient();

        $crawler = $client->request('post','/post/hello-world');

        $form = $crawler->selectButton('submit')->form(
            [
                'firstName'  => 'Ivan',
                'lastName' => 'Ivanov',
                'username' =>'IvanovMaster',
                'email' => 'testuser@gmail.com',
                 'address' => 'Kiev',
                'secondAddress' => 'New York'
            ]
        );

         $crawler
            ->filter('div:contains("Valid first name is required.")')
            ->eq(1)
            ;
        $this->assertTrue(
            $client->getResponse()->headers->contains(
                'Content-Type',
                'application/json'
            )
        );

        $this->assertTrue(
            $client->getResponse()->isSuccessful(),
            'response status is 2xx'
        );

        $client->request(
          'POST',
          '/post',
          [],
          [],
          [
              'Content_TYPE' => 'application/json',
              'HTTP_REFERER' => '/post'
          ]
        );

        $link = $crawler->selectLink('Privacy')->link();
        $client->click($link);
        $form = $crawler->selectButton('Continue to checkout')->form();
        $client->submit($form, ['id' => 'submit']);
        $newCrawler = $crawler->filter('div.title')
            ->last()
            ->parents()
            ->first()
        ;


    }
}