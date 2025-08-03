<?php
// File: theme_root/partner-affiliate/affiliate-dashboard.php

if (!defined('ABSPATH')) exit;

if (!is_user_logged_in()) {
    echo '<p class="st-alert" style="color:#fff;">' . esc_html__('Please log in to access your affiliate dashboard.', 'partner-portal') . '</p>';
    return;
}

$user = wp_get_current_user();
$partner_type = function_exists('get_field') ? get_field('partner_type', 'user_' . $user->ID) : '';

if (!in_array('partner', (array) $user->roles) || $partner_type !== 'affiliate') {
    echo '<p class="st-alert" style="color:#fff;">' . esc_html__('Access denied. You must be a partner affiliate or admin.', 'partner-portal') . '</p>';
    return;
}
?>

<div class="affiliate-dashboard">
    <h2 class="st-affiliate-heading"><?php esc_html_e('Affiliate Dashboard', 'partner-portal'); ?></h2>
    <p class="st-affiliate-subtext"><?php esc_html_e('Welcome affiliate partner. Manage your bookings and commissions below.', 'partner-portal'); ?></p>

    <?php
    // Render dashboard components or widgets
    // echo do_shortcode('[pbp_affiliate_widgets]');
    ?>

    <div class="st-affiliate-footer">
        <?php esc_html_e('Affiliate Dashboard', 'partner-portal'); ?>
    </div>
</div>
