<?php



//フッターテキストの表示
function custom_admin_footer() {
    echo '何かご不明な点がございましたら<a href="mailto:web@enjoytrust.net">ENJOYTRUST WEB担当</a>まで';
}
add_filter('admin_footer_text', 'custom_admin_footer');

//Google Analytics設定
function wp_add_googleanalytics() { ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41178620-1', 'auto');
  ga('send', 'pageview');

</script>
<?php }
add_action('wp_footer', 'wp_add_googleanalytics');

//ユーザー情報欄にソーシャルリンクを設定
function my_new_contactmethods( $contactmethods ) {
//Twitter
$contactmethods['twitter'] = 'Twitter';
//Facebook
$contactmethods['facebook'] = 'Facebook';
//Google+
$contactmethods['googleplus'] = 'Google+';
return $contactmethods;
}
add_filter('user_contactmethods','my_new_contactmethods',10,1);

// 管理バーにログアウトを追加
function add_new_item_in_admin_bar() {
 global $wp_admin_bar;
 $wp_admin_bar->add_menu(array(
 'id' => 'new_item_in_admin_bar',
 'title' => __('ログアウト'),
 'href' => wp_logout_url()
 ));
 }
add_action('wp_before_admin_bar_render', 'add_new_item_in_admin_bar');


function change_post_menu_label() {
global $menu;
global $submenu;
$menu[5][0] = '使用しない';
$submenu['edit.php'][5][0] = '使用しない';
$submenu['edit.php'][10][0] = '新規追加';
$submenu['edit.php'][16][0] = 'タグ';
//echo ";
}
function change_post_object_label() {
global $wp_post_types;
$labels = &$wp_post_types['post']->labels;
$labels->name = '使用しない';
$labels->singular_name = '使用しない';
$labels->add_new = _x('追加', '使用しない');
$labels->add_new_item = '新規追加';
$labels->edit_item = '更新内容の編集';
$labels->new_item = '新規追加';
$labels->view_item = '更新一覧を表示';
$labels->search_items = '更新一覧から検索';
$labels->not_found = '記事が見つかりませんでした';
$labels->not_found_in_trash = 'ゴミ箱に記事は見つかりませんでした';
}
add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );

/**
 * ユーザーの登録時、「ビジュアルリッチエディターを使用しない」にチェックが入った状態にします。
 */
function user_register_rich_edit_disable( $user_id ) {
  wp_update_user( array( 'ID' => $user_id, 'rich_editing' => 'false') );
}
add_action( 'user_register', 'user_register_rich_edit_disable' );


/* ======= 管理画面カスタマイズ ======= */
function remove_menus () {
    if (!current_user_can('administrator')) { //管理者ではない場合
        remove_menu_page( 'index.php' );                  // ダッシュボード
        remove_menu_page( 'edit.php' );                   // 投稿
        remove_menu_page( 'upload.php' );                 // メディア
        remove_menu_page( 'edit.php?post_type=page' );    // 固定ページ
        remove_menu_page( 'edit-comments.php' );          // コメント
        //remove_menu_page( 'themes.php' );                 // 外観
        remove_menu_page( 'plugins.php' );                // プラグイン
        remove_menu_page( 'users.php' );                  // ユーザー
        remove_menu_page( 'tools.php' );                  // ツール
        remove_menu_page( 'profile.php' );                // プロフィール
        remove_menu_page( 'options-general.php' );        // 設定
    }
}

function remove_administrator_menus () {
    if (current_user_can('administrator')) { //管理者の場合
        remove_menu_page( 'index.php' );                  // ダッシュボード
        remove_menu_page( 'edit.php' );                   // 投稿
        remove_menu_page( 'upload.php' );                 // メディア
        // remove_menu_page( 'edit.php?post_type=page' );    // 固定ページ
        remove_menu_page( 'edit-comments.php' );          // コメント
        // remove_menu_page( 'themes.php' );                 // 外観
        // remove_menu_page( 'plugins.php' );                // プラグイン
        remove_menu_page( 'tools.php' );                  // ツール
        remove_menu_page( 'profile.php' );                // プロフィール
       // remove_menu_page( 'options-general.php' );        // 設定
    }
}


/* ======= 管理画面カスタマイズCSS ======= */
function my_admin_style() {
if (!current_user_can('administrator')) { //管理者ではない場合
  echo '<style>
    @media screen and (max-width: 768px) {
        body {
            background-color: #3c4248 !important;
        }
    }


  </style>'.PHP_EOL;
    }
}

/* ======= 管理画面カスタマイズ ======= */
function my_admin_administrator_style() {
if (current_user_can('administrator')) { //管理者の場合
  echo '<style>

    @media screen and (max-width: 768px) {
        body {
            background-color: #3c4248 !important;
        }
    }


  </style>'.PHP_EOL;
    }
}

add_action('admin_menu', 'remove_administrator_menus');//管理者の場合
add_action('admin_print_styles', 'my_admin_administrator_style');//管理者の場合

add_action('admin_menu', 'remove_menus');//管理者ではない場合
add_action('admin_print_styles', 'my_admin_style');//管理者ではない場合

// WordPressの管理画面ログインURLを変更する
define( 'LOGIN_CHANGE_PAGE', 'insite.php' );
add_action( 'login_init', 'login_change_init' );
add_filter( 'site_url', 'login_change_site_url', 10, 4 );
add_filter( 'wp_redirect', 'login_change_wp_redirect', 10, 2 );
// 指定以外のログインURLは403エラーにする
if ( ! function_exists( 'login_change_init' ) ) {
  function login_change_init() {
    if ( !defined( 'LOGIN_CHANGE' ) || sha1( 'insite' ) != LOGIN_CHANGE ) {
      status_header( 403 );
      exit;
    }
  }
}
// ログイン済みか新設のログインURLの場合はwp-login.phpを置き換える
if ( ! function_exists( 'login_change_site_url' ) ) {
  function login_change_site_url( $url, $path, $orig_scheme, $blog_id ) {
    if ( $path == 'wp-login.php' &&
      ( is_user_logged_in() || strpos( $_SERVER['REQUEST_URI'], LOGIN_CHANGE_PAGE ) !== false ) )
      $url = str_replace( 'wp-login.php', LOGIN_CHANGE_PAGE, $url );
    return $url;
  }
}
// ログアウト時のリダイレクト先の設定
if ( ! function_exists( 'login_change_wp_redirect' ) ) {
  function login_change_wp_redirect( $location, $status ) {
    if ( strpos( $_SERVER['REQUEST_URI'], LOGIN_CHANGE_PAGE ) !== false )
      $location = str_replace( 'wp-login.php', LOGIN_CHANGE_PAGE, $location );
    return $location;
  }
}