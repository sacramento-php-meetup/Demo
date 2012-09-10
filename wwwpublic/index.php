<?php
/**
 * Initialize our app's environment
 */
require_once __DIR__.'/../app/Kernel.php';

$kernel = new Kernel();

/**
 * @todo implement a request object and pass it to the Kernel for routing to a controller.
 */
require_once __DIR__.'/../src/Meetup/meetup.php';



