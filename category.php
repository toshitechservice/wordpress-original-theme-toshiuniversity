<?php get_header(); ?>
    <!-- Home -->

    <div class="home">
      <div class="breadcrumbs_container">
        <div class="image_header">
          <div class="header_info">
            <?php
            $cat = get_the_category();
            $catslug = $cat[0]->slug;
            $catname = $cat[0]->name;
            ?>
            <div><?php echo $catslug; ?></div>
            <div><?php echo $catname; ?></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Course -->

    <div class="course">
      <div class="row">   <!-- content_bodyを子要素のdivへ移動した -->
        <!-- Course -->
        <div class="col-lg-8 content-body">
          <!-- Course Tabs -->
          <div class="course_tabs_container">
            <div class="tab_panels">
              <!-- Description -->
              <div class="tab_panel">
                <div class="tab_panel_title"><?php echo $catname; ?></div>
                <div class="tab_panel_content">
                  <div class="tab_panel_text">
                    <!-- news loop from here-->
                    <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post(); ?>
                    <div class="news_posts_small">
                      <div class="row">
                        <div class="col-lg-2 col-md-2 col-sx-12">
                          <div class="calendar_news_border">
                            <div class="calendar_news_border_1">
                              <div class="calendar_month">
                                <?php 
                                if(is_category('event')){
                                  echo post_custom('month');
                                } else {
                                  echo get_post_time('F');
                                }
                                ?>
                              </div>
                              <div class="calendar_day">
                                <span>
                                  <?php
                                  if(is_category('event')){
                                    echo post_custom('day');
                                  } else {
                                    echo get_the_date('d');
                                  }
                                  ?>
                                </span>
                              </div>
                            </div>
                          </div>
                          <?php if(is_category('event')): ?>
                          <div class="calendar_hour"><?php echo post_custom('time'); ?></div>
                          <?php endif; ?>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sx-12">
                          <div class="news_post_small_title">
                            <a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
                          </div>
                          <div class="news_post_meta">
                            <ul>
                              <li>
                                <?php echo wp_trim_words( get_the_content(), 100, '...' ); ?>
                              </li>
                            </ul>
                          </div>
                          <div class="read_continue">
                            <button class="btn btn-primary" onclick="location.href='<?php the_permalink(); ?>'">詳細を見る</button>
                          </div>
                        </div>
                      </div>
                      <hr />
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <!-- news loop until here-->
                    
                    <div class="news-pagination">
                      <?php
                      echo paginate_links(array(
                        'total' => $wp_query->max_num_pages,
                        'prev_text' => '&lt;&lt;前へ',
                        'next_text' => '次へ&gt;&gt;',
                      ));
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Course Sidebar -->
        <div class="col-lg-4" style="background-color: #2b7b8e33">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>

<?php get_footer(); ?>