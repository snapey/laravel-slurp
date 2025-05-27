<?php

namespace Snapey\LaravelSlurp;

use Snapey\LaravelSlurp\Commands\LaravelSlurpCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
