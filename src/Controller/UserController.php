<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
// use Symfony\Component\Routing\HttpFoundation\Request;
// use app\Entity\User;
// use app\Form\RegisterType;

class UserController extends AbstractController
{
    #[Route('/login', name: 'login')]
    public function login(): Response
    {
        return $this->render('user/login.html.twig', [
            'title' => 'Login',
        ]);
    }

    #[Route('/register', name: 'register')]
    public function register(): Response
    {
        

        return $this->render('user/register.html.twig', [
            'title' => 'Register'
        ]);
    }
}