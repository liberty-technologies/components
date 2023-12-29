<?php

namespace LibertyTechnologies\Components;

use Illuminate\Support\Facades\Blade;
use LibertyTechnologies\Components\Http\Components\CardComponent;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ComponentsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('components')
            ->hasViews();

        Blade::component(CardComponent::class, 'card');
    }
}
