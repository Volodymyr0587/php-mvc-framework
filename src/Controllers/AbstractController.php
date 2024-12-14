<?php

namespace Volodymyr\MvcFramework\Controllers;

use Volodymyr\MvcFramework\Http\Request;
use Volodymyr\MvcFramework\Http\Response;

abstract class AbstractController
{
    protected ?Request $request = null;

    public function render(string $template, ?array $vars = []): Response
    {
        $templatePath = BASE_PATH . '/views';
        $loader = new \Twig\Loader\FilesystemLoader($templatePath);
        $twig = new \Twig\Environment($loader);

        $content = $twig->render($template, $vars);

        $response = new Response($content);

        return $response;
    }

    public function setRequest(Request $request)
    {
        $this->request = $request;
    }
}
