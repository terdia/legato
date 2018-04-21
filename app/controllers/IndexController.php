<?php
namespace App\Controllers;

class IndexController extends BaseController
{

    public function show()
    {
        view('home');
    }
}