<?php
/**
 * The main template file
 * Template Name: Home
*/
?>

<?php get_header(); ?>

      <div class="content_head">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="content_name">
                <p class="hello"><?php the_field('main-subtitle'); ?></p>
                <p class="name"><?php the_field('main-title'); ?></p>
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="content_prof">
                <p><span><?php the_field('main-description'); ?></span></p>
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 clearfix">
              <div class="content_download">
                <p><?php echo do_shortcode( '[download id="61"]' ) ?></p>
              </div>
            </div>
          </div><!-- end row -->
        </div><!-- end container -->
      </div>
    </div>
  </header>
  <!-- End Header -->

  <!-- Header Section Bottom -->
  <section id="contact_header">
    <div class="container">
      <div class="row section_padding">
        <div class="col-md-3 col-sm-3 small_screen wow fadeInUp" data-wow-delay="0.2s">
          <p>Are you looking for</p> <!-- Change text -->
          <p><span>WEB DESIGNER?</span></p><!-- Change text -->
        </div>
        <div class="col-md-3 col-sm-3 small_screen wow fadeInUp" data-wow-delay="0.4s">
          <p>Call or email me</p><!-- Change text -->
          <p><span>right now.</span></p><!-- Change text -->
        </div>
        <div class="col-md-3 col-sm-3 small_screen wow fadeInUp" data-wow-delay="0.6s">
          <p>Call me</p><!-- Change text -->
          <p><span><?php the_field('main-phone'); ?></span></p><!-- Change text -->
        </div>
        <div class="col-md-3 col-sm-3 small_screen wow fadeInUp" data-wow-delay="0.8s">
          <p>Email me</p><!-- Change text -->
          <p><span><?php the_field('main-email'); ?></span></p><!-- Change text -->
        </div>
      </div><!-- end row -->
    </div><!-- end container -->
  </section>

  <!-- END Section Bottom -->

  <!-- Section About -->

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="section_header wow zoomIn" data-wow-delay="0.3s">
          <h2>About me</h2>
        </div>
        <div class="col-md-4 col-sm-4 small_screen wow fadeInUp" data-wow-delay="0.2s">
          <p>Hello, I???m Brendon, Creative Designert & User Experience Engineer based in New York ??? I create web digital
            products with professional skills and love.</p>
        </div>
        <div class="col-md-4 col-sm-4 small_screen wow fadeInUp" data-wow-delay="0.4s">
          <p>Wed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolorem laudantium, totam rem
            aperiam, eaque ip quae ab illo inventore veritatis et quasi.</p>
        </div>
        <div class="col-md-4 col-sm-4 small_screen wow fadeInUp" data-wow-delay="0.6s">
          <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
            fugit, sed quia et consequuntur magni perspiciatis unde.</p>
        </div>
      </div><!-- end row -->
      <div class="row about_block">
        <div class="col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.2s">
          <div class="about_block_border">
            <img src="<?php echo B_IMG_DIR ?>/icon1.png" alt="">
            <h4>WEB DESIGN</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.4s">
          <div class="about_block_border">
            <img src="<?php echo B_IMG_DIR ?>/icon2.png" alt="">
            <h4>DEVELOPMENT</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.6s">
          <div class="about_block_border">
            <img src="<?php echo B_IMG_DIR ?>/icon3.png" alt="">
            <h4>PAINTING</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.8s">
          <div class="about_block_border">
            <img src="<?php echo B_IMG_DIR ?>/icon4.png" alt="">
            <h4>MARKETING</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
      </div><!-- end row -->
    </div><!-- end container -->
  </section>
  <!-- End Section About -->

  <!-- Section Counter -->
  <section id="counter">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3">
          <span class="counter">76</span>
          <p>HAPPY CLIENTS</p>
        </div>
        <div class="col-md-3 col-sm-3">
          <span class="counter">244</span>
          <p>PROJECTS COMPLETED</p>
        </div>
        <div class="col-md-3 col-sm-3">
          <span class="counter">27</span>
          <p>NEW CONCEPTS</p>
        </div>
        <div class="col-md-3 col-sm-3">
          <span class="counter">11</span>
          <p>AWARDS WON</p>
        </div>
      </div><!-- end row -->
    </div><!-- end container -->
  </section>
  <!-- END Section Counter -->

  <!-- Section Portfolio -->
  <section class="portfolio" id="portfolio">
    <div class="container">
      <div class="section-title">
        <div class="section_header wow zoomIn" data-wow-delay="0.3s">
          <h2>My portfolio</h2>
        </div>
        <div class="portfolio_filter">
          <ul>
            <li class="select-cat" data-filter="*">All</li>
            <li data-filter=".web-design">Web Design</li>
            <li data-filter=".aplication">Applications</li>
            <li data-filter=".dev">Development</li>
          </ul>
        </div>
      </div>
      <!--Portfolio Items-->
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="isotope_items row">

            <?php 
              $posts = get_posts( array(
                'numberposts' => 6,
                'post_type'   => 'post',
                // 'post_status'   => 'any',
                'category'    => 13,
                'suppress_filters' => true,
              ) );

              foreach( $posts as $post ){
                setup_postdata($post);
                ?>
                  <a href="<?php the_post_thumbnail_url( 'image-med' ); ?>" class="single_item link col-md-4 col-sm-6 wow fadeInUp 
                  <?php $tags = wp_get_post_tags($post->ID);
                if($tags) {
                  foreach ($tags as $tag) {
                    echo ' ' . $tag->name;
								}
							}
                  ?>" data-wow-delay="0.3s">
                  <?php the_post_thumbnail( 'image-med' ); ?>
                  </a>
                <?php
              } 
              wp_reset_postdata();
            ?>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END Section Portfolio -->

  <!-- Section Blog -->
  <section id="blog">
    <div class="blog-section">
      <div class="container">
        <!-- Title -->
        <div class="section_header wow zoomIn" data-wow-delay="0.3s">
          <h2>Blog</h2>
        </div>
        <!-- End Title -->
        <div class="row">

          <?php 
            $posts = get_posts( array(
              'numberposts' => 2,
              'category__not_in' => '13',
              'post_type'   => 'post',
              'suppress_filters' => true, // ???????????????????? ???????????? ???????????????? ?????????????????? SQL ??????????????
            ) );

            foreach( $posts as $post ){
              setup_postdata($post);
              ?>
                <div class="col-md-6 col-sm-6">
                  <div class="blog_block">
                    <div class="blog-img-frame wow slideInLeft" data-wow-delay="0.3s">
                      <a href="<?php the_permalink(); ?>" class="blog-img">
                        <?php the_post_thumbnail( 'image-med' ); ?>
                      </a>
                    </div>
                    <!--./blog-img-frame-->
                    <div class="brief-content wow slideInRight" data-wow-delay="0.3s">
                      <h4 class="brief-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                      <p class="brief-date"><?php the_author(); ?> - <?php echo get_the_date('j F Y'); ?></p>
                      <?php the_excerpt(); ?>
                      <div class="blog-buttons">
                        <a href="<?php the_permalink(); ?>">Read more<i class="fa fa-long-arrow-right"></i></a>
                      </div>
                    </div>
                    <!--./brief-content-->
                  </div>
                  <!-- /.blog_block -->
                </div> <!-- /.col-md-6 col-sm-6 -->
              <?php
            } 
            wp_reset_postdata(); // ??????????
          ?>

        </div> <!-- /.row -->

        <div class="blog_read_more wow zoomIn" data-wow-delay="0.2s">
          <a href="http://localhost/brandon/blog/">read more</a>
        </div>

      </div>
      <!-- /.container -->
    </div>
    <!-- /.blog-section -->
  </section>
  <!-- END Section Blog -->

  <!-- Section Contact -->
  <section id="contact">
    <div class="contact_block">
      <div class="container">
        <div class="section_header wow zoomIn" data-wow-delay="0.3s">
          <h2>Get in touch</h2>
        </div>
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8 col-sm-12">
            <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.2s">
              <div class="contact_block_border">
                <img src="<?php echo B_IMG_DIR ?>/icon5.png" alt="">
                <h4>PHONE</h4>
                <p>01777536213</p>
                <p>01777534531</p>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.4s">
              <div class="contact_block_border">
                <img src="<?php echo B_IMG_DIR ?>/icon6.png" alt="">
                <h4>EMAIL</h4>
                <p>help@mail.com</p>
                <p>williams@mail.com</p>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
              <div class="contact_block_border">
                <img src="<?php echo B_IMG_DIR ?>/icon7.png" alt="">
                <h4>ADDRESS</h4>
                <p>Bright Street</p>
                <p>New York, USA</p>
              </div>
            </div>
          </div>
          <div class="col-md-2"></div>
        </div> <!-- end row -->
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="contact_form">
              <form method="post" action="" id="ajaxform">
                <?php echo do_shortcode('[contact-form-7 id="168" title="???????????????????? ?????????? 1"]'); ?>
              </form>
            </div>
          </div>
          <div class="col-md-2"></div>
        </div><!-- end row -->
      </div><!-- end container -->
    </div>
  </section>
  <!-- End Section Contact -->

<?php get_footer(); ?>