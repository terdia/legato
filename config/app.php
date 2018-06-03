<?php

return [

    /*
     * class that should be automatically resolved by the IOC
     * value can be: shared, bind, singleton
     */
    'dependencies' => [
       //example: \Legato\Framework\Request::class => 'shared',
    ],
    'auth' => [
        'fields'     => ['username', 'email'],
        'model'      => \App\Models\User::class,
        'activation' => [], //column name => value
    ],
    'encryption' => [
        'key'    => 'euyq74taeoqiertpeuyq74taeoqiertp',
        'cipher' => 'AES-128-CBC',
    ],
];
