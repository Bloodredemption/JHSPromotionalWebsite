<?php

/**
 * Title: Latest Works
 * Slug: millipede/latest-works
 * Categories: millipede
 */
$millipede_agency_url = trailingslashit(get_template_directory_uri());
$millipede_images = array(
    $millipede_agency_url . 'assets/images/project_1.jpg',
    $millipede_agency_url . 'assets/images/project_2.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"100px","bottom":"120px"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;margin-top:0;margin-bottom:0;padding-top:100px;padding-right:var(--wp--preset--spacing--40);padding-bottom:120px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"640px"}} -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"xx-large"} -->
        <h1 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Latest Works', 'millipede') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'millipede') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"48px"}}}} -->
    <div class="wp-block-columns" style="margin-top:48px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($millipede_images[0]) ?>","id":2718,"minHeight":480,"gradient":"dark-gradient","contentPosition":"bottom left","className":"millipede-hover-cover","style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"},"blockGap":"var:preset|spacing|30"},"border":{"radius":"7px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-left millipede-hover-cover" style="border-radius:7px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px;min-height:480px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-dark-gradient-gradient-background"></span><img class="wp-block-cover__image-background wp-image-2718" alt="" src="<?php echo esc_url($millipede_images[0]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"textColor":"background","fontSize":"large"} -->
                    <h3 class="wp-block-heading has-text-align-left has-background-color has-text-color has-link-color has-large-font-size" style="font-style:normal;font-weight:600"><a href="#"><?php esc_html_e('Mobile Apps', 'millipede') ?></a></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                    <p class="has-light-color-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'millipede') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"14px","bottom":"14px"}},"border":{"radius":"5px"}},"fontSize":"medium"} -->
                        <div class="wp-block-button has-custom-font-size has-medium-font-size"><a class="wp-block-button__link wp-element-button" style="border-radius:5px;padding-top:14px;padding-right:var(--wp--preset--spacing--50);padding-bottom:14px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Explore More', 'millipede') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($millipede_images[1]) ?>","id":2715,"minHeight":480,"gradient":"dark-gradient","contentPosition":"bottom left","className":"millipede-hover-cover","style":{"spacing":{"padding":{"right":"28px","left":"28px","top":"28px","bottom":"28px"},"blockGap":"var:preset|spacing|30"},"border":{"radius":"7px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-left millipede-hover-cover" style="border-radius:7px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px;min-height:480px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-dark-gradient-gradient-background"></span><img class="wp-block-cover__image-background wp-image-2715" alt="" src="<?php echo esc_url($millipede_images[1]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"textColor":"background","fontSize":"large"} -->
                    <h3 class="wp-block-heading has-text-align-left has-background-color has-text-color has-link-color has-large-font-size" style="font-style:normal;font-weight:600"><a href="#"><?php esc_html_e('Modern Architecture', 'millipede') ?></a></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                    <p class="has-light-color-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'millipede') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"14px","bottom":"14px"}},"border":{"radius":"5px"}},"fontSize":"medium"} -->
                        <div class="wp-block-button has-custom-font-size has-medium-font-size"><a class="wp-block-button__link wp-element-button" style="border-radius:5px;padding-top:14px;padding-right:var(--wp--preset--spacing--50);padding-bottom:14px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Explore More', 'millipede') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->