<?php get_header();?>
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
                SPECIAL GUEST EVENT
              </dt>
              <dd class="single-heading-text-date">
                <!-- 日付の取得 -->
                <?php the_field('date_start');?>
                <!-- 曜日別の表示 -->
                <?php if (is_object_in_term($post->ID,'guestevents-custom_category',ev_day_mon)): ?>
                  MON
                <?php endif; ?>
                <?php if (is_object_in_term($post->ID,'guestevents-custom_category',ev_day_tue)): ?>
                  TUE
                <?php endif; ?>
                <?php if (is_object_in_term($post->ID,'guestevents-custom_category',ev_day_wed)): ?>
                  WED
                <?php endif; ?>
                <?php if (is_object_in_term($post->ID,'guestevents-custom_category',ev_day_thu)): ?>
                  THU
                <?php endif; ?>
                <?php if (is_object_in_term($post->ID,'guestevents-custom_category',ev_day_fri)): ?>
                  FRI
                <?php endif; ?>
                <?php if (is_object_in_term($post->ID,'guestevents-custom_category',ev_day_sat)): ?>
                  SAT
                <?php endif; ?>
                <?php if (is_object_in_term($post->ID,'guestevents-custom_category',ev_day_sun)): ?>
                  SUN
                <?php endif; ?>
              </dd>
            </dl>
            <p class="single-info-text-title">
              <?php the_field('event_title'); ?>
            </p>
            <p class="single-info-text-label">
              SPECIAL GUEST
            </p>
            <p class="single-info-text-lead">
              <?php the_field('specialguest_name');?>
            </p>
            <!--記事テキストエディターを出力 // タグで囲わない！！！！-->
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
                        <?php if(empty($dl_amazon)):?>
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

          <!-- <p class="single-info-text-notes">
            *注意書きなどを書いていきます。
          </p>
          <p class="single-info-text-notes">
            *カスタムフィールドで回します。ACFPROのリピーターフィールドです。
          </p>
          <p class="single-info-text-notes">
            *注意書きなどを書いていきます。
          </p>

          <p class="single-info-text-label single-info-text-label-male">
            男性特典
          </p>
          <p class="single-info-text-lead">
            ・スーツ着用のうえご来店で＋1ドリンクプレゼント
          </p>

          <p class="single-info-text-label single-info-text-label-female">
            女性特典
          </p>
          <p class="single-info-text-lead">
            ・完全入場無料
          </p>
          <p class="single-info-text-lead">
            ・オリジナルカクテル飲み放題
          </p>
          <p class="single-info-text-notes">
            *数に限りがございます。
          </p> -->

          <!-- <p class="single-info-text-label">
            SPECIAL GUEST
          </p>
          <p class="single-info-text-lead">
            <?php the_field('specialguest_name');?> from TRF
          </p> -->
          <!-- レギュラーイベント情報 -->
              <p class="single-info-text-subtitle">
                REGULAR EVENT
              </p>
            </div>

            <div class="l-grid-6">
            <!--月曜イベントだった場合-->
            <?php if (is_object_in_term($post->ID,'guestevents-custom_category',ev_day_mon)): ?>
              <div class="single-info-regular-logo">
                <figure style="background-image:url('<?php echo get_field('reg_ev_pouch_mon',option);?>');" alt="" class="single-info-regular-logo-pics"></figure>
              </div>
              <!-- ジャンルに記入があった場合 -->
              <?php if(get_field('reg_ev_genre_mon',option)): ?>
                <p class="single-info-text-label">
                  GENRE
                </p>
                <p class="single-info-text-lead">
                  <?php echo get_field('reg_ev_genre_mon',option);?>
                </p>
              <?php endif; ?>
              <p class="single-info-text-label">
                EVENT INFO
              </p>
              <p class="single-info-text-lead">
                <?php echo get_field('reg_ev_notes_mon',option);?>
              </p>
              <!-- メインDJに記入があった場合 -->
              <?php if(get_field('reg_ev_maindj_mon',option)): ?>
                <p class="single-info-text-label">
                  MAIN DJ
                </p>
                <p class="single-info-text-lead">
                  <?php echo get_field('reg_ev_maindj_mon',option);?>
                </p>
              <?php endif; ?>
              <!-- レギュラーDJに記入があった場合 -->
              <?php if(get_field('reg_ev_djs_mon',option)): ?>
                <p class="single-info-text-label">
                  REGULAR DJ
                </p>
                <p class="single-info-text-lead">
                  <?php echo get_field('reg_ev_djs_mon',option);?>
                </p>
              <?php endif; ?>
              <!-- MCに記入があった場合 -->
              <?php if(get_field('reg_ev_mc_mon',option)): ?>
                <p class="single-info-text-label">
                  MC
                </p>
                <p class="single-info-text-lead">
                  <?php echo get_field('reg_ev_mc_mon',option);?>
                </p>
              <?php endif; ?>
              <?php if(get_field('reg_ev_dancer_mon',option)): ?>
                <p class="single-info-text-label">
                  DANCER
                </p>
                <p class="single-info-text-lead">
                  <?php echo get_field('reg_ev_dancer_mon',option);?>
                </p>
              <?php endif; ?>
              <?php if(get_field('reg_ev_promoter_mon',option)): ?>
                <p class="single-info-text-label">
                  PROMOTER
                </p>
                <p class="single-info-text-lead">
                  <?php echo get_field('reg_ev_promoter_mon',option);?>
                </p>
              <?php endif; ?>
            <?php endif; ?>

            <!--火曜イベントだった場合-->
            <?php if (is_object_in_term($post->ID,'guestevents-custom_category',ev_day_tue)): ?>
              <div class="single-info-regular-logo">
                <figure style="background-image:url('<?php echo get_field('reg_ev_pouch_tue',option);?>');" alt="" class="single-info-regular-logo-pics"></figure>
              </div>
                <!-- ジャンルに記入があった場合 -->
                <?php if(get_field('reg_ev_genre_tue',option)): ?>
                  <p class="single-info-text-label">
                    GENRE
                  </p>
                  <p class="single-info-text-lead">
                    <?php echo get_field('reg_ev_genre_tue',option);?>
                  </p>
                <?php endif; ?>
                <p class="single-info-text-label">
                  EVENT INFO
                </p>
                <p class="single-info-text-lead">
                  <?php echo get_field('reg_ev_notes_tue',option);?>
                </p>
                <!-- メインDJに記入があった場合 -->
                <?php if(get_field('reg_ev_maindj_tue',option)): ?>
                  <p class="single-info-text-label">
                    MAIN DJ
                  </p>
                  <p class="single-info-text-lead">
                    <?php echo get_field('reg_ev_maindj_tue',option);?>
                  </p>
                <?php endif; ?>
                <!-- レギュラーDJに記入があった場合 -->
                <?php if(get_field('reg_ev_djs_tue',option)): ?>
                  <p class="single-info-text-label">
                    REGULAR DJ
                  </p>
                  <p class="single-info-text-lead">
                    <?php echo get_field('reg_ev_djs_tue',option);?>
                  </p>
                <?php endif; ?>
                <!-- MCに記入があった場合 -->
                <?php if(get_field('reg_ev_mc_tue',option)): ?>
                  <p class="single-info-text-label">
                    MC
                  </p>
                  <p class="single-info-text-lead">
                    <?php echo get_field('reg_ev_mc_tue',option);?>
                  </p>
                <?php endif; ?>
                <?php if(get_field('reg_ev_dancer_tue',option)): ?>
                  <p class="single-info-text-label">
                    DANCER
                  </p>
                  <p class="single-info-text-lead">
                    <?php echo get_field('reg_ev_dancer_tue',option);?>
                  </p>
                <?php endif; ?>
                <?php if(get_field('reg_ev_promoter_tue',option)): ?>
                  <p class="single-info-text-label">
                    PROMOTER
                  </p>
                  <p class="single-info-text-lead">
                    <?php echo get_field('reg_ev_promoter_tue',option);?>
                  </p>
                <?php endif; ?>
            <?php endif; ?>

            <!--水曜イベントだった場合-->
            <?php if (is_object_in_term($post->ID,'guestevents-custom_category',ev_day_wed)): ?>
              <div class="single-info-regular-logo">
                <figure style="background-image:url('<?php echo get_field('reg_ev_pouch_wed',option);?>');" alt="" class="single-info-regular-logo-pics"></figure>
              </div>
                <!-- ジャンルに記入があった場合 -->
                <?php if(get_field('reg_ev_genre_wed',option)): ?>
                  <p class="single-info-text-label">
                    GENRE
                  </p>
                  <p class="single-info-text-lead">
                    <?php echo get_field('reg_ev_genre_wed',option);?>
                  </p>
                <?php endif; ?>
                <p class="single-info-text-label">
                  EVENT INFO
                </p>
                <p class="single-info-text-lead">
                  <?php echo get_field('reg_ev_notes_wed',option);?>
                </p>
                <!-- メインDJに記入があった場合 -->
                <?php if(get_field('reg_ev_maindj_wed',option)): ?>
                  <p class="single-info-text-label">
                    MAIN DJ
                  </p>
                  <p class="single-info-text-lead">
                    <?php echo get_field('reg_ev_maindj_wed',option);?>
                  </p>
                <?php endif; ?>
                <!-- レギュラーDJに記入があった場合 -->
                <?php if(get_field('reg_ev_djs_wed',option)): ?>
                  <p class="single-info-text-label">
                    REGULAR DJ
                  </p>
                  <p class="single-info-text-lead">
                    <?php echo get_field('reg_ev_djs_wed',option);?>
                  </p>
                <?php endif; ?>
                <!-- MCに記入があった場合 -->
                <?php if(get_field('reg_ev_mc_wed',option)): ?>
                  <p class="single-info-text-label">
                    MC
                  </p>
                  <p class="single-info-text-lead">
                    <?php echo get_field('reg_ev_mc_wed',option);?>
                  </p>
                <?php endif; ?>
                <?php if(get_field('reg_ev_dancer_wed',option)): ?>
                  <p class="single-info-text-label">
                    DANCER
                  </p>
                  <p class="single-info-text-lead">
                    <?php echo get_field('reg_ev_dancer_wed',option);?>
                  </p>
                <?php endif; ?>
                <?php if(get_field('reg_ev_promoter_wed',option)): ?>
                  <p class="single-info-text-label">
                    PROMOTER
                  </p>
                  <p class="single-info-text-lead">
                    <?php echo get_field('reg_ev_promoter_wed',option);?>
                  </p>
                <?php endif; ?>
            <?php endif; ?>


            <!--木曜イベントだった場合-->
            <?php if (is_object_in_term($post->ID,'guestevents-custom_category',ev_day_thu)): ?>
              <div class="single-info-regular-logo">
                <figure style="background-image:url('<?php echo get_field('reg_ev_pouch_thu',option);?>');" alt="" class="single-info-regular-logo-pics"></figure>
              </div>
              <!-- ジャンルに記入があった場合 -->
              <?php if(get_field('reg_ev_genre_thu',option)): ?>
                <p class="single-info-text-label">
                  GENRE
                </p>
                <p class="single-info-text-lead">
                  <?php echo get_field('reg_ev_genre_thu',option);?>
                </p>
              <?php endif; ?>
              <p class="single-info-text-label">
                EVENT INFO
              </p>
              <p class="single-info-text-lead">
                <?php echo get_field('reg_ev_notes_thu',option);?>
              </p>
              <!-- メインDJに記入があった場合 -->
              <?php if(get_field('reg_ev_maindj_thu',option)): ?>
                <p class="single-info-text-label">
                  MAIN DJ
                </p>
                <p class="single-info-text-lead">
                  <?php echo get_field('reg_ev_maindj_thu',option);?>
                </p>
              <?php endif; ?>
              <!-- レギュラーDJに記入があった場合 -->
              <?php if(get_field('reg_ev_djs_thu',option)): ?>
                <p class="single-info-text-label">
                  REGULAR DJ
                </p>
                <p class="single-info-text-lead">
                  <?php echo get_field('reg_ev_djs_thu',option);?>
                </p>
              <?php endif; ?>

              <!-- MCに記入があった場合 -->
              <?php if(get_field('reg_ev_mc_thu',option)): ?>
                <p class="single-info-text-label">
                  MC
                </p>
                <p class="single-info-text-lead">
                  <?php echo get_field('reg_ev_mc_thu',option);?>
                </p>
              <?php endif; ?>
              <?php if(get_field('reg_ev_dancer_thu',option)): ?>
                <p class="single-info-text-label">
                  DANCER
                </p>
                <p class="single-info-text-lead">
                  <?php echo get_field('reg_ev_dancer_thu',option);?>
                </p>
              <?php endif; ?>
              <?php if(get_field('reg_ev_promoter_thu',option)): ?>
                <p class="single-info-text-label">
                  PROMOTER
                </p>
                <p class="single-info-text-lead">
                  <?php echo get_field('reg_ev_promoter_thu',option);?>
                </p>
              <?php endif; ?>
            <?php endif; ?>

            <!--金曜イベントだった場合-->
            <?php if (is_object_in_term($post->ID,'guestevents-custom_category',ev_day_fri)): ?>
              <div class="single-info-regular-logo">
                <figure style="background-image:url('<?php echo get_field('reg_ev_pouch_fri',option);?>');" alt="" class="single-info-regular-logo-pics"></figure>
              </div>
              <!-- ジャンルに記入があった場合 -->
              <?php if(get_field('reg_ev_genre_fri',option)): ?>
                <p class="single-info-text-label">
                  GENRE
                </p>
                <p class="single-info-text-lead">
                  <?php echo get_field('reg_ev_genre_fri',option);?>
                </p>
              <?php endif; ?>
              <p class="single-info-text-label">
                EVENT INFO
              </p>
              <p class="single-info-text-lead">
                <?php echo get_field('reg_ev_notes_fri',option);?>
              </p>
              <!-- メインDJに記入があった場合 -->
              <?php if(get_field('reg_ev_maindj_fri',option)): ?>
                <p class="single-info-text-label">
                  MAIN DJ
                </p>
                <p class="single-info-text-lead">
                  <?php echo get_field('reg_ev_maindj_fri',option);?>
                </p>
              <?php endif; ?>
              <!-- レギュラーDJに記入があった場合 -->
              <?php if(get_field('reg_ev_djs_fri',option)): ?>
                <p class="single-info-text-label">
                  REGULAR DJ
                </p>
                <p class="single-info-text-lead">
                  <?php echo get_field('reg_ev_djs_fri',option);?>
                </p>
              <?php endif; ?>
              <!-- MCに記入があった場合 -->
              <?php if(get_field('reg_ev_mc_fri',option)): ?>
                <p class="single-info-text-label">
                  MC
                </p>
                <p class="single-info-text-lead">
                  <?php echo get_field('reg_ev_mc_fri',option);?>
                </p>
              <?php endif; ?>
              <?php if(get_field('reg_ev_dancer_fri',option)): ?>
                <p class="single-info-text-label">
                  DANCER
                </p>
                <p class="single-info-text-lead">
                  <?php echo get_field('reg_ev_dancer_fri',option);?>
                </p>
              <?php endif; ?>
              <?php if(get_field('reg_ev_promoter_fri',option)): ?>
                <p class="single-info-text-label">
                  PROMOTER
                </p>
                <p class="single-info-text-lead">
                  <?php echo get_field('reg_ev_promoter_fri',option);?>
                </p>
              <?php endif; ?>
            <?php endif; ?>

              <!--土曜イベントだった場合-->
              <?php if (is_object_in_term($post->ID,'guestevents-custom_category',ev_day_sat)): ?>
              <div class="single-info-regular-logo">
                <figure style="background-image:url('<?php echo get_field('reg_ev_pouch_sat',option);?>');" alt="" class="single-info-regular-logo-pics"></figure>
              </div>
              <!-- ジャンルに記入があった場合 -->
              <?php if(get_field('reg_ev_genre_sat',option)): ?>
                <p class="single-info-text-label">
                  GENRE
                </p>
                <p class="single-info-text-lead">
                  <?php echo get_field('reg_ev_genre_sat',option);?>
                </p>
              <?php endif; ?>
                <p class="single-info-text-label">
                  EVENT INFO
                </p>
                <p class="single-info-text-lead">
                  <?php echo get_field('reg_ev_notes_sat',option);?>
                </p>

              <!-- メインDJに記入があった場合 -->
              <?php if(get_field('reg_ev_maindj_sat',option)): ?>
                <p class="single-info-text-label">
                  MAIN DJ
                </p>
                <p class="single-info-text-lead">
                  <?php echo get_field('reg_ev_maindj_sat',option);?>
                </p>
              <?php endif; ?>

              <!-- レギュラーDJに記入があった場合 -->
              <?php if(get_field('reg_ev_djs_sat',option)): ?>
                <p class="single-info-text-label">
                  REGULAR DJ
                </p>
                <p class="single-info-text-lead">
                  <?php echo get_field('reg_ev_djs_sat',option);?>
                </p>
              <?php endif; ?>

              <!-- MCに記入があった場合 -->
              <?php if(get_field('reg_ev_mc_sat',option)): ?>
                <p class="single-info-text-label">
                  MC
                </p>
                <p class="single-info-text-lead">
                  <?php echo get_field('reg_ev_mc_sat',option);?>
                </p>
              <?php endif; ?>
              <?php if(get_field('reg_ev_dancer_sat',option)): ?>
                <p class="single-info-text-label">
                  DANCER
                </p>
                <p class="single-info-text-lead">
                  <?php echo get_field('reg_ev_dancer_sat',option);?>
                </p>
              <?php endif; ?>
              <?php if(get_field('reg_ev_promoter_sat',option)): ?>
                <p class="single-info-text-label">
                  PROMOTER
                </p>
                <p class="single-info-text-lead">
                  <?php echo get_field('reg_ev_promoter_sat',option);?>
                </p>
              <?php endif; ?>
            <?php endif; ?>

            <!--日曜イベントだった場合-->
            <?php if (is_object_in_term($post->ID,'guestevents-custom_category',ev_day_sun)): ?>
            <div class="single-info-regular-logo">
                <figure style="background-image:url('<?php echo get_field('reg_ev_pouch_sun',option);?>');" alt="" class="single-info-regular-logo-pics"></figure>
              </div>
            <!-- ジャンルに記入があった場合 -->
            <?php if(get_field('reg_ev_genre_sun',option)): ?>
              <p class="single-info-text-label">
                GENRE
              </p>
              <p class="single-info-text-lead">
                <?php echo get_field('reg_ev_genre_sun',option);?>
              </p>
            <?php endif; ?>
            <p class="single-info-text-label">
              EVENT INFO
            </p>
            <p class="single-info-text-lead">
              <?php echo get_field('reg_ev_notes_sun',option);?>
            </p>

            <!-- メインDJに記入があった場合 -->
            <?php if(get_field('reg_ev_maindj_sun',option)): ?>
              <p class="single-info-text-label">
                MAIN DJ
              </p>
              <p class="single-info-text-lead">
                <?php echo get_field('reg_ev_maindj_sun',option);?>
              </p>
            <?php endif; ?>

            <!-- レギュラーDJに記入があった場合 -->
            <?php if(get_field('reg_ev_djs_sun',option)): ?>
              <p class="single-info-text-label">
                REGULAR DJ
              </p>
              <p class="single-info-text-lead">
                <?php echo get_field('reg_ev_djs_sun',option);?>
              </p>
            <?php endif; ?>

            <!-- MCに記入があった場合 -->
            <?php if(get_field('reg_ev_mc_sun',option)): ?>
              <p class="single-info-text-label">
                MC
              </p>
              <p class="single-info-text-lead">
                <?php echo get_field('reg_ev_mc_sun',option);?>
              </p>
            <?php endif; ?>
            <?php if(get_field('reg_ev_dancer_sun',option)): ?>
              <p class="single-info-text-label">
                DANCER
              </p>
              <p class="single-info-text-lead">
                <?php echo get_field('reg_ev_dancer_sun',option);?>
              </p>
            <?php endif; ?>
            <?php if(get_field('reg_ev_promoter_sun',option)): ?>
              <p class="single-info-text-label">
                PROMOTER
              </p>
              <p class="single-info-text-lead">
                <?php echo get_field('reg_ev_promoter_sun',option);?>
              </p>
            <?php endif; ?>
          <?php endif; ?>
        </div><!--l-grid-->
      </div><!--l-row-->
    </div><!-- l-container -->
  </div><!-- single-post -->
<?php get_footer();?>