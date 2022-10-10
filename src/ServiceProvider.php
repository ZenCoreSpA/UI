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
        $this->components();
    }

    public function components()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'ui');
    }
}
