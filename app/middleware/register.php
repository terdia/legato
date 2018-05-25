<?php

return [
    /**
     * Register middleware that you want to be executed while the app is booting
     * Array: key = Fully qualified class name and value is method to trigger
     */
    'boot' => [
        \App\Middleware\CSRFVerification::class => 'handle',
    ],
];