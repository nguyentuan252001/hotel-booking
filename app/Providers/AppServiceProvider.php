<?php

namespace App\Providers;

use App\Models\Config;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }


    public function boot()
    {
        $slides = explode(',', Config::orderByDESC('id')->first()->slides);

        return view()->share('slides', $slides);

    }
}
