<?php get_header(); ?>

<section class="page-mainvisual mainvisual-menu" style="background-image: url(<?php echo html_entity_decode(the_field('page_mainvisual_schedule',option)); ?>)">
  <h2 class="page-section-header-light">
    EVENT SCHEDULE
    <span class="page-sub-header">
      REGULAR EVENT INFO
    </span>
  </h2>
</section>

<section class="l-wrapper">

  <div class="l-container">
    <div class="l-row content-schedule-list">
      <div class="l-grid-4 reg_ev_logo_wrap ">
        <img src="<?php echo get_field('reg_ev_pouch_mon',option); ?>">
      </div>
      <div class="l-grid-8">
            <p class="single-info-text-title">MON</p>
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
      </div>
    </div>
    <div class="l-row content-schedule-list">
      <div class="l-grid-4 reg_ev_logo_wrap">
        <img src="<?php echo get_field('reg_ev_pouch_tue',option); ?>">
      </div>
      <div class="l-grid-8">
            <p class="single-info-text-title">TUE</p>
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
      </div>
    </div>
    <div class="l-row content-schedule-list">
      <div class="l-grid-4 reg_ev_logo_wrap">
        <img src="<?php echo get_field('reg_ev_pouch_wed',option); ?>">
      </div>
      <div class="l-grid-8">
            <p class="single-info-text-title">WED</p>
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
      </div>
    </div>
    <div class="l-row content-schedule-list">
      <div class="l-grid-4 reg_ev_logo_wrap">
        <img src="<?php echo get_field('reg_ev_pouch_thu',option); ?>">
      </div>
      <div class="l-grid-8">
            <p class="single-info-text-title">THU</p>
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
      </div>
    </div>
    <div class="l-row content-schedule-list">
      <div class="l-grid-4 reg_ev_logo_wrap">
        <img src="<?php echo get_field('reg_ev_pouch_fri',option); ?>">
      </div>
      <div class="l-grid-8">
            <p class="single-info-text-title">FRI</p>
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
      </div>
    </div>
    <div class="l-row content-schedule-list">
      <div class="l-grid-4 reg_ev_logo_wrap">
        <img src="<?php echo get_field('reg_ev_pouch_sat',option); ?>">
      </div>
      <div class="l-grid-8">
            <p class="single-info-text-title">SAT</p>
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
      </div>
    </div>
    <div class="l-row content-schedule-list">
      <div class="l-grid-4 reg_ev_logo_wrap">
        <img src="<?php echo get_field('reg_ev_pouch_sun',option); ?>">
      </div>
      <div class="l-grid-8">
            <p class="single-info-text-title">SUN</p>
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
      </div>
    </div>
  </div>

</section>
<section class="l-wrapper">
  <a href="<?php bloginfo('home');?>" class="round-btn">
    BAMBI TOP
  </a>
</section>
<?php get_footer();?>