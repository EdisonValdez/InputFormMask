<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends AbstractController
{
    /**
     * @Route("/", name="welcome")
     */
    public function index()
    {
        return $this->render('welcome/index.html.twig');
    }

    /**
     * @Route("/home-page/{name}",
     *     name="home_page",
     *     defaults={"name" = "Nothing goes here"},
     *     requirements={"name"="[A-Za-z]+"})
     * @return \Symfony\Component\HttpFoundation\Response
     * @param string $name
     */
    public function hello($name)
    {
        return $this->render('hello_page.html.twig', [
            'name' => $name,
        ]);
    }
}
