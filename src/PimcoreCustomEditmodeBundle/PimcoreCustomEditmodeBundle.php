<?php

namespace GrizzlyWeb\PimcoreBundles\PimcoreCustomEditmodeBundle;

use Pimcore\Extension\Bundle\AbstractPimcoreBundle;
use Pimcore\Routing\RouteReference;

class PimcoreCustomEditmodeBundle extends AbstractPimcoreBundle {

    /**
     * {@inheritdoc}
     */
    public function getJsPaths()
    {
        return [
//            '/bundles/pimcorecustomeditmode/js/plugin.js',
//            '/bundles/pimcorecustomeditmode/js/object/helpers/edit.js',
//            '/bundles/pimcorecustomeditmode/js/object/objectbricks/field.js',
//            '/bundles/pimcorecustomeditmode/js/object/classes/layout/flexbox.js',
//            '/bundles/pimcorecustomeditmode/js/object/classes/layout/flexitem.js',
//            '/bundles/pimcorecustomeditmode/js/object/classes/data/singlebrick.js',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getCssPaths()
    {
        return [
            '/bundles/pimcorecustomeditmode/css/editmode.css',
        ];
    }

}
