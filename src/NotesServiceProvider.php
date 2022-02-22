<?php

namespace Grnspc\Notes;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class NotesServiceProvider extends PackageServiceProvider
{

     public function configurePackage(Package $package): void
    {
        $package
            ->name('notes')
            ->hasConfigFile('notes')
            ->hasMigration('create_notes_table');
    }
}
