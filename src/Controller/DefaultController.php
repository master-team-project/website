<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\User;
use App\Services\GiftsService;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class DefaultController extends AbstractController
{
    
    function __construct(GiftsService $giftsService, $logger)
    {
        $giftsService->gifts = ['a', 'b', 'c', 'd'];
        $logger->info('Hello this is the logger !');
    }

    /**
     * @Route("/default", name="default")
     */
    public function index(GiftsService $giftsService, Request $request, SessionInterface $session, $logger)
    {
        // dd('ok');
        // $users = [];
        // Hardcoded
        // $users = ['userA', 'userB', 'userC', 'userD'];

        // Populate Database SQLite
        // $entityManager = $this->getDoctrine()->getManager();

        // $user1 = new User();
        // $user1->setName("Mohammad");
        // $entityManager->persist($user1);

        // $user2 = new User();
        // $user2->setName("Ali");
        // $entityManager->persist($user2);

        // $user3 = new User();
        // $user3->setName("Hassan");
        // $entityManager->persist($user3);

        // $user4 = new User();
        // $user4->setName("Hussein");
        // $entityManager->persist($user4);

        // $entityManager->flush();

        // $users = [
        //     $user1->getName(),
        //     $user2->getName(),
        //     $user3->getName(),
        //     $user4->getName()
        // ];

        // $gifts = ['flowers', 'car', 'piano', 'money'];

        // shuffle($gifts);

        // Flash Message
        $this->addFlash('notice', 'n:Your changes ar saved !');
        $this->addFlash('warning', 'w:Your changes ar saved !');

        // Cookies
        // $cookie = new Cookie(
        //     "my_cookie", // Cookie Name
        //     "cookie_value", // Cookie value
        //     time() * (2 * 365 * 24 * 60 * 60) // Expiration after 2 years
        // );

        // $res = new Response();
        // $res->headers->setCookie($cookie);
        // $res->send();
        
        // Delete cookie
        // $res = new Response();
        // $res->headers->clearCookie("my_cookie");
        // $res->send();

        // Sessions
        // exit($request->cookies->get('PHPSESSID'));
        // $session->set('name', 'session_value');
        // $session->remove('name');
        // $session->clear();

        // if ($session->get('name')) {
        //     exit($session->get('name'));
        // }

        // Post & Get Data
        // exit($request->query->get('page', 'default'));
        // exit($request->isXmlHttpRequest()); // Is it Ajax request ?
        // exit($request->request->get('page')); // Post
        // exit($request->files->get('foo')); // Uploaded file
        
        // Get from Database
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();

        // Binding services to controllers
        // $logger->info('In the method index of this controller');

        // Handling Exceptions
        // if (!$users) {
        //     throw $this->createNotFoundException("The user do not exist !");
        // }

        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'users' => $users,
            // 'random_gifts' => $gifts
            'random_gifts' => $giftsService->gifts
        ]);
    }

    public function testJson()
    {
        return $this->json([
            "username" => "mek",
            "email" => "mek@gmail.com"
        ]);
    }

    /**
     * @Route("/blog/{page?}", name="blog", requirements={"page"="\d+"})
     */
    public function index2()
    {
        return new Response('Optional parameters in url and requirements for parameters');
    }

    /**
     * @Route("/genrerate_url/{param?}", name="generate_url")
     */
    public function test() 
    {
        exit($this->generateUrl(
            'generate_url',
            ['param' => 10],
            UrlGeneratorInterface::ABSOLUTE_URL
        ));
    }
}
