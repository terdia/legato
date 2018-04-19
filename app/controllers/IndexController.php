<?php
namespace App\Controllers;

class IndexController extends BaseController
{

    public function show()
    {
        expose('home.twig');
    }
}