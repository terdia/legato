<?php

namespace App\Middleware;

use Legato\Framework\Security\CSRFProtection;

class CSRFVerification extends CSRFProtection
{
    /**
     * URIs that you want to remove from CSRF Verification
     * e.g /thanks which should match your route target path.
     *
     * @var array
     */
    protected $skipValidation = [

    ];
}
