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
                SPECIAL EVENT
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
            <p class="single-info-text-title">
              <?php the_field('event_title'); ?>
            </p>
            <!--記事テキストエディターを出力-->
            <?php echo the_field('event_guide');?>
            <!--リリース情報-->
              <?php if( get_field('release_info_selected',$post_id) ): ?>
                  <p class="single-release-info-heading">RELEASE INFOMATION</p>
                  <figure class="single-release-info-artwork">
                    <img src="<?php the_field('release_info_jacket') ;?>">
                  </figure>
                  <p class="single-release-info-text-label">CDタイトル</p>
                  <p class="single-release-info-text-title"><?php the_field('release_info_title');?></p>
                  <p class="single-release-info-text-label">リリース日</p>
                  <p class="single-release-info-text-lead"><?php the_field('release_info_date');?></p>
                  <p class="single-release-info-text-label">商品番号</p>
                  <p class="single-release-info-text-lead"><?php the_field('release_info_code');?></p>
                  <p class="single-release-info-text-label">CDのジャンル</p>
                  <p class="single-release-info-text-lead"><?php the_field('release_info_genre');?></p>
                <?php if( get_field('release_info_online',$post_id) ): ?>
                    <p class="single-release-info-text-label">オンラインで購入</p>
                    <div class="single-release-online-button-wrap">
                      <?php $dl_itunes = get_field('release_info_dl_link_itunes'); ?>
                        <?php if(empty($dl_itunes)):?>
                        <?php else:?>
                          <a href="<?php the_field('release_info_dl_link_itunes');?>" target="_blank" class="single-release-info-download-link">
                            <img src="<?php bloginfo('template_url'); ?>/lib/images/button-itunes.gif">
                          </a>
                      <?php endif;?>
                      <?php $dl_amazon = get_field('release_info_dl_link_amazon'); ?>
                        <?php if(empty($dl_itunes)):?>
                        <?php else:?>
                          <a href="<?php the_field('release_info_dl_link_amazon');?>" target="_blank" class="single-release-info-download-link">
                            <img src="<?php bloginfo('template_url'); ?>/lib/images/button-amazon.gif">
                          </a>
                      <?php endif;?>
                      <?php $dl_tower = get_field('release_info_dl_link_towerrecords'); ?>
                        <?php if(empty($dl_tower)):?>
                        <?php else:?>
                          <a href="<?php the_field('release_info_dl_link_towerrecords');?>" target="_blank" class="single-release-info-download-link">
                            <img src="<?php bloginfo('template_url'); ?>/lib/images/button-toweronline.gif">
                          </a>
                      <?php endif;?>
                      <?php $dl_tsutaya = get_field('release_info_dl_link_tsutaya'); ?>
                        <?php if(empty($dl_tsutaya)):?>
                        <?php else:?>
                          <a href="<?php the_field('release_info_dl_link_tsutaya');?>" target="_blank" class="single-release-info-download-link">
                            <img src="<?php bloginfo('template_url'); ?>/lib/images/button-tsutayaonline.gif">
                          </a>
                      <?php endif;?>
                    </div>
                  <?php endif; ?>
              <?php endif; ?>
            <!-- <p class="single-post-label">
              特典
            </p> -->
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>
