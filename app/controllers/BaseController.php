<?php
namespace App\Controllers;
use Legato\Framework\Controllers\BaseController as Controller;
use Legato\Framework\Session\SessionManager;

class BaseController extends Controller{

    use SessionManager;
}