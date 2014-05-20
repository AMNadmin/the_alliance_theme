<? 

/**

**	Template Name: Home Page
**/ 

get_header(); ?>
<? include( get_template_directory().'/includes/navbar.php'); ?>

<!-- /.navbar-wrapper -->

<? //include( get_template_directory().'/includes/carousel.php'); ?>

<!-- /#myCarousel -->

<div id="rev_slider_wrap">
  <?php putRevSlider("home-slider") ?>
</div>
<div class="content-wrap" id="home">
  <div class="container">
    <div class="container-inner">
    
      <div class="row">
        <div class="inside">
          <ul id="subtabs" class="clearfix">
            <li class="first"><a href="http://www.usvieda.org">
              <h1>Virgin Islands. Open for Business.</h1>
              </a> </li>
            <li><a href="http://dpp.vi.gov/index.html">
              <h1>Want to Contract With the USVI?</h1>
              </a></li>
            <li><a href="http://usvialliance.org/latest/upcoming-features/">
              <h1>Need Consulting Partners in the VI Diaspora?</h1>
              </a></li>
            <li><a href="http://usvialliance.org/latest/upcoming-features/">
              <h1>Searching for a Job in the USVI?</h1>
              </a></li>
          </ul>
        </div>
      </div>
      
      <div class="row" id="main-content-wrap">
        <div class="col-lg-8 main-content-L">
          <div class="inside">
            <div class="col-lg-12 front-preview-display">
              <div class="front-preview-img"><img src="<? bloginfo( 'template_url' ); ?>/images/main/usvi_group_pic.jpg" alt=""></div>
              <? 
				  while ( have_posts() ) : the_post();  
				  the_content();
				  endwhile;
			 ?>
            </div>
            <div class="col-lg-8 front-news-feed">
              <div class="pane-content">
                <div class="inner">
                  <h4>News Feed</h4>
                  <? 

						//query_posts('category_name=latest&posts_per_page=4&order_by=desc'); 
						$lastestQuery = new WP_Query('category_name=latest&posts_per_page=4&order_by=desc'); 
  
						while ( $lastestQuery->have_posts() ) : $lastestQuery->the_post();  
  
					$the_id =  get_post_thumbnail_id(get_the_ID()); 
  
					//$image = wp_get_attachment_image_src( $the_id, 'medium');
  
					$theAuthor = get_the_author(); 
  
					$theAuthorLink = get_author_posts_url( get_the_author_meta( 'ID' ) );
  
					$image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
  
					$posttags = get_the_tags();
  
					$post_categories = get_the_category();
  
					$cats = array();
  
					$id = get_post_thumbnail_id();
  
					$currTitle = tokenTruncate(get_the_title(), 55); 
					?>
                  <? if($image[0] != ''){ ?>
                  <div class="media"> <a class="pull-left" href="<? the_permalink(); ?>"> <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="<? echo $image[0]; ?>"> </a>
                    <div class="media-body">
                      <h5 class="media-heading"><a href="<? the_permalink(); ?>" title="<? the_title(); ?>">
                        <? the_title(); ?>
                        </a></h5>
                      <? the_excerpt_max_charlength(150); ?>
                    </div>
                  </div>
                  <? } else { ?>
                  <div class="media">
                    <div class="media-body">
                      <h5 class="media-heading"><a href="<? the_permalink(); ?>" title="<? the_title(); ?>">
                        <? the_title(); ?>
                        </a></h5>
                      <? usvialliance_entry_justdate(); ?>
                      <? the_excerpt_max_charlength(150); ?>
                    </div>
                  </div>
                  <? } ?>
                  <? endwhile; ?>
                  <div class="front-sociable">
                    <?php if( function_exists( do_sociable() ) ){ do_sociable(); } ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 front-subcontent">
              <div class="pane-content connect">
                <div class="inner">
                  <div class="wrap">
                    <h4>CONNECT WITH US</h4>
                    <div> <strong>USVI Alliance</strong> <br />
                      P.O. Box 1340 <br />
                      Greenbelt, MD 20768 <br />
                      (202) 681-3150 <br />
                      <div class="connect"> <a href="https://www.facebook.com/usvialliance" title="Friend us on Facebook"><i class="icon-facebook"></i> Facebook</a> <a href="http://twitter.com/usvialliance" title="Follow us on Twitter"><i class="icon-twitter"></i> Twitter</a> <a href="http://www.linkedin.com/company/the-usvi-alliance" title="Connect with us on LinkedIn"><i class="icon-linkedin"></i> LinkedIn</a> </div>
                    </div>
                    <div><i class="icon-inbox"></i> <a href="/contact/">Get In Touch</a></div>
                    <div><i class="icon-pencil"></i> <a href="/events/usvi-economic-development-summit-2014/">Summit Registration</a></div>
                  </div>
                </div>
              </div>
              <!-- /.pane-content -->
              
              <div class="pane-content mailchimp">
                <div class="inner">
                  <?php if (  !dynamic_sidebar( 'homepage3' ) ) : ?>
                  <?php endif; ?>
                </div>
              </div>
              <!-- /.pane-content --> 
              
              <div class="pane-content">
              	<div class="inner">
                	
                    <div class="" style="width:195px; margin: 2em auto 0 auto; text-align:center;" >
                      <iframe  src="http://www.eventbrite.com/countdown-widget?eid=8489425099" frameborder="0" height="540" width="195" marginheight="0" marginwidth="0" scrolling="no" allowtransparency="true"></iframe>
                      <div style="font-family:Helvetica, Arial; font-size:11px; padding:5px 0 5px; margin:2px; width:195px; text-align:center;" >
                      <a style="color:#333; text-decoration:none;" target="_blank" href="https://usvisummit2014.eventbrite.com/?ref=ecount">Event registration</a>
                      <span style="color:#333;"> for </span><a style="color:#333; text-decoration:none;" target="_blank" href="https://usvisummit2014.eventbrite.com/?ref=ecount">2014 USVI Economic Development Summit: Diversifying Business & Industry Beyond the 21st Century</a> <span style="color:#333;">powered by</span> <a style="color:#333; text-decoration:none;" target="_blank" href="https://usvisummit2014.eventbrite.com/?ref=ecount">Eventbrite</a></div>
                    </div>
                </div>
              </div>
              <!-- /.pane-content -->
            </div>
          </div>
        </div>
        <div class="col-lg-4 main-content-R">
          <? include( get_template_directory().'/includes/sidebar-home.php' ); ?>
        </div>
        <!-- /.main-content-R --> 
        
      </div>
      <!-- /#main-content-wrap --> 
      
    </div>
    <!-- /.container-inner --> 
    
  </div>
  <!-- /.container --> 
</div>
<!-- /.content-wrap -->

<? get_footer(); ?>
