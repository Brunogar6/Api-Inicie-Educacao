<?php

namespace App\Providers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class ApiProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('api', function() {
            return Http::withOptions([
                'verify' => false,
                'base_uri' => 'https://gorest.co.in/public/v2/' 
            ])->withHeaders([
                'Authorization' => 'Bearer 271cd7252161613dd036a4901893a1699b655c7ed1d90d774a41139ed1f02451',
            ]); 
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
