<?php

namespace GrizzlyWeb\PimcoreBundles\PimcoreWebpackEncoreBundle\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends FrontendController
{
    /**
     * @Route("/gzly_pimcore_webpack_encore")
     */
    public function indexAction(Request $request)
    {
        return new Response('Hello world from gzly_pimcore_webpack_encore');
    }
}
