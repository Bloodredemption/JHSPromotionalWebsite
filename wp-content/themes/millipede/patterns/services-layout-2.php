<?php

/**
 * Title: Service Section Layout 2
 * Slug: millipede/service-layout-2
 * Categories: millipede
 */
$millipede_agency_url = trailingslashit(get_template_directory_uri());
$millipede_images = array(
    $millipede_agency_url . 'assets/images/icon_1.png',
    $millipede_agency_url . 'assets/images/icon_2.png',
    $millipede_agency_url . 'assets/images/icon_3.png',
    $millipede_agency_url . 'assets/images/icon_4.png',
    $millipede_agency_url . 'assets/images/icon_5.png',
    $millipede_agency_url . 'assets/images/icon_6.png'
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"100px","bottom":"100px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"640px"}} -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"xx-large"} -->
        <h1 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('How Can We Help', 'millipede') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'millipede') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"32px"},"margin":{"top":"44px"}}}} -->
    <div class="wp-block-columns" style="margin-top:44px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"millipede-hover-box is-style-millipede-boxshadow","style":{"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"},"blockGap":"var:preset|spacing|30"},"border":{"radius":"7px","width":"1px","color":"#EEEEF8"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group millipede-hover-box is-style-millipede-boxshadow has-border-color" style="border-color:#EEEEF8;border-width:1px;border-radius:7px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:image {"id":2846,"width":"66px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#3516F0","#ECF0F8"]}}} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($millipede_images[0]) ?>" alt="" class="wp-image-2846" style="width:66px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"left","level":3,"style":{"spacing":{"margin":{"top":"24px"}},"typography":{"fontSize":"24px"}}} -->
                <h3 class="wp-block-heading has-text-align-left" style="margin-top:24px;font-size:24px"><?php esc_html_e('Digital Marketing', 'millipede') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"left"} -->
                <p class="has-text-align-left"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.', 'millipede') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
                <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","className":"is-style-button-hover-secondary-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}}},"fontSize":"normal"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-color has-normal-font-size"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php esc_html_e('Read More', 'millipede') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"millipede-hover-box is-style-millipede-boxshadow","style":{"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"},"blockGap":"var:preset|spacing|30"},"border":{"radius":"7px","width":"1px","color":"#EEEEF8"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group millipede-hover-box is-style-millipede-boxshadow has-border-color" style="border-color:#EEEEF8;border-width:1px;border-radius:7px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:image {"id":2846,"width":"66px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#3516F0","#ECF0F8"]}}} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($millipede_images[1]) ?>" alt="" class="wp-image-2846" style="width:66px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"left","level":3,"style":{"spacing":{"margin":{"top":"24px"}},"typography":{"fontSize":"24px"}}} -->
                <h3 class="wp-block-heading has-text-align-left" style="margin-top:24px;font-size:24px"><?php esc_html_e('Brand Building', 'millipede') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"left"} -->
                <p class="has-text-align-left"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.', 'millipede') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
                <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","className":"is-style-button-hover-secondary-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}}},"fontSize":"normal"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-color has-normal-font-size"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php esc_html_e('Read More', 'millipede') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"millipede-hover-box is-style-millipede-boxshadow","style":{"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"},"blockGap":"var:preset|spacing|30"},"border":{"radius":"7px","width":"1px","color":"#EEEEF8"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group millipede-hover-box is-style-millipede-boxshadow has-border-color" style="border-color:#EEEEF8;border-width:1px;border-radius:7px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:image {"id":2846,"width":"66px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#3516F0","#ECF0F8"]}}} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($millipede_images[2]) ?>" alt="" class="wp-image-2846" style="width:66px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"left","level":3,"style":{"spacing":{"margin":{"top":"24px"}},"typography":{"fontSize":"24px"}}} -->
                <h3 class="wp-block-heading has-text-align-left" style="margin-top:24px;font-size:24px"><?php esc_html_e('Case Study', 'millipede') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"left"} -->
                <p class="has-text-align-left"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.', 'millipede') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
                <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","className":"is-style-button-hover-secondary-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}}},"fontSize":"normal"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-color has-normal-font-size"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php esc_html_e('Read More', 'millipede') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"32px"},"margin":{"top":"32px"}}}} -->
    <div class="wp-block-columns" style="margin-top:32px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"millipede-hover-box is-style-millipede-boxshadow","style":{"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"},"blockGap":"var:preset|spacing|30"},"border":{"radius":"7px","width":"1px","color":"#EEEEF8"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group millipede-hover-box is-style-millipede-boxshadow has-border-color" style="border-color:#EEEEF8;border-width:1px;border-radius:7px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:image {"id":2846,"width":"66px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#3516F0","#ECF0F8"]}}} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($millipede_images[3]) ?>" alt="" class="wp-image-2846" style="width:66px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"left","level":3,"style":{"spacing":{"margin":{"top":"24px"}},"typography":{"fontSize":"24px"}}} -->
                <h3 class="wp-block-heading has-text-align-left" style="margin-top:24px;font-size:24px"><?php esc_html_e('Content Writing', 'millipede') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"left"} -->
                <p class="has-text-align-left"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.', 'millipede') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
                <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","className":"is-style-button-hover-secondary-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}}},"fontSize":"normal"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-color has-normal-font-size"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php esc_html_e('Read More', 'millipede') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"millipede-hover-box is-style-millipede-boxshadow","style":{"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"},"blockGap":"var:preset|spacing|30"},"border":{"radius":"7px","width":"1px","color":"#EEEEF8"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group millipede-hover-box is-style-millipede-boxshadow has-border-color" style="border-color:#EEEEF8;border-width:1px;border-radius:7px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:image {"id":2846,"width":"66px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#3516F0","#ECF0F8"]}}} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($millipede_images[4]) ?>" alt="" class="wp-image-2846" style="width:66px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"left","level":3,"style":{"spacing":{"margin":{"top":"24px"}},"typography":{"fontSize":"24px"}}} -->
                <h3 class="wp-block-heading has-text-align-left" style="margin-top:24px;font-size:24px"><?php esc_html_e('Finance Management', 'millipede') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"left"} -->
                <p class="has-text-align-left"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.', 'millipede') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
                <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","className":"is-style-button-hover-secondary-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}}},"fontSize":"normal"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-color has-normal-font-size"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php esc_html_e('Read More', 'millipede') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"millipede-hover-box is-style-millipede-boxshadow","style":{"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"},"blockGap":"var:preset|spacing|30"},"border":{"radius":"7px","width":"1px","color":"#EEEEF8"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group millipede-hover-box is-style-millipede-boxshadow has-border-color" style="border-color:#EEEEF8;border-width:1px;border-radius:7px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:image {"id":2846,"width":"66px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#3516F0","#ECF0F8"]}}} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($millipede_images[5]) ?>" alt="" class="wp-image-2846" style="width:66px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"left","level":3,"style":{"spacing":{"margin":{"top":"24px"}},"typography":{"fontSize":"24px"}}} -->
                <h3 class="wp-block-heading has-text-align-left" style="margin-top:24px;font-size:24px"><?php esc_html_e('Startup Ideas', 'millipede') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"left"} -->
                <p class="has-text-align-left"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.', 'millipede') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
                <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","className":"is-style-button-hover-secondary-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}}},"fontSize":"normal"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-color has-normal-font-size"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php esc_html_e('Read More', 'millipede') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->