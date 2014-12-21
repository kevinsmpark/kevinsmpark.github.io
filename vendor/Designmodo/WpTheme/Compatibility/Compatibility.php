<?php
/*
 * This file is part of the Designmodo WordPress Theme.
 *
 * (c) Designmodo Inc. <info@designmodo.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Designmodo\WpTheme\Compatibility;
use Designmodo\WpTheme\Compatibility\Plugins\YoastSeo;
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

/*
 * Provider for make plugins work perfect
 */
class Compatibility {
    protected static $pluginPath;

    public static function titleIsChanged() {
        return YoastSeo::isPluginOn();
    }

    protected static function isPluginOn() {
        return is_plugin_active(static::$pluginPath);
    }
}
