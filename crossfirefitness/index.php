<!doctype html>
<html>
    <head>
        <title>CrossFire Fitness - <?php wp_title(); ?></title>
        
        <meta name="robots" content="index, follow" />
        <meta name="keywords" content="" />
        <meta name="description" content="">
        <meta name="author" content="Ben Harrison" />
        <meta name="copyright" content="Copyright 2012-<?php echo date("Y"); ?>" />
        
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0-rc2/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?php ThemeUrl('style.css') ?>" rel="stylesheet" media="screen">
        
        <link rel="icon" type="image/png" href="<?php ThemeUrl('images/favicon.png') ?>" />

        <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    </head>

<body>

    <header>
        <div class="container">
            <div id="logo">
                <h2>Crossfire Childen's Fitness Ministry</h2>
            </div>
            <img id="logo-mobile" src="<?php ThemeUrl('images/header-logo-mobile.jpg') ?>" />
            
            <a id="facebook-link" href="#">
                <img src="<?php ThemeUrl('images/facebook-white.png') ?>" />
            </a>
        </div>
    </header>

<nav class="group">
<?php

wp_nav_menu( array(
    'theme_location'  => '',
    'menu'            => 'navbar',
    'container'       => false,
    'container_class' => '',
    'container_id'    => '',
    'menu_class'      => 'container',
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'depth'           => 0,
    'walker'          => ''
) );

?>
</nav>
  
    <div id="hero">
        <div class="container">
            <p id="hero-content-heading">
                Crossfire is a faith-based fitness and nutrition program for kids & families.
            </p>
            <p id="hero-content-subheading">
                With God, grades, exercise & nutrition, there is no finish line!
            </p>
        </div>
    </div>


    <div class="content-block">
        <div class="container">
            <div class="group">
                <div id="mission">
                    <h1>The Mission</h1>
                    
                    <p>
                    Crossfire is a children's fitness ministry. The purpose is to inform and demonstrate through active participation that the four essential elements to a successful life are: 
                    <strong>God</strong>, <strong>Grades</strong>, <strong>Exercise</strong> and <strong>Nutrition</strong>. 
                    Crossfire is a faith based program, and is dedicated to community service, and the pursuit of happy, healthy children and families.
                    </p>
                    
                    <p>
                    Our aim is to provide:
                    </p>
                    
                    <ul>
                        <li>
                            A safe, loving environment for kids & families
                        </li>
                        <li>
                            A place to share, nurture and strengthen your faith
                        </li>
                        <li>
                            A place to exercise & learn about fitness from qualified instructors
                        </li>
                        <li>
                            A source of information about proper nutrition
                        </li>
                        <li>
                            A fun way for kids & families to connect with one another, as well as other believers who share a desire for health & wellness
                        </li>
                    </ul>
                </div>
                <div id="mission-logos">
                    <img src="<?php ThemeUrl('images/swva.png'); ?>" />
                    <img src="<?php ThemeUrl('images/ggen.png'); ?>" />
                </div>
            </div>
        </div>
    </div>
    
    <div class="content-block">
        <div class="container">
            <div>
                <h1>The Workouts</h1>
                
                <p>
                Sessions begin, of course, with proper stretching, and warming of the muscles. The workouts are typically circuit style, with body-on-body type strength exercises (such as push-ups, lunges, sit-ups, etc.) along with sprints and other cardiovascular exercises. The kids and parents move from station to station.  After each workout, the kids and parents circle up for discussions involving issues such as nutrition, the upcoming workout, special guests, community service, and faith. Most often, discussions surround the four essential elements to a successful life, which we believe are "God, Grades, Exercise, and Nutrition". Then, without fail, the group prays together. The session ends with a "Team Huddle", where everyone shouts in unison "1, 2, 3 CROSSFIRE!!!"
                </p>
            </div>
        </div>
    </div>
    
    <div class="content-block">
        <div class="container">
            <h1>Contact Options</h1>
            
<div class="row">
  <div class="col-md-8">
    <form class="form-horizontal" role="form">
      <div class="form-group">
        <label for="inputPassword1" class="col-lg-2 control-label">Name</label>
        <div class="col-lg-10">
          <input type="text" class="form-control" id="inputPassword1" placeholder="Name">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
        <div class="col-lg-10">
          <input type="email" class="form-control" id="inputEmail1" placeholder="Email Address">
        </div>
      </div>
      <div class="form-group">
        <label for="inputMessage" class="col-lg-2 control-label">Message</label>
        <div class="col-lg-10">
            <textarea id="inputMessage" class="form-control" rows="3"></textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
          <button type="submit" class="btn btn-warning">Send Message</button>
        </div>
      </div>
    </form>
  </div>
  <div class="col-md-4">
    <h2>Other Options</h2>
    <a class="btn btn-default btn-block" href="https://www.facebook.com/crossfirechildrensfitnessministries">Facebook</a>
    <a class="btn btn-default btn-block" href="tel:+2764944139">276.494.4139</a>
    <a class="btn btn-default btn-block" href="mailto:crossfirefit@gmail.com">crossfirefit@gmail.com</a>
  </div>
</div>

        </div>
    </div>
    
    <div class="content-block">
        <div class="container">
            <span class="scripture">
                I can do all things through Christ who strengthens me.
            </span>
            <div class="scripture-location">
                Phillipians 4:13
            </div>
        </div>
    </div>
    
    <div class="content-block">
    
    <div id="container">
        <section id="main">
            <div id="content">
                <div class="container" class="clearfix">
                    <h1>The Blog</h1>
                    <?php if(have_posts()) :
                          while(have_posts()) : the_post(); ?>
                        <article class="post post-<?php the_ID(); ?>">
                            <div class="clearfix">
                                <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
                                <div class="post_date_wrapper">
                                    <div class="post_date"><?php the_time('M d Y') ?></div>
                                </div>
                            </div>
                            
                            <div class="post_content"><?php the_content(); ?></div>
                            <div class="post_categories"><?php //the_category() ?></div>
                            <?php //comments_popup_link('No Comments', '1 Comment', '% Comments'); ?> 
                            <?php //edit_post_link('Edit', ' &#124; ', ''); ?>
                        </article>
                    <?php endwhile; ?>
                        <div id="newer_older" class="clearfix">
                            <?php posts_nav_link(' ', '< Read Newer Posts', 'Read Older Posts >'); ?>
                        </div>
                    <?php else : ?>
                        <div class="post">
                            <h2>Not Found</h2>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </div><!-- /#container -->
    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0-rc2/js/bootstrap.min.js"></script>
    
</body>
</html>
