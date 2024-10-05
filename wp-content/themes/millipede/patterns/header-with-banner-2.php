<?php

/**
 * Title: Header with banner layout 2
 * Slug: millipede/header-with-banner-2
 * Categories: millipede
 */
$millipede_agency_url = trailingslashit(get_template_directory_uri());
$millipede_images = array(
    $millipede_agency_url . 'assets/images/banner_image_2.jpg',
);
?>
<!-- wp:cover {"url":"<?php echo esc_url($millipede_images[0]) ?>","id":4839,"isUserOverlayColor":true,"gradient":"gradient-third","style":{"spacing":{"padding":{"bottom":"0px","right":"0px","top":"0px","left":"0px"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-cover" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-gradient-third-gradient-background"></span><img class="wp-block-cover__image-background wp-image-4839" alt="" src="<?php echo esc_url($millipede_images[0]) ?>" data-object-fit="cover" />
    <div class="wp-block-cover__inner-container"><!-- wp:group {"className":"is-style-default","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"28px","bottom":"28px"},"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":""}},"backgroundColor":"transparent","layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-group is-style-default has-transparent-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:28px;padding-right:var(--wp--preset--spacing--40);padding-bottom:28px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"right":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:site-logo {"shouldSyncIcon":false,"className":"is-style-default"} /-->

                    <!-- wp:site-title {"style":{"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"500"}}} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"millipede-navigation-row","style":{"spacing":{"padding":{"right":"0","left":"0"},"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
                <div class="wp-block-group millipede-navigation-row" style="padding-right:0;padding-left:0"><!-- wp:navigation {"textColor":"background","className":"millipede-navigation","layout":{"type":"flex","justifyContent":"center"}} -->
                    <!-- wp:page-list /-->
                    <!-- /wp:navigation -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:cover {"overlayColor":"transparent","isUserOverlayColor":true,"minHeight":740,"isDark":false,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-cover is-light" style="margin-top:0;margin-bottom:0;min-height:740px"><span aria-hidden="true" class="wp-block-cover__background has-transparent-background-color has-background-dim-100 has-background-dim"></span>
            <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"dimensions":{"minHeight":""}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"740px"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"lineHeight":"1.3","fontStyle":"normal","fontWeight":"700","fontSize":"64px"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                    <h1 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color" style="font-size:64px;font-style:normal;font-weight:700;line-height:1.3"><?php esc_html_e('Building Brilliance Together:', 'millipede') ?> <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color"><?php esc_html_e('Empowering Your Brand`s', 'millipede') ?></mark> <?php esc_html_e('Journey!', 'millipede') ?></h1>
                    <!-- /wp:heading -->

                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"16px","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"left"}} -->
                    <div class="wp-block-group" style="margin-top:16px;margin-bottom:0"><!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"medium"} -->
                        <p class="has-text-align-left has-light-color-color has-text-color has-link-color has-medium-font-size" style="margin-top:10px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'millipede') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"48px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                    <div class="wp-block-buttons" style="margin-top:48px"><!-- wp:button {"backgroundColor":"primary","textColor":"light-color","className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"7px","width":"0px","style":"none"},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"22px","bottom":"22px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"fontSize":"medium"} -->
                        <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-medium-font-size"><a class="wp-block-button__link has-light-color-color has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:7px;padding-top:22px;padding-right:var(--wp--preset--spacing--60);padding-bottom:22px;padding-left:var(--wp--preset--spacing--60)"><?php esc_html_e('Explore More', 'millipede') ?></a></div>
                        <!-- /wp:button -->

                        <!-- wp:button {"backgroundColor":"background","textColor":"heading-color","className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"width":"0px","style":"none","radius":"7px"},"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70","top":"22px","bottom":"22px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"fontSize":"medium"} -->
                        <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-medium-font-size"><a class="wp-block-button__link has-heading-color-color has-background-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:7px;padding-top:22px;padding-right:var(--wp--preset--spacing--70);padding-bottom:22px;padding-left:var(--wp--preset--spacing--70)"><?php esc_html_e('Download', 'millipede') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
        </div>
        <!-- /wp:cover -->
    </div>
</div>
<!-- /wp:cover -->