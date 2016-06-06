<?php

namespace App\Providers;

use App\Meme\Client;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->register(Client::class, function ($app) {
            $generator = $app->config->get('services.meme.generator');
            $storage = $app->storagePath().'/images';
            $public = $app->publicPath().'/result';

            return new Client($generator, $storage, $public);
        });
    }
}
