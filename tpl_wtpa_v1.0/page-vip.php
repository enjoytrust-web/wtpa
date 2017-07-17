<?php get_header();?>

<section class="page-mainvisual mainvisual-menu" style="background-image: url(<?php echo html_entity_decode(the_field('page_mainvisual_vip',option)); ?>)">
  <h2 class="page-section-header-light">
    VIP MENU
    <span class="page-sub-header">
      CHAMPAGNE / BOTTLE MENU
    </span>
  </h2>
</section>

<section class="l-wrapper">

<div class="l-container">
  <div class="l-row">
    <div class="l-grid-12">
      <img src="<?php bloginfo('template_url');?>/lib/images/vip.jpg">
    </div>

    <div class="l-grid-6">
    <!-- シャンパンメニュー -->
      <dl class="vip-menu-wrap">
        <dt class="drink-menu-header vip-menu-header">Champagne</dt>
        <dd class="vip-menu-list-wrap">
          <?php if(have_rows('vip_menu_repeater_champagne_a',option)): ?>
            <?php while(have_rows('vip_menu_repeater_champagne_a',option)): the_row(); ?>
              <div class="l-full vip-menu-wrapper">
                <div class="l-grid-2 vip-menu-pics">
                  <img src="<?php the_sub_field('vip_menu_pict'); ?>" alt="">
                </div>
                <div class="l-grid-10 vip-menu-text">
                  <div class="vip-menu-info-box">
                    <p class="vip-menu-brandname"><?php the_sub_field('vip_menu_brandname'); ?></p>
                    <p class="drink-name-ja"><?php the_sub_field('vip_menu_name_ja'); ?></p>
                    <p class="drink-name-en"><?php the_sub_field('vip_menu_name_en'); ?></p>
                    <p class="vip-menu-text-lead"><?php the_sub_field('vip_menu_text_lead'); ?></p>
                    <p class="vip-menu-price">&yen; <?php the_sub_field('vip_menu_price'); ?></p>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </dd>
      </dl>
    </div>

    <div class="l-grid-6">
    <!-- シャンパンメニュー -->
      <dl class="vip-menu-wrap">
        <dt class="drink-menu-header vip-menu-header">Champagne</dt>
        <dd class="vip-menu-list-wrap">
          <?php if(have_rows('vip_menu_repeater_champagne_b',option)): ?>
            <?php while(have_rows('vip_menu_repeater_champagne_b',option)): the_row(); ?>
              <div class="l-full vip-menu-wrapper">
                <div class="l-grid-2 vip-menu-pics">
                  <img src="<?php the_sub_field('vip_menu_pict'); ?>" alt="">
                </div>
                <div class="l-grid-10 vip-menu-text">
                  <div class="vip-menu-info-box">
                    <p class="vip-menu-brandname"><?php the_sub_field('vip_menu_brandname'); ?></p>
                    <p class="drink-name-ja"><?php the_sub_field('vip_menu_name_ja'); ?></p>
                    <p class="drink-name-en"><?php the_sub_field('vip_menu_name_en'); ?></p>
                    <p class="vip-menu-text-lead"><?php the_sub_field('vip_menu_text_lead'); ?></p>
                    <p class="vip-menu-price">&yen; <?php the_sub_field('vip_menu_price'); ?></p>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </dd>
      </dl>
    </div>

    <div class="l-grid-12">

    <!-- ワイン -->
      <dl class="drink-menu-wrap">
        <dt class="drink-menu-header">WINE</dt>
        <dd class="drink-menu-list-wrap">
          <?php if(have_rows('vip_menu_repeater_wine',option)): ?>
            <?php while(have_rows('vip_menu_repeater_wine',option)): the_row(); ?>
              <div class="drink-menu-list">
                <p class="drink-name-ja"><?php the_sub_field('vip_menu_name_ja'); ?></p>
                <p class="drink-price">&yen;<?php the_sub_field('vip_menu_price'); ?></p>
                <p class="drink-name-en"><?php the_sub_field('vip_menu_name_en'); ?></p>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </dd>
      </dl>

      <!-- スパークリングワイン -->
        <dl class="drink-menu-wrap">
          <dt class="drink-menu-header">Sparkling Wine</dt>
          <dd class="drink-menu-list-wrap">
            <?php if(have_rows('vip_menu_repeater_sparklingwine',option)): ?>
              <?php while(have_rows('vip_menu_repeater_sparklingwine',option)): the_row(); ?>
                <div class="drink-menu-list">
                  <p class="drink-name-ja"><?php the_sub_field('vip_menu_name_ja'); ?></p>
                  <p class="drink-price">&yen;<?php the_sub_field('vip_menu_price'); ?></p>
                  <p class="drink-name-en"><?php the_sub_field('vip_menu_name_en'); ?></p>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
          </dd>
        </dl>
    <!-- VODKA -->
        <dl class="drink-menu-wrap">
          <dt class="drink-menu-header">Sparkling Wine</dt>
          <dd class="drink-menu-list-wrap">
            <?php if(have_rows('vip_menu_repeater_vodka',option)): ?>
              <?php while(have_rows('vip_menu_repeater_vodka',option)): the_row(); ?>
                <div class="drink-menu-list">
                  <p class="drink-name-ja"><?php the_sub_field('vip_menu_name_ja'); ?></p>
                  <p class="drink-price">&yen;<?php the_sub_field('vip_menu_price'); ?></p>
                  <p class="drink-name-en"><?php the_sub_field('vip_menu_name_en'); ?></p>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
          </dd>
        </dl>
    </div>

    </div>
  </div>
</section>
<?php get_footer();?>