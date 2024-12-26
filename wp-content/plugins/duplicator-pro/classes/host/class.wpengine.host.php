<?php

/**
 * wpengine custom hosting class
 *
 * Standard: PSR-2
 *
 * @package SC\DUPX\HOST
 * @link http://www.php-fig.org/psr/psr-2/
 *
 */

defined('ABSPATH') || defined('DUPXABSPATH') || exit;

class DUP_PRO_WPEngine_Host implements DUP_PRO_Host_interface
{

    public static function getIdentifier()
    {
        return DUP_PRO_Custom_Host_Manager::HOST_WPENGINE;
    }

    public function isHosting()
    {
        return apply_filters('duplicator_pro_wp_engine_host_check', file_exists(WPMU_PLUGIN_DIR . '/wpengine-security-auditor.php'));
    }

    public function init()
    {
        add_filter('duplicator_pro_installer_file_path', array(__CLASS__, 'installerFilePath'), 10, 1);
        add_filter('duplicator_pro_overwrite_params_data', array(__CLASS__, 'installerParams'));
    }

    public static function installerFilePath($path)
    {
        $path_info = pathinfo($path);
        $newPath   = $path;
        if ('php' == $path_info['extension']) {
            $newPath = substr_replace($path, '.txt', -4);
        }
        return $newPath;
    }

    public static function installerParams($data)
    {
        // disable wp engine plugins
        $data['fd_plugins'] = array('value' => array(
                'mu-plugin.php',
                'advanced-cache.php',
                'wpengine-security-auditor.php',
                'stop-long-comments.php',
                'slt-force-strong-passwords.php',
                'wpe-wp-sign-on-plugin.php'
            )
        );

        // generare new wp-config.php file
        $data['wp_config'] = array(
            'value'      => 'new',
            'formStatus' => 'st_infoonly'
        );

        // disable WP_CACHE
        $data['wpc_WP_CACHE'] = array(
            'value'      => array(
                'value'      => false,
                'inWpConfig' => false
            ),
            'formStatus' => 'st_infoonly'
        );

        return $data;
    }
}
