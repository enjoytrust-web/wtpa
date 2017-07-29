
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width,initial-scale=1">
  <!-- ビューポート設定（レスポンシブ化） -->

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/lib/css/style.css">
  <!-- スタイル -->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <!-- @@notes001 > footer.php 外部スクリプト | 自作スクリプトはfooter.phpに記載してください-->

  <title>
    BAMBI | 2017.06.02 GRAND OPEN
  </title>

  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

  <![endif]-->
  <!--[if lt IE 9]>


    <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
  <![endif]-->

  <!-- ファビコン設定 -->
    <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">
    <link rel="SHORTCUT ICON" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">

</head>
<body class="page-body">


<section class="page-mainvisual mainvisual-menu" style="background-image: url(<?php bloginfo('template_url'); ?>/lib/images/page_mainvisual_comment-movie.jpg); width: 100%; height: 530px; background-size: cover; background-position: center center;">
  <h2 class="page-section-header-light">
    MOVIE
    <span class="page-sub-header">
      BRAND NEW BAMBI 6.2.FRI GRAND OPEN
    </span>
  </h2>
</section>

<section class="section-comment-movie">
<div class="l-container">
  <div class="l-row">

  <?php
        $args = array(
          'post_type' => 'movie-custom',
          'numberposts' => -1
          ); ?>

        <?php
          $posts = get_posts( $args );
        if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post ); //記事がある場合 ?>

    <div class="l-grid-4 comment-movie-area">
      <div class="comment-movie">
        <iframe src="https://www.youtube.com/embed/<?php the_field('movie_youtube_id'); ?>?controls=0&showinfo=0&rel=0" frameborder="0"></iframe>
        <h2 class="comment-movie-title"><?php the_field('youtube_comment_title'); ?></h2>
      </div>
    </div>

         <?php endforeach; ?>
        <?php endif; wp_reset_postdata(); //クエリのリセット ?>
  </div>
</div>
</section>
<section class="l-wrapper">
  <a href="<?php bloginfo('home');?>" class="round-btn">
    BAMBI TOP
  </a>
</section>
</body>
</html>
