<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="format-detection" content="telephone=no">
  <!-- スマートフォン 電話番号自動リンクを切る設定 -->


  <meta name="viewport" content="width=device-width,initial-scale=1">
  <!-- ビューポート設定（レスポンシブ化） -->

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/lib/css/style.css">
  <!-- スタイル -->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <title>
    WHERE THE PARTY AT?
  </title>
  <!-- metadata -->
  <meta name="keywords" content="WHERE THE PARTY AT?">
  <meta name="description" content="WHERE THE PARTY AT?">

  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

  <![endif]-->
  <!--[if lt IE 9]>
    <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
  <![endif]-->

  <!-- ファビコン設定 -->
    <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/lib/images/favicon.ico">
    <link rel="SHORTCUT ICON" href="<?php bloginfo('template_url'); ?>/lib/images/favicon.ico">
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/lib/images/favicon.ico">

  <!-- Google Font Settings -->
    <link href="https://fonts.googleapis.com/css?family=Yantramanav:100,300,400" rel="stylesheet">
</head>
<body class="page-body">

<header class="l-header">

  <div class="mainvisual-inbox">
    <h1 class="sitename">
      WHERE THE PARTY AT?
      <span class="subcatch">by MAINFLOOR.JP</span>
    </h1>
    <div class="l-container timestomp">
      <div class="l-row">
        <div class="l-grid-4 header-time-box">
          <span class="header-time-wrap">
            <p class="header-time">
              <?php echo date("m"); ?>
            </p>
          </span>
        </div>
        <div class="l-grid-4 header-time-box">
          <span class="header-time-wrap">
            <p class="header-time">
              <?php echo date("d"); ?>
            </p>
          </span>
        </div>
        <div class="l-grid-4 header-time-box">
          <span class="header-time-wrap">
            <p class="header-time">
              <?php echo date("D"); ?>
            </p>
          </span>
        </div>
      </div>
    </div>
    <h2 class="todayspartylist">
      TODAY'S PARTY LIST
    </h2>
    <div class="arrow-bottom"></div>
  </div>
  <div class="mainvisual-screen"></div>

</header>

<?php wp_head(); ?>