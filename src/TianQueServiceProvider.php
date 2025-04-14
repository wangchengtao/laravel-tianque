<?php
namespace Summer\LaravelTianQue;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Summer\TianQue\Kernel\AopFactory;

class TianQueServiceProvider extends LaravelServiceProvider implements DeferrableProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/tianque.php' => config_path('tianque.php'),
        ]);
    }

    public function register(): void
    {
        $this->app->singleton('tianque', function ($app) {
            return AopFactory::client(config('tianque'));
        });
    }


    public function provides(): array
    {
        return [
            'tianque',
        ];
    }


}