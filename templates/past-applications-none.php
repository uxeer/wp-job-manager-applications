<?php
/**
 * Notice shown on `[past_applications]` shortcode when a user hasn't applied to any jobs.
 *
 * This template can be overridden by copying it to yourtheme/wp-job-manager-applications/past-applications-none.php.
 *
 * @see         https://wpjobmanager.com/document/template-overrides/
 * @author      Automattic
 * @package     WP Job Manager - Applications
 * @category    Template
 * @version     1.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

_e( 'You haven\'t made any applications yet!', 'wp-job-manager-applications' );
