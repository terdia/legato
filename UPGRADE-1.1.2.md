##UPGRADE FROM 1.1.1 to 1.1.2

Follow this simple guide to update from 1.1.1 to 1.1.2, this guide assumes you have 
already update to 1.1.2 via composer.

### Middleware

In order to take advantage of auto registration of application boot middleware's, you will have to place a new file 
named register.php in the middleware folder. Inside the file you can register 
middleware's that will be triggered when the application is booting.

example: 

```php
<?php

return [
    /**
         * Register middleware that you want to be executed while the app is booting
         * Array: key = Fully qualified class name and value is method to trigger
         */
        'boot' => [
            \App\Middleware\CSRFVerification::class => 'handle', // default
            ...
        ],
];
```
The format is class name as keys while the method to be executed as value so in the 
example above `\App\Middleware\CSRFVerification::class` is the class while 
`handle` is the method.

### Twig Template

Legato now allow you to register as many Twig extensions that your application
needs when you're using Twig as your template, to take advantage of this update the file 
`twig.php` which is in the config folder like so:

```php
<?php

return [
    'twig_global' => [
        'app_name' => config('APP_NAME', 'Legato Framework'),
    ],
    'extensions' => [
        'global' => \Legato\Framework\TwigGlobal::class, // default
        'debug' => \Twig_Extension_Debug::class, // default
        ...
    ],
];

```

Add the key `APP_ENV` to your `.env` file, the value of this variable will be used to determine
if the dump extension will be registered when using twig template, you can set this to true or false.

```.env

APP_ENV=true //the dump extension will be added to twig environment

```

**Note:** Set `APP_ENV` to false in production environment

### Dependency Injection
In Legato 1.1.2 you can now specify classes that should be binded  into IOC 
automatically, these are classes you want to inject into other classes during instantiation, to take advantage of this feature you need to
 add a new file `app.php` inside the config folder and update the `dependencies` array like so:
 
```php
<?php

return [
     /**
      * class that should be automatically resolved by the IOC
      * value can be: shared, bind, singleton
      */
     'dependencies' => [
        //example: \Legato\Framework\Request::class => 'shared',
     ]
 ];

```
 
 **Note:** if you want the dependency to be shared then set the value to `shared`, 
 if you want to bind the dependency as `singleton` 
 otherwise just set it to `bind`

