<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PrivacyController extends AbstractController
{
    public function privacyTemplate()
    {
        return $this->render('privacy/privacy.html.twig');
    }
}