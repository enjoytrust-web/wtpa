<?php
//ログイン画面のロゴを変更
function custom_login_logo() { ?>
  <style>
    .login #login h1 a {
      width: 143px;
      height: 39px;
      background: url(<?php echo get_stylesheet_directory_uri(); ?>/lib/images/mainlogo.svg) no-repeat 0 0;
      background-size:  cover;
    }

    #nav {
      display: none;
    }

  </style>
<?php }
add_action( 'login_enqueue_scripts', 'custom_login_logo' );

function custom_login_logo_url() {
  return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'custom_login_logo_url' );

function custom_login_logo_title() {
  return get_bloginfo( 'name' );
}
add_filter( 'login_headertitle', 'custom_login_logo_title' );

function login_user_pass_placeholder() { ?>
  <script src="<?php echo get_bloginfo('template_directory') ?>/js/jquery.js"></script>
  <script>
    $(document).ready(function(){
      $('#loginform label[for="user_login"], #loginform label[for="user_pass"]').contents().filter(function() {
        return this.nodeType === 3;
      }).remove();

      $('#loginform input[type="text"]').attr('placeholder', 'Username');
      $('#loginform input[type="password"]').attr('placeholder', 'Password');
    });
  </script>
<?php }
add_action( 'login_enqueue_scripts', 'login_user_pass_placeholder' );