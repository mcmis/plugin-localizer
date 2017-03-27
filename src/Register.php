<?php

namespace MCMIS\Plugin\Localizer;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Routing\Router;
use MCMIS\Support\Filters\Email\EventTemplate;

class Register
{


    /**
     * Bootstrap script
     *
     * @param Application $app
     * @return void
     */
    public function bootstrap(Application $app){
        require_once __DIR__.'/Http/router.php';
    }
}
