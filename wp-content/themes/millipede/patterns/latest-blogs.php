<?php

/**
 * Title: Latest Blog Posts
 * Slug: millipede/latest-blogs
 * Categories: millipede
 */
$millipede_agency_url = trailingslashit(get_template_directory_uri());
$millipede_images = array(
    $millipede_agency_url . 'assets/images/icon_meta_date.png'
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"120px","bottom":"120px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:120px;padding-right:var(--wp--preset--spacing--40);padding-bottom:120px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"32px"}}},"layout":{"type":"constrained","contentSize":"680px"}} -->
        <div class="wp-block-group" style="margin-bottom:32px"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"xx-large"} -->
            <h1 class="wp-block-heading has-text-align-left has-xx-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Latest Posts', 'millipede') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"left"} -->
            <p class="has-text-align-left"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'millipede') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"radius":"7px"}},"fontSize":"medium"} -->
            <div class="wp-block-button has-custom-font-size has-medium-font-size"><a class="wp-block-button__link wp-element-button" style="border-radius:7px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--70)"><?php esc_html_e('Read More Articles', 'millipede') ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

    <!-- wp:query {"queryId":18,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
    <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"40px"}},"layout":{"type":"grid","columnCount":3}} -->
        <!-- wp:group {"className":"millipede-post-box is-style-default millipede-hover-box","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"12px","width":"0px","style":"none"}},"backgroundColor":"transparent","layout":{"type":"constrained"}} -->
        <div class="wp-block-group millipede-post-box is-style-default millipede-hover-box has-transparent-background-color has-background" style="border-style:none;border-width:0px;border-radius:12px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"isLink":true,"height":"310px","style":{"border":{"radius":"7px"}}} /-->

            <!-- wp:post-terms {"term":"category","className":"is-style-categories-background-with-round","style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase","fontSize":"12px"}}} /-->

            <!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"28px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"spacing":{"margin":{"top":"12px"}}}} /-->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"},"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0"><!-- wp:image {"id":255,"width":"auto","height":"16px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|meta-white"}}} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($millipede_images[0]) ?>" alt="" class="wp-image-255" style="width:auto;height:16px" /></figure>
                <!-- /wp:image -->

                <!-- wp:post-date {"style":{"typography":{"lineHeight":"1.6"}}} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->