<?php

namespace src;

use Asciito\LaravelPackage\Package\Package;

class PackageServiceProvider extends \Asciito\LaravelPackage\Package\PackageServiceProvider
{

    /**
     * @inheritDoc
     */
    protected function configurePackage(Package $package): void
    {
        $package
            ->setName('<package>')
            ->withConfig();
    }
}
