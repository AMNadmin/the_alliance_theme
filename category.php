<? get_header(); ?>

<? include( get_template_directory().'/includes/navbar.php'); ?>
<!-- /.navbar-wrapper -->
<div style="width: 100%; height:300px; background: #000;">
	<div class="container" style="position: relative; top: 100px;">
    	<h1><? the_title(); ?></h1>
    </div>
</div>
<!-- /#myCarousel -->
  
<div class="content-wrap" id="blog">
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
				<?php if ( have_posts() ) : 
					while ( have_posts() ) : the_post(); 
				$the_id =  get_post_thumbnail_id(get_the_ID()); 
				//$image = wp_get_attachment_image_src( $the_id, 'medium');
				$theAuthor = get_the_author(); 
				$theAuthorLink = get_author_posts_url( get_the_author_meta( 'ID' ) );
				$image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
				$posttags = get_the_tags();
				$post_categories = get_the_category();
				$cats = array();
				$id = get_post_thumbnail_id();
				$currTitle = tokenTruncate(get_the_title(), 55); ?>
				
				<? if($image[0] != ''){ ?>
				<div class="media">
				  <a class="pull-left" href="<? the_permalink(); ?>">
					<img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="<? echo $image[0]; ?>">
				  </a>
				  <div class="media-body">
					<h4 class="media-heading"><a href="<? the_permalink(); ?>" title="<? the_title(); ?>"><? the_title(); ?></a></h4>
					<? the_excerpt_max_charlength(150); ?>
				  </div>
				</div>
				
				<? } else { ?>
				
				<div class="media">
				  <div class="media-body">
					<h4 class="media-heading"><a href="<? the_permalink(); ?>" title="<? the_title(); ?>"><? the_title(); ?></a></h4>
					<? usvialliance_entry_justdate(); ?>
					<? the_excerpt_max_charlength(150); ?>
				  </div>
				</div>
				
				
				
				<? } ?>
                
				<? endwhile; ?>
                
				<?php else : ?>
                    <?php get_template_part( 'content', 'none' ); ?>
                <?php endif; ?>
            </div>
          	<div class="col-lg-4 main-content-R">
                <!--<div class="pane-content eventbrite">
                    <div class="inner">
                        <?php if (  !dynamic_sidebar( 'homepage1' ) ) : ?>
                        <?php endif; ?>	
                        <label>Registration Open Until November 11th.</label> 
                        <div class="evt-btn"><a href="#"><img src="<? bloginfo( 'template_url' ); ?>/images/main/eventbrite.png" width="150" height="30" alt=""></a></div>
                    </div>
                    
                </div>-->
                <!-- /.pane-content -->
                
                <div class="solid-pane-content">
                    <div class="inner">
                    	<ul>
                        	<li><a href="http://usvialliance.org/blog/" title="Press & News Coverage">Press & News Coverage</a></li>
                            
                        	<li><a href="http://stcroixsource.com/content/news/local-news/2013/06/06/dc-summit-explore-vi-economic-future" title="">St. Croix Source</a></li>
                        	<li><a href="http://stthomassource.com/content/news/local-news/2013/06/11/organizer-expects-concrete-results-economic-summit" title="">St. Thomas Source</a></li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">CBS TV-2 (St. Thomas, USVI) <b class="caret"></b></a>
                              <ul class="dropdown-menu">
                                <li><a href="http://youtu.be/UA8hGTiJBUY">June 6</a></li>
                                <li><a href="http://youtu.be/xvfVhrQOfo4">June 7</a></li>
                                <li><a href="http://youtu.be/5SG5ghSGqT4">June 10</a></li>
                
                              </ul>
                
                            </li>
                        	<li><a href="http://stthomassource.com/content/news/local-news/2013/06/11/organizer-expects-concrete-results-economic-summit" title="">St. Thomas Source</a></li>
                        	<li><a href="http://www.caribbeancommunitylive.com/content/us-virgin-islands-economic-leaders-bring-key-business-development-strategies-washington-dc%C2%A0" title="Caribbean Community Live">Caribbean Community Live</a></li>
                        	<li><a href="http://usvialliance.org/about/usvi-annual-summit/" title="">Annual Summit Event</a></li>
                        </ul>
                    </div>
                    
                    <div class="connect sidebar">
                        <h5>CONNECT WITH US</h5>
                        <a href="#" title="Friend us on Facebook"><i class="icon-facebook"></i> <span>Facebook</a>
                        <a href="#" title="Follow us on Twitter"><i class="icon-twitter"></i> <span>Twitter</a>
                        <a href="#" title="Connect with us on LinkedIn"><i class="icon-linkedin"></i> <span>LinkedIn</span></a>
                        <a href="/contact/" title=""><i class="icon-envelope-alt"></i> <span>info@usvialliance.org</span></a>
                    </div>
                </div>
                
            </div>
          </div>
          <!-- /#main-content-wrap -->
          
          
      </div>
      <!-- /.container-inner -->
      
  </div>
</div>
<!-- /.content-wrap -->

  
<? get_footer(); ?>
