<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RegistrationControllerTest extends WebTestCase
{
    public function testRegistration()
    {
        $client = static::createClient();

        $crawler = $client->request('registration','/registration');

        self::assertCount(17, $crawler->filter('input'));

        $form = $crawler->selectButton('submit')->form();
        $form['firstName']  = 'Ivan';
        $form['lastName']   = 'Ivanov';
        $form['username']   = 'IvanovMaster';
        $form['email']      = 'Ivanov@gmail.com';
        $form['address']    = 'Kiev';
        $form['Country']->select('New York');
        $form['State']->select('California');
        $form['same-address']->tick();
        $form['checking']->tick();
        $link = $crawler->selectLink('Privacy')->link();
        $client->click($link);
        $link = $crawler->selectLink('Terms')->link();
        $client->click($link);
        $link = $crawler->selectLink('Support')->link();
        $client->click($link);


    }
}