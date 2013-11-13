<? 

get_header(); 

?>
<? include( get_template_directory().'/includes/navbar.php'); ?>
<!-- /.navbar-wrapper -->

<div class="content-wrap" id="page">
  <div class="container">
    <div class="container-inner">
      <? while ( have_posts() ) : the_post();   ?>
      <div class="row" id="main-content-wrap">
        <div class="col-lg-9 main-content-L" id="post-<? the_ID(); ?>">
          <header class="page-header">
            <div class="breadcrumbs"> <a href="/" title="Home"><i class="icon-home"></i> </a> <span class="sep"> / </span> <span class="current" title="<? the_title(); ?>">
              <? the_title(); ?>
              </span> </div>
            <h1>
              <? the_title(); ?>
            </h1>
          </header>
          <div id="post-<? the_ID(); ?>" <? post_class('entry-content') ?>>
            <? the_content(); ?>
          </div>
        </div>
	  <? endwhile; ?>
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




