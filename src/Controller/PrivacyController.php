<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PrivacyController extends AbstractController
{
    public function PrivacyTemplate()
    {
        return $this->render('privacy/privacy.html.twig');
    }
}