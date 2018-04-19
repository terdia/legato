<?php
use App\TwigGlobal;

function expose($view, $data = []): void
{
    $path_to_views = realpath(__DIR__ . '/../../resources/views');
    $template = getenv('TEMPLATE_ENGINE');

    switch ($template) {
        case 'blade':

            break;
        default:
            $loader = new \Twig_Loader_Filesystem($path_to_views);
            $twig = new \Twig_Environment($loader);
            $twig->addExtension(new TwigGlobal);

            try {
                echo $twig->render($view, $data);
            } catch (Exception $exception) {
                die($exception->getMessage());
            }
    }
}

