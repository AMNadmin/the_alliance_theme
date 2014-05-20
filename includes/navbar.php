<?
global $user_identity, $userInfo, $user_ID, $wp_query, $wpdb, $wp_crm, $current_user;
$currUserInfo = get_userdata($user_ID);
$currPostName = $post->post_name; 
$currPostTitle = $post->post_title;
$currPostParent = $post->post_parent;
?>
<div class="navbar-wrapper">

  <div class="container">

    <div class="navbar navbar-inverse navbar-static-top">

      <div class="">

        <div class="navbar-header">

          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

          </button>

          <a class="navbar-brand" href="/"><img src="<? bloginfo( 'template_url' ); ?>/images/main/header-logo.png" alt=""></a>

        </div>

        <div class="navbar-collapse collapse">

          <ul class="nav navbar-nav">

            <li <? if(is_front_page()){ ?>class="active"<? } ?>><a href="/">Home</a></li>

            <li class="dropdown<? if($currPostName == 'about' || $currPostName == 'usvi-annual-summit'){ ?> active<? } ?>">

              <a href="#" class="dropdown-toggle" data-toggle="dropdown">About <b class="caret"></b></a>

              <ul class="dropdown-menu">

                <li><a href="/about/">USVI Alliance</a></li>

                <li><a href="about/usvi-annual-summit/">Annual USVI Summit</a></li>
              </ul>

            </li>

            <li class="dropdown<? if(is_home()){ ?> active<? } ?>">

              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>

              <ul class="dropdown-menu">

                <li><a href="/blog/">News & Press Releases</a></li>

              </ul>

            </li>

            <li class="dropdown<? if($currPostName == 'usvi-economic-development-summit-2014' || $currPostName == 'usvi-economic-development-summit-2013'){ ?> active<? } ?>">

              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Events <b class="caret"></b></a>

              <ul class="dropdown-menu">

                <li><a href="/events/usvi-economic-development-summit-2014/">2014 USVI EDS</a></li>

                <li><a href="/events/usvi-economic-development-summit-2013/">2013 USVI EDS</a></li>
                <li><a href="/events/summit-registration/">EDS Summit Registration</a></li>

              </ul>

            </li>

            <li  class="dropdown<? if($currPostName == 'business-connections' || $currPostName == 'employment-opportunities' && !is_home()){ ?> active<? } ?>">

              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources <b class="caret"></b></a>

              <ul class="dropdown-menu">

                <li class="dropdown-header">CONNECTIONS</li>

                <li><a href="/resources/business-connections/">Business Connections</a></li>

                <li><a href="/resources/employment-opportunities/">Employment Opportunities</a></li>

                <li class="divider"></li>

                <li class="dropdown-header">VI RESOURCES</li>

                <li><a href="http://virginislandsdailynews.com/" target="_blank" title="VI Daily News">VI Daily News</a></li>

                <li><a href="http://visource.com/" target="_blank" title="VI Source">VI Source</a></li>

                <li><a href="http://www.visitusvi.com/" target="_blank" title="VI Dept of Tourism">VI Dept of Tourism</a></li>

                <li><a href="http://www.gov.vi/" target="_blank" title="VI Government">VI Government</a></li>

                <li><a href="http://www.viadc.org/" target="_blank">VI Association of D.C.</a></li>

              </ul>

            </li>

            <li <? if($currPostName == 'contact'){ ?>class="active"<? } ?>><a href="/contact/">Contact</a></li>
            <li id="search-wrap">
				<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                	<input type="text" name="s" id="s" placeholder="Search ..." />
                    <input type="submit" name="submit" id="searchsubmit" value="Search" />
                </form>
            </li>

          </ul>

        </div>

      </div>

    </div>

	<!-- /.navbar -->

  </div>

</div>