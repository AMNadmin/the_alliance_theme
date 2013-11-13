<?
/**
**	Template Name: Splash Page
**/
get_header();
?>
<body <?php body_class(); ?> id="splash">

<section class="summit-preview-wrap">
    <div class="summit-preview-panel">
        <div class="summit-splash"><img src="<? bloginfo( 'template_url' ); ?>/images/main/summit-logo.png" alt=""  /></div>
        <div class="summit-links">
            <a href="#" class="eventbrite-link"></a>
            <a href="#" class="moreinfo-link">More info...</a>
        </div>
        <div class="mailchimp-signup-panel">
            <div class="mailchimp-signup-inner">
                <?php if (  !dynamic_sidebar( 'splash-mailchimp' ) ) : ?>
                <?php endif; ?>
            </div>
            <script>
				jQuery(document).ready(function(){
					jQuery('.mailchimp-signup-inner form input[type=text], .mailchimp-signup-inner form input[type=submit]').click(function(){
						jQuery('.error').css('display', 'none');
					});	
				});
			</script>
        </div>
        <div class="coming-soon-splash"><img src="<? bloginfo( 'template_url' ); ?>/images/main/comingsoon.png" alt=""  /></div>
        <div class="summit-social-links">
            <a href="#" target="_blank"><img src="<? bloginfo( 'template_url' ); ?>/images/main/twitter.png" alt=""  /></a>
            <a href="https://www.facebook.com/usvialliance?ref=stream" target="_blank"><img src="<? bloginfo( 'template_url' ); ?>/images/main/facebook.png" alt=""  /></a>
            <a href="http://www.linkedin.com/company/the-usvi-alliance" target="_blank"><img src="<? bloginfo( 'template_url' ); ?>/images/main/linkedin.png" alt=""  /></a>
            <a href="http://www.youtube.com/watch?v=xsMBlloCR_A" target="_blank"><img src="<? bloginfo( 'template_url' ); ?>/images/main/youtube.png" alt=""  /></a>
        </div>
    </div>
</section>
<? wp_footer(); ?>
</body>
</html>
