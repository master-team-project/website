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
        return $this->render('home/home.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/tpl", name="tpl")
     */
    public function template()
    {
        return $this->render('home/template.html.twig', [
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
     * @Route("/lost-password", name="lost-password")
     */
    public function lostPassword()
    {
        return $this->render('auth/lost-password.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
     /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('contact/contact.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
