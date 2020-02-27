<?php

namespace App\Controller;

// use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// Use Symfony\Flex\Response;
use Symfony\Component\HttpFoundation\Response;

// class DefaultController extends AbstractController {
class DefaultTestController {

  public function index() {
    return new Response('<p>Test Page</p>');
  }

}