<?php


/**
 * Force https
 * Place in wp-config.php
 * Use something like 'Better Search Replace' plugin to replace http urls with https
 */


# force https url
define('WP_SITEURL', 'https://SITEURL.com');
define('WP_HOME', 'https://SITEURL.com');


# Force SSL
define('FORCE_SSL_ADMIN', true);
define('FORCE_SSL_LOGIN', true);