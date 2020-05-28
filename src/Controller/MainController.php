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
        return $this->render('shop/contact.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/products", name="products")
     */
    public function products()
    {
        return $this->render('shop/products.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/product/:id", name="product-details")
     */
    public function productById($id)
    {
        return $this->render('shop/product-details.html.twig', [
            'controller_name' => 'MainController',
            'id' => $id
        ]);
    }

    /**
     * @Route("/cart", name="cart")
     */
    public function cart()
    {
        return $this->render('shop/cart.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/order", name="order")
     */
    public function order()
    {
        return $this->render('shop/order.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/profil", name="profil")
     */
    public function profil()
    {
        // return $this->render('shop/profil.html.twig', [
        return $this->render('profil/profil.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/blog", name="blog")
     */
    public function blog()
    {
        return $this->render('blog/blog-list.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/blog/{id}", name="blog-details")
     */
    public function blogDetails($id)
    {
        $pages = [
            'news_1' => [
                'title' => "Levi's et New Balance signent une paire de sneakers pour le printemps",
                'content' => "(Relaxnews) - Les deux marques américaines unissent leur force pour concevoir une paire de sneakers pour la saison printemps-été 2020. A la clé, un modèle inspiré de la NB 1300, qui célèbre cette année son 35e anniversaire. Pour cette collaboration, Levi's et New Balance rendent hommage à leurs univers respectifs que ce soit à travers le design, les matières choisies, ou les divers éléments mis en valeur. Entièrement conçue aux États-Unis, la paire de sneakers se décline dans une version premium en suède, cuir et toile.Plus en détails, le modèle proposé en édition limitée se distingue par l'emblématique écusson en suède de Levi's, et les toiles White Oak XX52 récupérées par la célèbre marque américaine. Des baskets à la fois vintage et avant-gardistes en somme qui raviront les nombreux amateurs et collectionneurs de sneakers. Le modèle est disponible chez The Next Door à Paris ou sur les sites des deux marques. Son prix : 220 euros.",
                'urlImg' => "https://medias.fashionnetwork.com/image/upload/v1/medias/d095ad9cd1cc6ced60f9c71493e296513114813.jpg"
            ]
        ];

        return $this->render('blog/blog-details.html.twig', [
            'controller_name' => 'MainController',
            'page' => $pages['news_1']
        ]);
    }
}
