<?php

namespace Digitonic\DealmakerApi;

use Digitonic\DealmakerApi\Commands\DealmakerApiCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
