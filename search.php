<?php get_header('blog'); ?>

<div class="content_head">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="content_head_txt">
          <p>MY THOUGHTS</p>
        </div>
      </div>
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="content_bottom_txt">
          <p>Take a look and share your opinion.</p>
        </div>
      </div>
    </div><!-- end row -->
  </div><!-- end container -->
</div>
</div>
</header>
<!-- End Header Section -->

<section class="blog-section blog-section-bg">

  <div class="breadcrumb">
    <nav class="container">
      <ul>
        <li><a href="http://localhost/brandon/">home</a></li>
        <li class="active">blog</li>
      </ul>
    </nav>
  </div>
  <!--./Blog-breadcrumb-->
  <!--  -->
  <div class="blog-wrapper">
    <!------ BEGIN BLOG WRAPPER ------>
    <div class="container">
      <div class="row">
        <div class="blog-list clearfix">
          <!-- BLOG CONTENT -->
          <div class="col-md-9">
            <div class=" blog-content">

              <?php
                $query_args = array(
                  'paged'            => ( get_query_var('paged') ? get_query_var('paged') : 1 ),
                  'post_type'        => 'post',
                  'category__not_in' => '13',
                );
								?>

              <?php if(have_posts()) {while (have_posts()) {the_post(); ?>

              <div class="col-md-6 col-sm-6">
                <div class="content-box">
                  <div class="blog-img-frame">
                    <a class="blog-img" href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail( array(371, 278) ); ?>
                    </a>
                  </div>

                  <div class="content">
                    <a href="<?php the_permalink(); ?>">
                      <h4 class="blog-text-uppercase"><?php the_title(); ?></h4>
                    </a>
                    <p class="block-date"><?php the_author(); ?> - <?php echo get_the_date('j F Y'); ?></p>

                    <?php the_excerpt(); ?>
                    <div class="blog-buttons">
                      <a href="<?php the_permalink(); ?>">read more
                        <i class="fa fa-long-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <?php } /* ?????????? while */ ?>

              <?php
                the_posts_pagination(
                  $args = array(
                    'show_all'     => false, // ???????????????? ?????? ???????????????? ?????????????????????? ?? ??????????????????
                    'end_size'     => 10,     // ???????????????????? ?????????????? ???? ????????????
                    'mid_size'     => 4,     // ???????????????????? ?????????????? ???????????? ??????????????
                    'prev_next'    => true,  // ???????????????? ???? ?????????????? ???????????? "????????????????????/?????????????????? ????????????????".
                    'prev_text'    => 'Back',
                    'next_text'    => 'Next',
                    'type'         => 'list',
                  ));
              ?>

              <?php } /* ?????????? if */ ?>

            </div>
          </div>

          <!-- BLOG SIDEBAR -->
          <?php get_sidebar(); ?>

        </div>
      </div>
    </div>
    <!------ END BLOG WRAPPER ------>
  </div>
  <!-- / -->
</section>
<!--./content-->

<?php get_footer(); ?>