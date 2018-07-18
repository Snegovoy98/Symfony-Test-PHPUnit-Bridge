<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RegistrationController extends AbstractController
{
    public function registration()
    {
        return $this->render('registration/registration.html.twig');
    }
}