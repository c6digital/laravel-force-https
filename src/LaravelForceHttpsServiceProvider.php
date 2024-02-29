<?php

namespace C6Digital\LaravelForceHttps;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use C6Digital\LaravelForceHttps\Commands\LaravelForceHttpsCommand;

class LaravelForceHttpsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-force-https')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-force-https_table')
            ->hasCommand(LaravelForceHttpsCommand::class);
    }
}
