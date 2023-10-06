<?php  

use Symfony\Component\HttpFoundation;

abstract class AbstractController

/**
     * Cette fonction permet de faire le rendu
     * d'une vue HTML/TWIG.
     * @param string $content
     * @return Response
     */
{
 public function render(string $content)
 {
    global $twig;
    $content = $twig->render($content);
    return new Response($content);
}

 }
