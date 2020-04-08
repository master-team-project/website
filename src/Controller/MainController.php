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
      /**
     * @Route("/list-products-blousons", name="list-products-blousons")
     */
    public function listProductsBlousons()
    {
        return $this->render('shop/list-products-blousons.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
      /**
     * @Route("/list-products-polos", name="list-products-polos")
     */
    public function listProductsPolos()
    {
        return $this->render('shop/list-products-polos.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
     /**
     * @Route("/list-products-chic", name="list-products-chic")
     */
    public function listProductsChic()
    {
        return $this->render('shop/list-products-chic.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
      /**
     * @Route("/list-products-street", name="list-products-street")
     */
    public function listProductsStreet()
    {
        return $this->render('shop/list-products-street.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
      /**
     * @Route("/list-products-casual", name="list-products-casual")
     */
    public function listProductsCasual()
    {
        return $this->render('shop/list-products-casual.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
     /**
     * @Route("/list-products-accessoire", name="list-products-accessoire")
     */
    public function listProductsAccessoire()
    {
        return $this->render('shop/list-products-accessoire.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
      /**
     * @Route("/list-products-decontracte", name="list-products-decontracte")
     */
    public function listProductsDecontracte()
    {
        return $this->render('shop/list-products-decontracte.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
      /**
     * @Route("/detail-product", name="detail-product")
     */
    public function detailProduct()
    {
        return $this->render('shop/detail-product.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    
}
