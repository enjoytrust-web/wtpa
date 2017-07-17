<?php get_header(); ?>
<body class="page-body">

  <div class="single-post">
    <figure class="single-post-mainvisual fadeIn">
      <div class="responsive-image responsive-image-pc" style="background-image:url('<?php the_field('responsiveimage_pc'); ?>');"></div>
      <div class="responsive-image responsive-image-sp" style="background-image:url('<?php the_field('responsiveimage_mobile'); ?>');"></div>
    </figure>
    <section class="l-wrapper">
      <div class="l-container">
        <div class="l-row">
          <div class="l-grid-12">
            <dl class="single-heading-text">
              <dt class="single-heading-text-category">
                CAMPAIGN / SERVICES
              </dt>
              <dd class="single-heading-text-date">
                <!-- 日付の取得 -->
                <?php the_field('date_start');?>
                <!-- 曜日別の表示 -->
                <?php if (is_object_in_term($post->ID,'guestevents-custom_category',ev_day_mon)): ?><!--月曜日の場合-->
                  MON
                  <?php elseif (is_object_in_term($post->ID,'guestevents-custom_category',ev_day_tue)): ?><!--火曜日の場合-->
                    TUE
                  <?php elseif (is_object_in_term($post->ID,'guestevents-custom_category',ev_day_wed)): ?><!--水曜日の場合-->
                    WED
                  <?php elseif (is_object_in_term($post->ID,'guestevents-custom_category',ev_day_thu)): ?><!--木曜日の場合-->
                    THU
                  <?php elseif (is_object_in_term($post->ID,'guestevents-custom_category',ev_day_fri)): ?><!--金曜日の場合-->
                    FRI
                  <?php elseif (is_object_in_term($post->ID,'guestevents-custom_category',ev_day_sat)): ?><!--土曜日の場合-->
                    SAT
                  <?php elseif (is_object_in_term($post->ID,'guestevents-custom_category',ev_day_sun)): ?><!--日曜日の場合-->
                    SUN
                <?php endif; ?>
              </dd>
            </dl>
            <h3 class="single-post-header">
              <?php the_field('event_title'); ?>
            </h3>
            <!--記事テキストエディターを出力-->
            <?php echo the_field('event_guide');?>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php get_footer(); ?>