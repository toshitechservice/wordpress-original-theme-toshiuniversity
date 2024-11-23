<!-- sidebar-main に切り出す -->
<div class="sidebar">
  <div class="sidebar_search">
    <div class="category">
      <div class="section_title_container category_title">
        <h2>検索</h2>
        <?php get_search_form(); ?>
      </div>
    </div>
  </div>
  <div class="category">
    <div class="section_title_container category_title">
      <h2>CATEGORY</h2>
      <div class="section_subtitle">カテゴリー</div>
    </div>
    <div class="sidebar_categories">
      <ul>
        <?php
        $args = array(
          'hide_empty' => 1, //投稿があるカテゴリーのみ表示
          'title_li' => '',
        );
        wp_list_categories($args);
        ?>
      </ul>
    </div>
  </div>
  <div class="category">
    <div class="section_title_container category_title">
      <h2>Latest Post</h2>
      <div class="section_subtitle">最新記事</div>
    </div>
    <div class="sidebar_categories">
      <ul>
        <?php
        $args = array(
          'posts_per_page' => 3,
        );
        $posts = get_posts($args);
        ?>
        <?php foreach ($posts as $post): ?>
        <?php setup_postdata($post); ?>
          <li>
            <a href="<?php the_permalink(); ?>">
              <?php
              if (mb_strlen($post->post_title, 'UTF-8') > 20) {
                $title = mb_substr($post->post_title, 0, 20, 'UTF-8');
                echo $title . '……';
              } else {
                echo $post->post_title;
              }
              ?>
            </a>
          </li>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
      </ul>
    </div>
  </div>
</div>
<!-- sidebar-main ここまで -->