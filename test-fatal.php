<?php
/**
 * Rollback Auto-Update test plugin.
 *
 * @package RollbackAutoUpdateTestPlugin
 *
 * Plugin Name:       Rollback Auto-Update Test Fatal Plugin
 * Plugin URI:        https://github.com/afragen/rollback-fatal-plugin
 * Description:       Fatal version, DO NOT ACTIVATE!!!
 * Version:           0.2.0
 * Author:            WP Core Contributors
 * License:           MIT
 * Requires at least: 5.9
 * Requires PHP:      5.6
 * GitHub Plugin URI: https://github.com/afragen/rollback-fatal-plugin
 * Primary Branch:    main
 */

// Will PHP fatal when activated.
require 'file-not-found.php';
