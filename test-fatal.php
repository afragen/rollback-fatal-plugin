<?php
/**
 * Auto-update fatal error check test plugin.
 *
 * @package AutoUpdateFatalErrorCheck
 *
 * Plugin Name:       Auto-update Fatal Error Check Test Plugin
 * Plugin URI:        https://github.com/afragen/fatal-plugin
 * Description:       Set local version to 0 and comment code from plugin for testing.
 * Version:           0.2.0
 * Author:            WP Core Contributors
 * License:           MIT
 * Requires at least: 5.9
 * Requires PHP:      5.6
 * GitHub Plugin URI: https://github.com/afragen/fatal-plugin
 * Primary Branch:    main
 */

// Will PHP fatal when activated.
require 'file-not-found.php';
