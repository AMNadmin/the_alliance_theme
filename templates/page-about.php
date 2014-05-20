<? 
/**
**	Template Name: About The Team
**/
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
            <? //the_content(); ?>
            
            <div class="team-members-panel" id="team-members-panel">
            	<h2>Meet The USVI Alliance Team</h2>
                <div class="media">
                    <div class="member-pic">
                        <span><img src="http://usvialliance.org/wp-content/themes/the_alliance/images/team/new/loan_photo.png" alt="team pic"></span>
                    </div>
                    <div class="member-info-pane">
                        <div class="name">Loán Sewer</div>
                        <div class="position"> Marketing and Tourism Consultant / Business Broker</div>
                        <div class="location">Location: <span>Washington, D.C.</span></div>
                        <div class="expertise">Area of Expertise: <span>Tourism and Hospitality, Brand and Marketing Strategy, International Communications, Business Development</span></div>
                        <div class="role">USVI Areas of Interest: <span>Tourism Development, Economic Development, Affordable Housing/Senior Housing, Education, Business Consulting</span></div>
                    </div>
                </div>
				<div class="media">
                    <div class="member-pic">
                        <span><img src="http://usvialliance.org/wp-content/themes/the_alliance/images/team/new/bernard_photo.png" alt="team pic"></span>
                    </div>
                    <div class="member-info-pane">
                        <div class="name">Bernard Joseph</div>
                        <div class="position">Real Estate Manager / Business Developer</div>
                        <div class="location">Location: <span>New York, NY</span></div>
                        <div class="expertise">Area of Expertise: <span>Residential and Commercial real estate.</span></div>
                        <div class="role">USVI Areas of Interest: <span>“Housing in the United States Virgin Islands”, Housing Communities vs. Housing Projects, Federal Programs (Section 8, VASH Housing Programs for Veterans) , Green Homes</span></div>
                    </div>
                </div>
				<div class="media">
                    <div class="member-pic">
                        <span><img src="http://usvialliance.org/wp-content/themes/the_alliance/images/team/new/roland_photo.png" alt="team pic"></span>
                    </div>
                    <div class="member-info-pane">
                        <div class="name">Roland Riviere</div>
                        <div class="position">LGSW – Public Administrator in Mental Health</div>
                        <div class="location">Location: <span>Washington, D.C.</span></div>
                        <div class="expertise">Area of Expertise: <span>Area of Expertise: Social Work and Youth Outreach, Youth and Young Adult-related Crisis Intervention, Life Skills Coaching</span></div>
                        <div class="role">USVI Areas of Interest: <span>Areas of Interest: Quality of life issues in VI, Youth Employment/Job Training, Youth Violence</span></div>
                    </div>
                </div>
				<div class="media">
                    <div class="member-pic">
                        <span><img src="http://usvialliance.org/wp-content/themes/the_alliance/images/team/new/zmhodge_photo.png" alt="team pic"></span>
                    </div>
                    <div class="member-info-pane">
                        <div class="name">Zenzilé Hodge</div>
                        <div class="position">SPHR – Human Resources Consultant</div>
                        <div class="location">Location: <span>St. Thomas, USVI</span></div>
                        <div class="expertise">Area of Expertise: <span>Area of Expertise: Leadership, Creative Human Resources Strategy/Operations, Organizational Strategy, Change Management, Compensation, Customized HR Programs</span></div>
                        <div class="role">USVI Areas of Interest: <span>USVI Areas of Interest: Workforce Development, Organizational Development, Education, Human Resources Consulting</span></div>
                    </div>
                </div>

            </div>
            <!-- #team-members-panel -->
            
            
            
            
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




