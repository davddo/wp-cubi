<?php

/**
 * Plugin Name:         wp-cubi-core-mu
 * Plugin URI:          https://github.com/globalis-ms/wp-cubi/blob/master/web/app/mu-modules/00-wp-cubi-core-mu
 * Description:         Collection of wp-cubi core must-use plugins
 * Author:              Pierre Dargham, Globalis Media Systems
 * Author URI:          https://www.globalis-ms.com/
 * License:             GPL2
 */

// Wonolog / Monolog bootstrap
require_once __DIR__ . '/src/00-wonolog.php';

// Automated `no-index` on development / staging environments
require_once __DIR__ . '/src/10-disallow-indexing.php';

// Mail-trapper on development / staging environments
require_once __DIR__ . '/src/10-mail-trapper.php';

// Disable REST API unless explicitly activated
require_once __DIR__ . '/src/10-security-rest-api.php';

// Disable xmlrpc.php unless explicitly activated
require_once __DIR__ . '/src/10-security-xmlrpc.php';

// Force uploads path to configuration constants values
require_once __DIR__ . '/src/10-uploads-path.php';

// Clean WordPress administration dahboard (remove widgets)
require_once __DIR__ . '/src/20-clean-wp-admin.php';

// Various default filters
require_once __DIR__ . '/src/20-default-filters.php';

// Hooks on query-monitor plugin
require_once __DIR__ . '/src/20-hooks-query-monitor.php';

// Hooks on autodescription / The SEO Framework plugin
require_once __DIR__ . '/src/20-hooks-the-seo-framework.php';

// Activate roots/soil modules / theme-supports (provides cleaner front DOM)
require_once __DIR__ . '/src/20-soil-modules.php';

// Customize wp-login.php page with application logo and url
require_once __DIR__ . '/src/20-wp-login.php';
