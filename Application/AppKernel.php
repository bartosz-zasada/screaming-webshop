<?php

namespace Bamiz\ScreamingWebshop\Application;

use Bamiz\ScreamingWebshop\Application\AppBundle\AppBundle;
use Bamiz\UseCaseExecutorBundle\BamizUseCaseExecutorBundle;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Bundle\BundleInterface;
use Symfony\Component\HttpKernel\Kernel;

class AppKernel extends Kernel
{
    /**
     * Returns an array of bundles to register.
     *
     * @return BundleInterface[] An array of bundle instances
     */
    public function registerBundles()
    {
        return [
            new FrameworkBundle(),
            new AppBundle(),
            new BamizUseCaseExecutorBundle()
        ];
    }

    /**
     * Loads the container configuration.
     *
     * @param LoaderInterface $loader A LoaderInterface instance
     */
    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__ . '/Configuration/config.yml');
    }
}