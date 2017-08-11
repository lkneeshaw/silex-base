<?php
/**
 * Created by PhpStorm.
 * User: laurakneeshaw
 * Date: 8/11/17
 * Time: 10:29 AM
 */

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application;

$app['debug'] = true;

$app->register(new Silex\Provider\TwigServiceProvider, [

    'twig.path' => __DIR__ . '/../views'

]);

$app->get('/', function () use ($app) {

    return $app['twig']->render('home.twig');

});

$app->run();