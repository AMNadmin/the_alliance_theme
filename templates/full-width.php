<? 

/**

**	Template Name: Full Width Page

**/ 

get_header(); ?>
<? include( get_template_directory().'/includes/navbar.php'); ?>
<!-- /.navbar-wrapper -->

<div class="content-wrap" id="page">
  <div class="container">
    <div class="container-inner">
      <? while ( have_posts() ) : the_post();   ?>
      <div class="row" id="main-content-wrap">
        <div class="col-lg-12 main-content-L" id="post-<? the_ID(); ?>">
          <div class="inside">
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
              <!-- /.entry-content -->
          </div>
        </div>
        <!-- /.main-content --> 
      </div>
      <? endwhile; ?>
    </div>
    <!-- /.container-inner --> 
    
  </div>
  <!-- /.container --> 
  
</div>
<!-- /.content-wrap -->

<? get_footer(); ?>
