<?php

namespace App\Controller\Social;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class userController extends AbstractController
{
    /**
     * @Route("/social/user", name="app_social_user")
     */
    public function index(): Response
    {
        return $this->render('social/user/index.html.twig', [
            'controller_name' => 'userController',
        ]);
    }
}
