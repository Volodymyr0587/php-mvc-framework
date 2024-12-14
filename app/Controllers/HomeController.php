<?php

namespace App\Controllers;

use Volodymyr\MvcFramework\Controllers\AbstractController;
use Volodymyr\MvcFramework\Http\Response;

class HomeController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('home.html.twig');
    }
}
