<?php

namespace Firith\Nore;

use Firith\Nore\View\Components\AdminLayout;
use Illuminate\Support\ServiceProvider;

class NoreServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'nore');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/nore'),
        ], ['nore-views']);

        $this->loadViewComponentsAs('nore', [
            AdminLayout::class
        ]);
    }
}
