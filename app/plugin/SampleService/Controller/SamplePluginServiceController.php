<?php

namespace Plugin\SampleService\Controller;

use Eccube\Application;
use Symfony\Component\HttpFoundation\Request;

class SamplePluginServiceController
{
    public function index(Application $app, Request $request)
    {
        $sample = $app['eccube.plugin.sample.service']->sample();

        return $app['twig']->render('SampleService/View/index.twig', compact('sample'));
    }
}