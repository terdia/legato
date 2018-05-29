<?php

return [
    'twig_global' => [
        'app_name' => config('APP_NAME', 'Legato Framework'),
    ],
    'extensions' => [
        'global' => \Legato\Framework\TwigGlobal::class,
        'debug'  => \Twig_Extension_Debug::class,
    ],
];
