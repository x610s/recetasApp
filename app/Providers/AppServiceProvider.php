<?php

namespace App\Providers;

use App\Repository\I_RecetaRepository;
use App\Repository\Impl_RecetaRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
   
    public function register()
    {
        //
    }

  
    public function boot()
    {
        $this->app->bind(I_RecetaRepository::class,Impl_RecetaRepository::class);
    }
}
