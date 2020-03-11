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
     * @Route("/list-products", name="list-products")
     */
    public function listProducts()
    {
        return $this->render('shop/list-products.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    /**
     * @Route("/list-products-jeans", name="list-products-jeans")
     */
    public function listProductsJeans()
    {
        return $this->render('shop/list-products-jeans.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    /**
     * @Route("/list-products-pantalons", name="list-products-pantalons")
     */
    public function listProductsPantalons()
    {
        return $this->render('shop/list-products-pantalons.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
     /**
     * @Route("/list-products-pulls", name="list-products-pulls")
     */
    public function listProductsPulls()
    {
        return $this->render('shop/list-products-pulls.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
     /**
     * @Route("/list-products-tshirts", name="list-products-tshirts")
     */
    public function listProductsTshirts()
    {
        return $this->render('shop/list-products-tshirts.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
      /**
     * @Route("/list-products-chemises", name="list-products-chemises")
     */
    public function listProductsChemises()
    {
        return $this->render('shop/list-products-chemises.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    
}
