<?php if (!defined('ABSPATH')) die('Access denied.'); ?>
<h2><?php esc_html_e('Advanced settings', 'all-in-one-wp-security-and-firewall'); ?></h2>
<?php
$aio_wp_security->include_template('wp-admin/firewall/partials/firewall-setup.php');
$aio_wp_security->include_template('wp-admin/firewall/partials/upgrade-unsafe-http-calls.php');