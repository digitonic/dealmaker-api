<?php

namespace Digitonic\DealmakerApi;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Digitonic\DealmakerApi\Commands\DealmakerApiCommand;

class DealmakerApiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('dealmaker-api')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_dealmaker-api_table')
            ->hasCommand(DealmakerApiCommand::class);
    }
}
