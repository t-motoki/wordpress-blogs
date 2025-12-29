<?php
/**
 * Plugin Name: Mailpit SMTP Configuration
 * Description: Configures WordPress to use Mailpit SMTP server
 * Version: 1.0
 */

add_action('phpmailer_init', function($phpmailer) {
    $phpmailer->isSMTP();
    $phpmailer->Host = 'mailpit';
    $phpmailer->Port = 1025;
    $phpmailer->SMTPAuth = false;
    $phpmailer->SMTPSecure = '';
    $phpmailer->From = 'wordpress@takashimotoki-develop.tail27e51b.ts.net';
    $phpmailer->FromName = 'WordPress';
});
