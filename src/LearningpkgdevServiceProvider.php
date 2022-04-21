<?php

namespace Seemab40615\Learningpkgdev;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Seemab40615\Learningpkgdev\Commands\LearningpkgdevCommand;

class LearningpkgdevServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('learningpkgdev')
            ->hasConfigFile()
            ->hasViews()
            ->hasRoute('web')
            ->hasMigration('create_learningpkgdev_table')
            ->hasCommand(LearningpkgdevCommand::class);
    }
}
