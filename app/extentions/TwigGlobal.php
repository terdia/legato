<?php
namespace App;

use Legato\Framework\AbstractTwigGlobal;
use Legato\Framework\Session\SessionManager;

class TwigGlobal extends AbstractTwigGlobal
{
    use SessionManager;

    public function getGlobals()
    {
        return [
          'flash' => $this->getFlashMessage('flash'),
          'success' => $this->get('success'),
          'validation_errors' => [],
          'app_name' => getenv('APP_NAME'),
          'error' => $this->get('error'),
        ];
    }
}