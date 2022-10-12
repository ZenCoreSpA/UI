<?php

namespace ZenCoreSpA\UI;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use ZenCoreSpA\UI\Views\Components\Button;

class ServiceProvider extends BaseServiceProvider
{
    protected array $components = [
        Button::class,
    ];

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->components();
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../public/css' => public_path('zencorespa/ui'),
            ], 'assets');
        }
    }

    public function components()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'ui');
    }
}
