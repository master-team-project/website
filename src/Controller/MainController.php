<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function home()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/login", name="login")
     */
    public function signin()
    {
        return $this->render('auth/login.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/register", name="register")
     */
    public function signup()
    {
        return $this->render('auth/register.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    /**
     * @Route("/list-products", name="list-products")
     */
    public function listProducts()
    {
        return $this->render('shop/list-products.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
