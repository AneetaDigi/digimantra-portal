<?php

global $tlwp_tracker, $tlwp_feedback;

$es_install_url            = admin_url( 'plugin-install.php?s=email+subscribers&tab=search&type=term' );
$om_install_url            = admin_url( 'plugin-install.php?s=offermative&tab=search&type=term' );
$ig_install_url            = admin_url( 'plugin-install.php?s=icegram&tab=search&type=term' );
$rainmaker_install_url     = admin_url( 'plugin-install.php?s=rainmaker&tab=search&type=term' );
$smart_manager_install_url = admin_url( 'plugin-install.php?s=smart+manager&tab=search&type=term' );
$deactivate_link           = admin_url( 'plugins.php' );
$icegram_plugin            = 'icegram/icegram.php';
$rainmaker_plugin          = 'icegram-rainmaker/icegram-rainmaker.php';
$smart_manager_plugin      = 'smart-manager-for-wp-e-commerce/smart-manager';
$temporary_login           = admin_url( 'plugin-install.php?s=temporary+login+without+password&tab=search&type=term' );
$active_plugins            = $tlwp_tracker::get_active_plugins();
$inactive_plugins          = $tlwp_tracker::get_inactive_plugins();
$all_plugins               = $tlwp_tracker::get_plugins();

$storeapps_url = "https://storeapps.org?utm_source=tlwp&utm_medium=in_app&utm_campaign=sa_promotion";
$ig_url = "https://icegram.com?utm_source=tlwp&utm_medium=in_app&utm_campaign=ig_promotion";

$plugins = array(

	array(
		'title'       => __( 'Smart Manager For WooCommerce', 'temporary-login-without-password' ),
		'logo'        => 'https://ps.w.org/smart-manager-for-wp-e-commerce/assets/icon-128x128.png',
		'desc'        => __( 'The #1 and a powerful tool to manage stock, inventory from a single place. Super quick and super easy', 'temporary-login-without-password' ),
		'name'        => 'smart-manager-for-wp-e-commerce/smart-manager.php',
		'install_url' => $smart_manager_install_url,
		'plugin_url'  => 'https://wordpress.org/plugins/smart-manager-for-wp-e-commerce/',
	),

	array(
		'title'       => __( 'Email Subscribers', 'temporary-login-without-password' ),
		'logo'        => 'https://ps.w.org/email-subscribers/assets/icon-128x128.png',
		'desc'        => __( 'Simple and Effective Email Marketing WordPress Plugin. Email Subscribers is a complete newsletter plugin that lets you collect leads, send automated new blog post notification emails, create & send broadcasts', 'temporary-login-without-password' ),
		'name'        => 'email-subscribers/email-subscribers.php',
		'install_url' => $es_install_url,
		'plugin_url'  => 'https://wordpress.org/plugins/email-subscribers/',
	),

	array(
		'title'       => __( 'Offermative', 'temporary-login-without-password' ),
		'logo'        => 'https://ps.w.org/offermative-discount-pricing-related-products-upsell-funnels-for-woocommerce/assets/icon-128x128.png',
		'desc'        => __( 'Offermative: dynamic discount pricing, related product recommendations, upsells and funnels for WooCommerce', 'temporary-login-without-password' ),
		'name'        => 'Offermative: dynamic discount pricing, related product recommendations, upsells and funnels for WooCommerce/offermative.php',
		'install_url' => $om_install_url,
		'plugin_url'  => 'https://wordpress.org/plugins/offermative-discount-pricing-related-products-upsell-funnels-for-woocommerce/',
	),

	array(
		'title'       => __( 'Icegram', 'temporary-login-without-password' ),
		'logo'        => 'https://ps.w.org/icegram/assets/icon-128x128.png',
		'desc'        => __( 'The best WP popup plugin that creates a popup. Customize popup, target popups to show offers, email signups, social buttons, etc and increase conversions on your website.', 'temporary-login-without-password' ),
		'name'        => 'icegram/icegram.php',
		'install_url' => $ig_install_url,
		'plugin_url'  => 'https://wordpress.org/plugins/icegram/',
	),
	array(
		'title'       => __( 'Rainmaker', 'temporary-login-without-password' ),
		'logo'        => 'https://ps.w.org/icegram-rainmaker/assets/icon-128x128.png',
		'desc'        => __( 'Get readymade contact forms, email subscription forms and custom forms for your website. Choose from beautiful templates and get started within seconds', 'temporary-login-without-password' ),
		'name'        => 'icegram-rainmaker/icegram-rainmaker.php',
		'install_url' => $rainmaker_install_url,
		'plugin_url'  => 'https://wordpress.org/plugins/icegram-rainmaker/',
	)


);


?>

<div class="container flex flex-wrap w-full mt-4 mb-7">
    <div class="block mt-1 text-center">
        <h3 class="text-2xl font-bold leading-9 text-gray-700 sm:truncate mb-3 text-center"><?php echo sprintf('Other awesome plugins from same author (<a href="%s" target="_blank">StoreApps</a> & <a href="%s" target="_blank">Icegram</a>)', 'https://storeapps.org', 'https://icegram.com'); ?></h3>
    </div>
    <div class="grid w-full grid-cols-3 ">
		<?php foreach ( $plugins as $ig_plugin ) { ?>
            <div class="flex flex-col mb-4 mr-3 bg-white rounded-lg shadow">
                <div class="flex h-48">
                    <div class="flex pl-1">
                        <div class="flex w-1/4 rounded">
                            <div class="flex flex-col w-full h-6">
                                <div>
                                    <img class="mx-auto my-4 border-0 h-15" src="<?php echo esc_url( $ig_plugin['logo'] ); ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="flex w-3/4 pt-2">
                            <div class="flex flex-col">
                                <div class="flex w-full">
                                    <a href="<?php echo esc_url( $ig_plugin['plugin_url'] ); ?>" target="_blank"><h3 class="pb-2 pl-2 mt-2 text-lg font-medium text-indigo-600"><?php echo esc_html( $ig_plugin['title'] ); ?></h3></a>
                                </div>
                                <div class="flex w-full pl-2 leading-normal xl:pb-4 lg:pb-2 md:pb-2">
                                    <h4 class="pt-1 pr-4 text-sm text-gray-700"><?php echo esc_html( $ig_plugin['desc'] ); ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row mb-0 border-t">
                    <div class="flex w-2/3 px-3 py-5 text-sm"><?php echo esc_html__( 'Status', 'email-subscribers' ); ?>:
						<?php if ( in_array( $ig_plugin['name'], $active_plugins ) ) { ?>
                            <span class="font-bold text-green-600">&nbsp;<?php echo esc_html__( 'Active', 'email-subscribers' ); ?></span>
						<?php } elseif ( in_array( $ig_plugin['name'], $inactive_plugins ) ) { ?>
                            <span class="font-bold text-red-600">&nbsp;<?php echo esc_html__( 'Inactive', 'email-subscribers' ); ?></span>
						<?php } else { ?>
                            <span class="font-bold text-orange-500">&nbsp;<?php echo esc_html__( 'Not Installed', 'email-subscribers' ); ?></span>
						<?php } ?>
                    </div>
                    <div class="flex justify-center w-1/3 py-3 md:pr-4">
		  <span class="rounded-md shadow-sm">
				<?php if ( ! in_array( $ig_plugin['name'], $active_plugins ) ) { ?>
			  <a href="<?php echo esc_url( $ig_plugin['install_url'] ); ?>">
					<?php
					}

					if ( ! in_array( $ig_plugin['name'], $all_plugins ) ) {
						?>
                        <button type="button" class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-white transition duration-150 ease-in-out bg-white bg-green-600 border border-transparent rounded-md hover:bg-green-500 focus:outline-none focus:shadow-outline-blue">
						<?php echo esc_html__( 'Install', 'email-subscribers' ); ?> </button>
					<?php } elseif ( in_array( $ig_plugin['name'], $inactive_plugins ) ) { ?>
                        <button type="button" class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-white transition duration-150 ease-in-out bg-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:shadow-outline-blue">
					<?php echo esc_html__( 'Activate', 'email-subscribers' ); ?> </button>
					<?php } ?>
			  </a>
			</span>
                    </div>
                </div>
            </div>
		<?php } ?>

    </div>
</div>

