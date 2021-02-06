<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    /**
     * @Route("/", name="app-home")
     */
    public function home(): Response
    {
        dd(date_default_timezone_get());
        return $this->render('pages/home.html.twig');
    }
}
