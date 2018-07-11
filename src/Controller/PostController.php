<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PostController extends AbstractController
{
    public function renterForm()
    {
        return $this->render('post/post,html.twig');
    }
}