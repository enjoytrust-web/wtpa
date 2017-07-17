<?php


/**
 * テキストエディタのツールバーにボタンを追加します。
 */
function custom_add_quicktags() {
    if (wp_script_is('quicktags')){
?>
    <script>
    // QTags.addButton( id, ボタンテキスト, 開始タグ, 終了タグ, アクセスキー, タイトル, 優先順位(1が先頭) );
    QTags.addButton( 'label', '見出し', '<p class="single-info-text-label">', '</p>', '', '見出し', 1 );
    QTags.addButton( 'lead', '文章', '<p class="single-info-text-lead">', '</p>', '', '文章', 1 );
    QTags.addButton( 'notes', '注意書き:備考', '<p class="single-info-text-notes">', '</p>', '', '注意書き：備考', 1 );
    QTags.addButton( 'female', '女性特典', '<p class="single-info-text-label single-info-text-label-female">女性特典', '</p>','', '女性特典', 1 );
    QTags.addButton( 'male', '男性特典', '<p class="single-info-text-label single-info-text-label-male">男性特典', '</p>','', '男性特典', 1 );
    QTags.addButton( 'campaign', '特典', '<p class="single-info-text-label single-info-text-label-fill">特典', '</p>','', '特典', 1 );
    </script>
<?php
    }
}
add_action( 'admin_print_footer_scripts', 'custom_add_quicktags' );