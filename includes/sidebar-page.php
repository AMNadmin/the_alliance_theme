<div class="solid-pane-content resources">
  <div class="inner">
  	<h5>RESOURCES</h5>
    <ul>
      <li><a href="http://usvialliance.org/blog/" title="">Press & News Coverage</a></li>
      <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">CBS TV-2 <br />
        (St. Thomas, USVI) <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="http://youtu.be/UA8hGTiJBUY">June 6</a></li>
          <li><a href="http://youtu.be/xvfVhrQOfo4">June 7</a></li>
          <li><a href="http://youtu.be/5SG5ghSGqT4">June 10</a></li>
        </ul>
      </li>
      <li><a href="http://stcroixsource.com/content/news/local-news/2013/06/06/dc-summit-explore-vi-economic-future" title="St. Croix Source">St. Croix Source</a></li>
      <li><a href="http://stthomassource.com/content/news/local-news/2013/06/11/organizer-expects-concrete-results-economic-summit" title="St. Thomas Source">St. Thomas Source</a></li>
      <li><a href="http://usvialliance.org/about/usvi-annual-summit/" title="Annual Summit Event">Annual Summit Event</a></li>
    </ul>
  </div>
</div>

<div class="solid-pane-content facebook-feed">
  <div class="inner">
  	<h4 class="header">The USVI Alliance Facebook Feed</h4>
    <?php if (  !dynamic_sidebar( 'sbar4' ) ) : ?>
    <?php endif; ?>
  </div>
</div>
<!-- /.pane-content --> 

<div class="solid-pane-content social">
  <div class="inner">
  <h5>CONNECT WITH US</h5>
  <strong>Mailing List Signup</strong>
  <div class="mailchimp">
  	<?php if (  !dynamic_sidebar( 'sbar3' ) ) : ?>
    <?php endif; ?>
  </div>
  <strong>USVI Social Networks</strong>
  <a href="https://www.facebook.com/usvialliance" title="Friend us on Facebook"><i class="icon-facebook"></i> <span>Facebook</a> <a href="http://twitter.com/usvialliance" title="Follow us on Twitter"><i class="icon-twitter"></i> <span>Twitter</a> <a href="http://www.linkedin.com/company/the-usvi-alliance" title="Connect with us on LinkedIn"><i class="icon-linkedin"></i> <span>LinkedIn</span></a> <a href="mailto:info@usvialliance.org" title=""><i class="icon-envelope-alt"></i> <span>info@usvialliance.org</span></a> 
  </div>
</div>
<!-- /.pane-content --> 

<?php /*?><div class="solid-pane-content latest-feed">
  <div class="inner">
	
  <h5>LATEST NEWS</h5>
	  <? 
                    
          query_posts('category_name=latest&posts_per_page=3&order_by=desc'); 
    
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
    
      $currTitle = tokenTruncate(get_the_title(), 55); 
      ?>
      <div class="media">
        <div class="media-body">
          <h4 class="media-heading"><a href="<? the_permalink(); ?>" title="<? the_title(); ?>">
            <? the_title(); ?>
            </a></h4>
          <? usvialliance_entry_justdate(); ?>
          <? the_excerpt_max_charlength(80); ?>
        </div>
      </div>
      <? endwhile; ?>
      <ul class="social-icons social-icons-color" style="padding:0">
      	<li><a href="http://feeds.feedburner.com/TheUSVIAlliance" data-original-title="rss" class="rss"></a> <span>USVI Alliance RSS Feed</span></li>
      </ul>
    </div>
</div>
<!-- /.solid-pane-content latest-feed --><?php */?>

