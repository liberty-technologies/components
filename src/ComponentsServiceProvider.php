<?php

namespace LibertyTechnologies\Components;

use Illuminate\Support\Facades\Blade;
use LibertyTechnologies\Components\Http\Components\Buttons\AuthButtonComponent;
use LibertyTechnologies\Components\Http\Components\Buttons\BaseButtonComponent;
use LibertyTechnologies\Components\Http\Components\Buttons\DeleteButtonComponent;
use LibertyTechnologies\Components\Http\Components\Buttons\PrimaryButtonComponent;
use LibertyTechnologies\Components\Http\Components\Buttons\SubmitButtonComponent;
use LibertyTechnologies\Components\Http\Components\CardComponent;
use LibertyTechnologies\Components\Http\Components\Links\BaseLinkComponent;
use LibertyTechnologies\Components\Http\Components\Links\CreateLinkComponent;
use LibertyTechnologies\Components\Http\Components\Links\EditLinkComponent;
use LibertyTechnologies\Components\Http\Components\Links\InfoLinkComponent;
use LibertyTechnologies\Components\Http\Components\Links\TextLinkComponent;
use LibertyTechnologies\Components\Http\Components\Links\ViewLinkComponent;
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

        Blade::component(BaseButtonComponent::class, 'button-base');
        Blade::component(AuthButtonComponent::class, 'button-auth');
        Blade::component(SubmitButtonComponent::class, 'button-submit');
        Blade::component(DeleteButtonComponent::class, 'button-delete');
        Blade::component(PrimaryButtonComponent::class, 'button-primary');

        Blade::component(BaseLinkComponent::class, 'link-base');
        Blade::component(CreateLinkComponent::class, 'link-create');
        Blade::component(EditLinkComponent::class, 'link-edit');
        Blade::component(InfoLinkComponent::class, 'link-info');
        Blade::component(TextLinkComponent::class, 'link-text');
        Blade::component(ViewLinkComponent::class, 'link-view');
    }
}
