<?php
/**
 * Banner Section
 * 
 * slug: cricket-club-league/banner
 * title: Banner
 * categories: cricket-club-league
 */

return array(
    'title'      =>__( 'Banner', 'cricket-club-league' ),
    'categories' => array( 'cricket-club-league' ),
    'content'    => '<!-- wp:group {"className":"wp-block-group slider-main-box alignfull","layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group slider-main-box alignfull"><!-- wp:cover {"url":"'.esc_url(get_template_directory_uri()) .'/assets/images/banner-image.png","id":17,"dimRatio":0,"isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":0.5},"minHeight":700,"minHeightUnit":"px","contentPosition":"center center","className":"banner-section","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0","margin":{"top":"0","bottom":"0"}},"border":{"radius":{"bottomLeft":"30px","topRight":"0px","topLeft":"0px","bottomRight":"550px"}}},"layout":{"type":"constrained","contentSize":"80%","wideSize":"80%"}} -->
    <div class="wp-block-cover banner-section" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:30px;border-bottom-right-radius:550px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-17" alt="" src="'.esc_url(get_template_directory_uri()) .'/assets/images/banner-image.png" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"className":"banner-section-column","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"0"}}}} -->
    <div class="wp-block-columns banner-section-column" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"40%","className":"banner-first-column","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
    <div class="wp-block-column is-vertically-aligned-center banner-first-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:40%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group"><!-- wp:image {"id":204,"width":"130px","sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full is-resized"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/banner-text.png" alt="" class="wp-image-204" style="width:130px"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:paragraph {"align":"center","className":"small-text","style":{"color":{"text":"var(--wp--preset--color--accent)"},"elements":{"link":{"color":{"text":"var(--wp--preset--color--accent)"}}},"typography":{"textDecoration":"underline"}},"fontSize":"medium","fontFamily":"abel"} -->
    <p class="has-text-align-center small-text has-text-color has-link-color has-abel-font-family has-medium-font-size" style="color:var(--wp--preset--color--accent);text-decoration:underline">'. esc_html__('Welcome Back!','cricket-club-league').'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->
    
    <!-- wp:heading {"level":1,"className":"banner-heading","style":{"typography":{"fontSize":"48px","fontStyle":"normal","fontWeight":"700","lineHeight":"0.9"},"layout":{"selfStretch":"fit","flexSize":null}},"fontFamily":"teko"} -->
    <h1 class="wp-block-heading banner-heading has-teko-font-family" style="font-size:48px;font-style:normal;font-weight:700;line-height:0.9">'. esc_html__('CRICKET IS A GAME WITH HAPPYNESS','cricket-club-league').'</h1>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"lineHeight":"1.2","letterSpacing":"0px","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"var:preset|spacing|60","top":"0"},"margin":{"top":"0"}}},"textColor":"white","fontSize":"small","fontFamily":"abel"} -->
    <p class="has-white-color has-text-color has-link-color has-abel-font-family has-small-font-size" style="margin-top:0;padding-top:0;padding-right:var(--wp--preset--spacing--60);font-style:normal;font-weight:400;letter-spacing:0px;line-height:1.2">'. esc_html__('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.','cricket-club-league').'</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button {"className":"banner-button","style":{"typography":{"fontSize":"20px"},"color":{"background":"#00000000"},"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","top":"0","bottom":"0"}}},"fontFamily":"teko"} -->
    <div class="wp-block-button has-custom-font-size banner-button has-teko-font-family" style="font-size:20px"><a class="wp-block-button__link has-background wp-element-button" style="background-color:#00000000;padding-top:0;padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)">'. esc_html__('Know more','cricket-club-league').'<span class="dashicons dashicons-arrow-right-alt"></span></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"50%","className":"banner-image-wrap"} -->
    <div class="wp-block-column banner-image-wrap" style="flex-basis:50%"></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group --></div></div>
    <!-- /wp:cover --><!-- wp:group {"className":"banner-overlay","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
    <div class="wp-block-group banner-overlay" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"className":"banner-overlay-inner","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"0"}}}} -->
    <div class="wp-block-columns banner-overlay-inner" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
    <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:50%"></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"50%","className":"banner-image-wrap"} -->
    <div class="wp-block-column banner-image-wrap" style="flex-basis:50%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
    <div class="wp-block-group"><!-- wp:image {"id":207,"scale":"cover","sizeSlug":"full","linkDestination":"none","className":"overlay-inner-image","style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
    <figure class="wp-block-image size-full overlay-inner-image"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/ball.png" alt="" class="wp-image-207" style="object-fit:cover"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:image {"id":205,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/banner-men.png" alt="" class="wp-image-205"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->',
);