<?php get_header();?>

<section class="page-mainvisual mainvisual-menu" style="background-image: url(<?php echo html_entity_decode(the_field('page_mainvisual_menu',option)); ?>)">
  <h2 class="page-section-header-light">
    GRAND MENU
    <span class="page-sub-header">
      DRINK / FOOD / SETMENU
    </span>
  </h2>
</section>

<section class="l-wrapper">

<div class="l-container">
  <div class="l-row">

    <div class="l-grid-4">
    <!-- リキュールベース -->
      <dl class="drink-menu-wrap">
        <dt class="drink-menu-header">LIQUEUR BASE(Cocktail)</dt>
        <dd class="drink-menu-list-wrap">
          <?php if(have_rows('liqueurbase_menu_repeat',option)): ?>
            <?php while(have_rows('liqueurbase_menu_repeat',option)): the_row(); ?>
              <div class="drink-menu-list">
                <p class="drink-name-ja"><?php the_sub_field('drink_name_ja'); ?></p>
                <p class="drink-price">&yen;<?php the_sub_field('drink_price'); ?></p>
                <p class="drink-name-en"><?php the_sub_field('drink_name_en'); ?></p>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </dd>
      </dl>
    <!-- ジンベース -->
      <dl class="drink-menu-wrap">
        <dt class="drink-menu-header">GIN BASE(Cocktail)</dt>
        <dd class="drink-menu-list-wrap">
          <?php if(have_rows('ginbase_menu_repeat',option)): ?>
            <?php while(have_rows('ginbase_menu_repeat',option)): the_row(); ?>
              <div class="drink-menu-list">
                <p class="drink-name-ja"><?php the_sub_field('drink_name_ja'); ?></p>
                <p class="drink-price">&yen;<?php the_sub_field('drink_price'); ?></p>
                <p class="drink-name-en"><?php the_sub_field('drink_name_en'); ?></p>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </dd>
      </dl>

    <!-- テキーラベース -->
      <dl class="drink-menu-wrap">
        <dt class="drink-menu-header">TEQUILA BASE(Cocktail)</dt>
        <dd class="drink-menu-list-wrap">
          <?php if(have_rows('tequilabase_menu_repeat',option)): ?>
            <?php while(have_rows('tequilabase_menu_repeat',option)): the_row(); ?>
              <div class="drink-menu-list">
                <p class="drink-name-ja"><?php the_sub_field('drink_name_ja'); ?></p>
                <p class="drink-price">&yen;<?php the_sub_field('drink_price'); ?></p>
                <p class="drink-name-en"><?php the_sub_field('drink_name_en'); ?></p>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </dd>
      </dl>
    <!-- ウォッカベース -->
      <dl class="drink-menu-wrap">
        <dt class="drink-menu-header">VODKA BASE(Cocktail)</dt>
        <dd class="drink-menu-list-wrap">
          <?php if(have_rows('vodkabase_menu_repeat',option)): ?>
            <?php while(have_rows('vodkabase_menu_repeat',option)): the_row(); ?>
              <div class="drink-menu-list">
                <p class="drink-name-ja"><?php the_sub_field('drink_name_ja'); ?></p>
                <p class="drink-price">&yen;<?php the_sub_field('drink_price'); ?></p>
                <p class="drink-name-en"><?php the_sub_field('drink_name_en'); ?></p>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </dd>
      </dl>
    </div>

    <div class="l-grid-4">

    <!-- ウイスキーベース -->
      <dl class="drink-menu-wrap">
        <dt class="drink-menu-header">WHISKY BASE(Cocktail)</dt>
        <dd class="drink-menu-list-wrap">
          <?php if(have_rows('whiskybase_menu_repeat',option)): ?>
            <?php while(have_rows('whiskybase_menu_repeat',option)): the_row(); ?>
              <div class="drink-menu-list">
                <p class="drink-name-ja"><?php the_sub_field('drink_name_ja'); ?></p>
                <p class="drink-price">&yen;<?php the_sub_field('drink_price'); ?></p>
                <p class="drink-name-en"><?php the_sub_field('drink_name_en'); ?></p>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </dd>
      </dl>
    <!-- ラムベース -->
      <dl class="drink-menu-wrap">
        <dt class="drink-menu-header">RUM BASE(Cocktail)</dt>
        <dd class="drink-menu-list-wrap">
          <?php if(have_rows('rumbase_menu_repeat',option)): ?>
            <?php while(have_rows('rumbase_menu_repeat',option)): the_row(); ?>
              <div class="drink-menu-list">
                <p class="drink-name-ja"><?php the_sub_field('drink_name_ja'); ?></p>
                <p class="drink-price">&yen;<?php the_sub_field('drink_price'); ?></p>
                <p class="drink-name-en"><?php the_sub_field('drink_name_en'); ?></p>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </dd>
      </dl>
    <!-- ビールベース -->
      <dl class="drink-menu-wrap">
        <dt class="drink-menu-header">BEER BASE(Cocktail)</dt>
        <dd class="drink-menu-list-wrap">
          <?php if(have_rows('beerbase_menu_repeat',option)): ?>
            <?php while(have_rows('beerbase_menu_repeat',option)): the_row(); ?>
              <div class="drink-menu-list">
                <p class="drink-name-ja"><?php the_sub_field('drink_name_ja'); ?></p>
                <p class="drink-price">&yen;<?php the_sub_field('drink_price'); ?></p>
                <p class="drink-name-en"><?php the_sub_field('drink_name_en'); ?></p>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </dd>
      </dl>

    <!-- レッドブルベース -->
      <dl class="drink-menu-wrap">
        <dt class="drink-menu-header">REDBULL BASE</dt>
        <dd class="drink-menu-list-wrap">
          <?php if(have_rows('redbullbase_menu_repeat',option)): ?>
            <?php while(have_rows('redbullbase_menu_repeat',option)): the_row(); ?>
              <div class="drink-menu-list">
                <p class="drink-name-ja"><?php the_sub_field('drink_name_ja'); ?></p>
                <p class="drink-price">&yen;<?php the_sub_field('drink_price'); ?></p>
                <p class="drink-name-en"><?php the_sub_field('drink_name_en'); ?></p>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </dd>
      </dl>
    <!-- ショットメニュー -->
      <dl class="drink-menu-wrap">
        <dt class="drink-menu-header">SHOT MENU</dt>
        <dd class="drink-menu-list-wrap">
          <?php if(have_rows('shot_menu_repeat',option)): ?>
            <?php while(have_rows('shot_menu_repeat',option)): the_row(); ?>
              <div class="drink-menu-list">
                <p class="drink-name-ja"><?php the_sub_field('drink_name_ja'); ?></p>
                <p class="drink-price">&yen;<?php the_sub_field('drink_price'); ?></p>
                <p class="drink-name-en"><?php the_sub_field('drink_name_en'); ?></p>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </dd>
      </dl>
    <!-- ビール -->
      <dl class="drink-menu-wrap">
        <dt class="drink-menu-header">BEER</dt>
        <dd class="drink-menu-list-wrap">
          <?php if(have_rows('beer_menu_repeat',option)): ?>
            <?php while(have_rows('beer_menu_repeat',option)): the_row(); ?>
              <div class="drink-menu-list">
                <p class="drink-name-ja"><?php the_sub_field('drink_name_ja'); ?></p>
                <p class="drink-price">&yen;<?php the_sub_field('drink_price'); ?></p>
                <p class="drink-name-en"><?php the_sub_field('drink_name_en'); ?></p>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </dd>
      </dl>
    <!-- ウィスキー -->
      <dl class="drink-menu-wrap">
        <dt class="drink-menu-header">WHISKY</dt>
        <dd class="drink-menu-list-wrap">
          <?php if(have_rows('whisky_menu_repeat',option)): ?>
            <?php while(have_rows('whisky_menu_repeat',option)): the_row(); ?>
              <div class="drink-menu-list">
                <p class="drink-name-ja"><?php the_sub_field('drink_name_ja'); ?></p>
                <p class="drink-price">&yen;<?php the_sub_field('drink_price'); ?></p>
                <p class="drink-name-en"><?php the_sub_field('drink_name_en'); ?></p>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </dd>
      </dl>
    </div>

    <div class="l-grid-4">
    
    <!-- ワイン -->
      <dl class="drink-menu-wrap">
        <dt class="drink-menu-header">WINE</dt>
        <dd class="drink-menu-list-wrap">
          <?php if(have_rows('wine_menu_repeat',option)): ?>
            <?php while(have_rows('wine_menu_repeat',option)): the_row(); ?>
              <div class="drink-menu-list">
                <p class="drink-name-ja"><?php the_sub_field('drink_name_ja'); ?></p>
                <p class="drink-price">&yen;<?php the_sub_field('drink_price'); ?></p>
                <p class="drink-name-en"><?php the_sub_field('drink_name_en'); ?></p>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </dd>
      </dl>
    <!-- 焼酎 -->
      <dl class="drink-menu-wrap">
        <dt class="drink-menu-header">焼酎</dt>
        <dd class="drink-menu-list-wrap">
          <?php if(have_rows('shochu_menu_repeat',option)): ?>
            <?php while(have_rows('shochu_menu_repeat',option)): the_row(); ?>
              <div class="drink-menu-list">
                <p class="drink-name-ja"><?php the_sub_field('drink_name_ja'); ?></p>
                <p class="drink-price">&yen;<?php the_sub_field('drink_price'); ?></p>
                <p class="drink-name-en"><?php the_sub_field('drink_name_en'); ?></p>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </dd>
      </dl>
    <!-- 焼酎 -->
      <dl class="drink-menu-wrap">
        <dt class="drink-menu-header">日本酒</dt>
        <dd class="drink-menu-list-wrap">
          <?php if(have_rows('japanesesake_menu_repeat',option)): ?>
            <?php while(have_rows('japanesesake_menu_repeat',option)): the_row(); ?>
              <div class="drink-menu-list">
                <p class="drink-name-ja"><?php the_sub_field('drink_name_ja'); ?></p>
                <p class="drink-price">&yen;<?php the_sub_field('drink_price'); ?></p>
                <p class="drink-name-en"><?php the_sub_field('drink_name_en'); ?></p>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </dd>
      </dl>
    <!-- 焼酎 -->
      <dl class="drink-menu-wrap">
        <dt class="drink-menu-header">梅酒</dt>
        <dd class="drink-menu-list-wrap">
          <?php if(have_rows('umeshu_menu_repeat',option)): ?>
            <?php while(have_rows('umeshu_menu_repeat',option)): the_row(); ?>
              <div class="drink-menu-list">
                <p class="drink-name-ja"><?php the_sub_field('drink_name_ja'); ?></p>
                <p class="drink-price">&yen;<?php the_sub_field('drink_price'); ?></p>
                <p class="drink-name-en"><?php the_sub_field('drink_name_en'); ?></p>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </dd>
      </dl>
    <!-- ボトル -->
      <dl class="drink-menu-wrap">
        <dt class="drink-menu-header">BOTTLE</dt>
        <dd class="drink-menu-list-wrap">
          <?php if(have_rows('bottle_menu_repeat',option)): ?>
            <?php while(have_rows('bottle_menu_repeat',option)): the_row(); ?>
              <div class="drink-menu-list">
                <p class="drink-name-ja"><?php the_sub_field('drink_name_ja'); ?></p>
                <p class="drink-price">&yen;<?php the_sub_field('drink_price'); ?></p>
                <p class="drink-name-en"><?php the_sub_field('drink_name_en'); ?></p>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </dd>
      </dl>
    <!-- ソフトドリンク -->
      <dl class="drink-menu-wrap">
        <dt class="drink-menu-header">ソフトドリンク</dt>
        <dd class="drink-menu-list-wrap">
          <?php if(have_rows('softdrink_menu_repeat',option)): ?>
            <?php while(have_rows('softdrink_menu_repeat',option)): the_row(); ?>
              <div class="drink-menu-list">
                <p class="drink-name-ja"><?php the_sub_field('drink_name_ja'); ?></p>
                <p class="drink-price">&yen;<?php the_sub_field('drink_price'); ?></p>
                <p class="drink-name-en"><?php the_sub_field('drink_name_en'); ?></p>
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