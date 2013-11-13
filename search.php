<? get_header(); ?>
<? include( get_template_directory().'/includes/navbar.php'); ?>
<!-- /.navbar-wrapper -->

<div class="content-wrap" id="page">
  <div class="container">
    <div class="container-inner">
      <div class="row" id="main-content-wrap">
        <div class="col-lg-9 main-content-L" id="search-results-content">
		<?php if ( have_posts() ) : ?>
          <header class="page-header">
            <div class="breadcrumbs"> <a href="/home2" title="Home"><i class="icon-home"></i> </a> <span class="sep"> / </span> <span class="current">
              Search Results
              </span> </div>
            <h1>
              <?php printf( __( 'Search Results for: <span>%s</span>', 'twentythirteen' ), get_search_query() ); ?>
            </h1>
          </header>
      	<? while ( have_posts() ) : the_post();   ?>
           <div class="entry-content" id="search-entry-content">
              <div class="media">
                <div class="media-body">
                  <h4 class="media-heading"><a href="<? the_permalink(); ?>" title="<? the_title(); ?>">
                    <? the_title(); ?>
                    </a></h4>
                  <? usvialliance_entry_justdate(); ?>
                  <? the_excerpt_max_charlength(150); ?>
                </div>
              </div>
            </div>
        <? endwhile; ?>
        
		<?php else : ?>
        	<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with different keywords.', 'twentythirteen' ); ?></p>
		<?php endif; ?>
        </div>
        <div class="col-lg-3 main-content-R">
        	<? include( get_template_directory().'/includes/sidebar-page.php' ); ?>
        </div>
      </div>
      <!-- /#main-content-wrap --> 
      
    </div>
    <!-- /.container-inner --> 
    
  </div>
</div>
<!-- /.content-wrap -->

<? get_footer(); ?>