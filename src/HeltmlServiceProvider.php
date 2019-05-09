<?php
namespace Febrianrz\Heltml;

use Illuminate\Support\ServiceProvider;

class HeltmlServiceProvider extends ServiceProvider 
{

    public function boot()
    {
        
    }

    public function register()
    {
        $this->app->make('Febrianrz\Heltml\Libraries\Heltml');
    }

}