<?php

/**
 * Title: Our Team
 * Slug: millipede/our-team
 * Categories: millipede
 */
$millipede_agency_url = trailingslashit(get_template_directory_uri());
$millipede_images = array(
    $millipede_agency_url . 'assets/images/team_1.jpg',
    $millipede_agency_url . 'assets/images/team_2.jpg',
    $millipede_agency_url . 'assets/images/team_3.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"100px","bottom":"100px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"640px"}} -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"xx-large"} -->
        <h1 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Meet Our Team', 'millipede') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'millipede') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"48px"},"blockGap":{"left":"40px"}}}} -->
    <div class="wp-block-columns" style="margin-top:48px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"millipede-hover-box is-style-default","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"7px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group millipede-hover-box is-style-default" style="border-radius:7px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"id":428,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}}} -->
                <figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($millipede_images[0]) ?>" alt="" class="wp-image-428" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"}}} -->
                    <h3 class="wp-block-heading has-text-align-center" style="font-size:24px;font-style:normal;font-weight:600"><?php esc_html_e('Brandson Matt', 'millipede') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php esc_html_e('Founder', 'millipede') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"millipede-hover-box is-style-default","style":{"spacing":{"padding":{"top":"0","bottom":"24px","left":"0","right":"0"}},"border":{"radius":"7px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group millipede-hover-box is-style-default" style="border-radius:7px;padding-top:0;padding-right:0;padding-bottom:24px;padding-left:0"><!-- wp:image {"id":284,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}}} -->
                <figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($millipede_images[1]) ?>" alt="" class="wp-image-284" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"}}} -->
                    <h3 class="wp-block-heading has-text-align-center" style="font-size:24px;font-style:normal;font-weight:600"><?php esc_html_e('Kristy Len', 'millipede') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php esc_html_e('Founder', 'millipede') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"millipede-hover-box is-style-default","style":{"spacing":{"padding":{"top":"0","bottom":"24px","left":"0","right":"0"}},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group millipede-hover-box is-style-default" style="border-radius:0px;padding-top:0;padding-right:0;padding-bottom:24px;padding-left:0"><!-- wp:image {"id":283,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}}} -->
                <figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($millipede_images[2]) ?>" alt="" class="wp-image-283" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"}}} -->
                    <h3 class="wp-block-heading has-text-align-center" style="font-size:24px;font-style:normal;font-weight:600"><?php esc_html_e('Robinson Peter', 'millipede') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php esc_html_e('Founder', 'millipede') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->