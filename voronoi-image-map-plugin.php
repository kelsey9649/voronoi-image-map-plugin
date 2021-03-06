<?php
/**
 * Plugin Name: Voronoi Image Map Plugin
 * Plugin URI: https://github.com/kelsey9649/voronoi-image-map-plugin/wiki
 * Description: Provides the ability to generate Voronoi image maps
 * Version: 1.0.0
 * Author: Curtis Kelsey
 * Author URI: http://curtiskelsey.info
 * License: MIT
 */

// Initialize the autoloader
require_once "vendor/autoload.php";

\Logger::configure(__DIR__.'/config/log4php.xml');

// Instantiate any objects that you need
$voronoiImageMap = new \VoronoiImageMapPlugin\Initialize();