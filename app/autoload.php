<?php
/**
 * "Don't re-invent the wheel, unless it's for fun."
 *
 * Symfony2 Universal Auto Loader
 * https://github.com/symfony/ClassLoader/blob/master/README.md
 * http://symfony.com/doc/current/components/class_loader.html
 */
require_once('../vendor/Symfony/Component/ClassLoader/UniversalClassLoader.php');

use Symfony\Component\ClassLoader\UniversalClassLoader;

$loader = new UniversalClassLoader();
$loader->register();

/**
 * Load a single class:
 */
$loader->loadClass(__DIR__.'Kernel.php');

/**
 * Register multiple namespaces:
 */
$loader->registerNamespaces(array(
    'Symfony'       => __DIR__.'/../vendor',
    'SacPHPMeetup'  => __DIR__.'/../vendor',
    'Meetup'        => __DIR__.'/../src',
    'DaganVendor'   => __DIR__.'/../vendor',
));


/** Basic Information: */
/**
    echo "<PRE>";
    print_r($loader->getNamespaces());
    echo "</PRE>";
 */



/**
 * @todo As an exercise implement another PSR-0 compliant autoloader (for example, the Zend AutoLoader)
 *  or write your own namespaced autoloader and put it in the vendor directory.
 */
