<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PostController extends AbstractController
{
    public function renderForm()
    {
        return $this->render('post/post.html.twig');
    }
}