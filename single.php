<?php
  /*
    Template Name: Single
  */
?>

<?php get_header('blog'); ?>

      <div class="content_head">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="content_head_txt">
                <p><?php the_title(); ?></p>
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="content_bottom_txt">
                <p><?php the_author(); ?> - <?php echo get_the_date('j F Y'); ?></p>
              </div>
            </div>
          </div><!-- end row -->
        </div><!-- end container -->
      </div>
    </div>
  </header>
    <!-- End Header Section -->

  <section class="blog-section blog-single-bg">

    <div class="breadcrumb">
      <nav class="container">
        <ul>
          <li><a href="http://localhost/brandon/">home</a></li>
          <li><a href="http://localhost/brandon/blog/">blog</a></li>
          <li class="active">blog-single</li>
        </ul>
      </nav>
    </div>
    <!--./Blog-breadcrumb--><!--  -->

    <div class="blog-wrapper">
        <!-- BEGIN BLOG WRAPPER -->
      <div class="container">
        <div class="row">
          <div class="blog-list clearfix">
            <!-- BLOG CONTENT -->
            <div class="col-md-9">
              <div class="blog-content">
                <?php if(have_posts()) { while (have_posts()) { the_post(); ?>

                  <div class="blog-img-frame">
                  <?php the_post_thumbnail( 'image-lar' ); ?>
                  </div>

                  <div class="info">
                    <ul class="blog-list">
                      <li>Date:<span>&nbsp; <?php echo get_the_date('F j, Y'); ?> </span></li>
                      <li>Comments: &nbsp;<p><?php comments_number( '0', '1', '%'); ?></p></li>
                    </ul>
                  </div> <!-- /.info -->

                  <div class="content">
                    <h4 class="blog-text-uppercase"><?php the_title(); ?></h4>
                    <?php the_content(); ?>
                  </div> <!-- /.content -->

                  <div class="share">
                    <ul class="list-inline">
                      <li class="hidden-sm hidden-xs">
                        <h4 class="blog-text-uppercase">share</h4>
                      </li>
                      <li>
                        <a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                      </li>
                      <li>
                        <a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                      </li>
                      <li>
                        <a href="https://plus.google.com/"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                      </li>
                      <li>
                        <a href="https://www.pinterest.com/"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                      </li>
                    </ul>
                  </div> <!-- /.share -->

                  <div class="comment">
                    <?php if (comments_open() || get_comments_number()) {
                      comments_template();
                    } ?>
                  </div> <!-- /.comment -->

                <?php } ?>
                <?php } ?>
              </div>
            </div> <!-- /.col-md-9 -->

            <!-- BLOG SIDEBAR -->
            <?php get_sidebar(); ?>

          </div> <!-- /.blog-list clearfix -->
        </div> <!-- /.row -->
      </div> <!-- /.container -->
    </div>
    <!-- END BLOG WRAPPER -->
  </section>

<?php get_footer(); ?>