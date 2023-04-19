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
                'Authorization' => 'Bearer '.config('gorest.token'),
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
