<?php
/**
 * Gallery Section
 * 
 * slug: cricket-club-league/gallery-section
 * title: Gallery Section
 * categories: cricket-club-league
 */

return array(
    'title'      =>__( 'Gallery Section', 'cricket-club-league' ),
    'categories' => array( 'cricket-club-league' ),
    'content'    => '<!-- wp:spacer {"height":"80px"} -->
    <div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:group {"tagName":"main","align":"wide","className":"gallery-section alignfull","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <main class="wp-block-group alignwide gallery-section alignfull" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"isStackedOnMobile":false,"align":"wide","style":{"spacing":{"blockGap":{"left":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"color":{"background":"#0d0d0d"},"border":{"radius":"0px"}}} -->
    <div class="wp-block-columns alignwide is-not-stacked-on-mobile has-background" style="border-radius:0px;background-color:#0d0d0d;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"50%","className":"gallery-col1","style":{"color":{"background":"var(--wp--preset--color--accent)"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
    <div class="wp-block-column is-vertically-aligned-center gallery-col1 has-background" style="background-color:var(--wp--preset--color--accent);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:50%"><!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","right":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":{"topLeft":"0px","bottomLeft":"0px","topRight":"130px","bottomRight":"130px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-top" style="border-top-left-radius:0px;border-top-right-radius:130px;border-bottom-left-radius:0px;border-bottom-right-radius:130px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:0;padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:column {"verticalAlignment":"top","width":"100%"} -->
    <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:100%"><!-- wp:group {"className":"gallery-inner-box","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"0","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80"}},"border":{"radius":"20px"},"color":{"background":"#00000000"}},"layout":{"type":"flex","orientation":"vertical"}} -->
    <div class="wp-block-group gallery-inner-box has-background" style="border-radius:20px;background-color:#00000000;padding-top:var(--wp--preset--spacing--80);padding-right:0;padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:heading {"className":"gallery-sec-heading","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"29px","fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"}},"textColor":"white","fontFamily":"teko"} -->
    <h2 class="wp-block-heading gallery-sec-heading has-white-color has-text-color has-link-color has-teko-font-family" style="font-size:29px;font-style:normal;font-weight:600;line-height:1.2">'. esc_html__('Our Match Gallery','cricket-club-league').'</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"background","fontSize":"medium","fontFamily":"abel"} -->
    <p class="has-background-color has-text-color has-link-color has-abel-font-family has-medium-font-size" style="font-style:normal;font-weight:400">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry.','cricket-club-league').'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"top","width":"100%","style":{"spacing":{"padding":{"right":"0","left":"0"}},"color":{"background":"#00000000"}}} -->
    <div class="wp-block-column is-vertically-aligned-top has-background" style="background-color:#00000000;padding-right:0;padding-left:0;flex-basis:100%"><!-- wp:image {"id":200,"sizeSlug":"full","linkDestination":"none","className":"first-column-image"} -->
    <figure class="wp-block-image size-full first-column-image"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/gallery-img.png" alt="" class="wp-image-200"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":"50%","className":"gallery-col2","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"color":{"background":"#ffffff00"}}} -->
    <div class="wp-block-column is-vertically-aligned-center gallery-col2 has-background" style="background-color:#ffffff00;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);flex-basis:50%"><!-- wp:group {"className":"second-column-inner","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|70","bottom":"var:preset|spacing|60","left":"var:preset|spacing|70"}},"color":{"background":"#0d0d0d00"}},"layout":{"type":"constrained","contentSize":""}} -->
    <div class="wp-block-group second-column-inner has-background" style="background-color:#0d0d0d00;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--70)"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:image {"id":203,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"15px"}}} -->
    <figure class="wp-block-image size-full has-custom-border"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/gallery01.png" alt="" class="wp-image-203" style="border-radius:15px;object-fit:cover"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:image {"id":202,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"15px"}}} -->
    <figure class="wp-block-image size-full has-custom-border"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/gallery02.png" alt="" class="wp-image-202" style="border-radius:15px;object-fit:cover"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:image {"id":201,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"15px"}}} -->
    <figure class="wp-block-image size-full has-custom-border"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/gallery03.png" alt="" class="wp-image-201" style="border-radius:15px"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></main>
    <!-- /wp:group -->
    
    <!-- wp:spacer {"height":"80px"} -->
    <div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->',
);