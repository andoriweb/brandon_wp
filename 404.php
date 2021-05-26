<?php
  /*
    The template for displaying 404 pages (not found)
  */
?>

<?php get_header('blog'); ?>

      <div class="content_head">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="content_head_txt">
                <p>404</p>
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="content_bottom_txt">
                <p>Такой страницы не существует!</p>
              </div>
            </div>
          </div><!-- end row -->
        </div><!-- end container -->
      </div>
    </div>
  </header>
    <!-- End Header Section -->

  <section class="blog-section blog-single-bg">
    <div class="col-12">
      <div class="container">
        <?php get_sidebar(); ?>
      
      </div>
    </div>
  </section>

<?php get_footer(); ?>