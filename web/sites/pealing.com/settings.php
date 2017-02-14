<?php


/**
 * Location of the site configuration files.
 *
 * The $config_directories array specifies the location of file system
 * directories used for configuration data. On install, "active" and "staging"
 * directories are created for configuration. The staging directory is used for
 * configuration imports; the active directory is not used by default, since the
 * default storage for active configuration is the database rather than the file
 * system (this can be changed; see "Active configuration settings" below).
 *
 * The default location for the active and staging directories is inside a
 * randomly-named directory in the public files path; this setting allows you to
 * override these locations. If you use files for the active configuration, you
 * can enhance security by putting the active configuration outside your
 * document root.
 *
*/
$config_directories = array(
    CONFIG_ACTIVE_DIRECTORY => 'config/active',
    CONFIG_STAGING_DIRECTORY => 'config/staging',
);


/**
 * Salt for one-time login links, cancel links, form tokens, etc.
 */
$settings['hash_salt'] = 'WZ9UmnrrnyLkDNal4K_P-v9AxUGVMjcRpPxkAwOf3_sn7wqTlCOoCg5DBjkKW0ZwC65uM717Rw';


/**
 * Access control for update.php script.
 *
*/
$settings['update_free_access'] = FALSE;


/**
 * Load services definition file.
 */
$settings['container_yamls'][] = __DIR__ . '/services.yml';

/**
 * Trusted host configuration.
 *
 * Drupal core can use the Symfony trusted host mechanism to prevent HTTP Host
 * header spoofing.
 *
 * To enable the trusted host mechanism, you enable your allowable hosts
 * in $settings['trusted_host_patterns']. This should be an array of regular
 * expression patterns, without delimiters, representing the hosts you would
 * like to allow.
 *
 * For example:
 * @code
 * $settings['trusted_host_patterns'] = array(
 *   '^www\.example\.com$',
 * );
 * @endcode
 * will allow the site to only run from www.example.com.
 *
 * If you are running multisite, or if you are running your site from
 * different domain names (eg, you don't redirect http://www.example.com to
 * http://example.com), you should specify all of the host patterns that are
 * allowed by your site.
 *
 * For example:
 * @code
 * $settings['trusted_host_patterns'] = array(
 *   '^example\.com$',
 *   '^.+\.example\.com$',
 *   '^example\.org$',
 *   '^.+\.example\.org$',
 * );
 * @endcode
 * will allow the site to run off of all variants of example.com and
 * example.org, with all subdomains included.
 */


$settings['install_profile'] = 'standard';
$config_directories['sync'] = 'config/sync';

/**
 * Load local development override configuration, if available.
 *
 * Use settings.local.php to override variables on secondary (staging,
 * development, etc) installations of this site. Typically used to disable
 * caching, JavaScript/CSS compression, re-routing of outgoing emails, and
 * other things that should not happen on development and testing sites.
 *
 * Keep this code block at the end of this file to take full effect.
 */
 if (file_exists(__DIR__ . '/settings.local.php')) {
   include __DIR__ . '/settings.local.php';
 }
