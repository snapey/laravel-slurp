<?php

namespace Snapey\LaravelSlurp;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Snapey\LaravelSlurp\Commands\LaravelSlurpCommand;

class LaravelSlurpServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-slurp')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_slurp_table')
            ->hasCommand(LaravelSlurpCommand::class);
    }
}
