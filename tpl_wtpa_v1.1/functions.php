<?php

require_once locate_template('lib/php/init.php');        // 初期設定の関数
require_once locate_template('lib/php/cleanup.php');     // 不要なモノを削除する関数
require_once locate_template('lib/php/titles.php');      // タイトル出力の関数
require_once locate_template('lib/php/breadcrumbs.php'); // パンくずリストの関数
require_once locate_template('lib/php/scripts.php');     // CSSやJavascript関連の関数
require_once locate_template('lib/php/ads.php');         // 広告関連の関数
require_once locate_template('lib/php/posttype.php');     // カスタム投稿タイプの関数
require_once locate_template('lib/php/widgets.php');     // サイドバー、ウィジェットの関数
require_once locate_template('lib/php/custom.php');      // その他カスタマイズの関数
require_once locate_template('lib/php/acf_option.php');      // カスタムフィールド/オプションの関数
require_once locate_template('lib/php/text_editor.php');      // テキストエディタ/クイックタグのの関数