<?php get_header(); ?>
<!-- Home -->

<div class="home">
  <div class="breadcrumbs_container">
    <div class="image_header">
      <div class="header_info">
        <div>404 Not Found</div>
        <div>お探しのページは見つかりませんでした。</div>
      </div>
    </div>
  </div>
</div>

<!-- Courses -->
<div class="courses">
  <div class="row content-body">
    <div class="footer-row">
      <div class="row">
        <div class="col-lg-12">
          <p class="title">404 Not Found</p>
          <div class="courses_container">
            <div class="courses_row">
              <p>お探しのページは見つかりませんでした。</p>
              <a href="<?php echo esc_url(home_url('/')); ?>">トップページへ</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>