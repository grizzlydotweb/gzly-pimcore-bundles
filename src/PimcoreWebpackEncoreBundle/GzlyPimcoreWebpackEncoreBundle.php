<?php

namespace GrizzlyWeb\PimcoreBundles\PimcoreWebpackEncoreBundle;

use Pimcore\Extension\Bundle\AbstractPimcoreBundle;
use Pimcore\HttpKernel\BundleCollection\BundleCollection;
use Symfony\WebpackEncoreBundle\WebpackEncoreBundle;

class GzlyPimcoreWebpackEncoreBundle extends AbstractPimcoreBundle
{


    public function getInstaller()
    {
    }

    /**
     * @param BundleCollection $collection
     */
    public function registerBundlesToCollection(BundleCollection $collection)
    {

        $collection->addBundle(new WebpackEncoreBundle());

    }
}
