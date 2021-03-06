<?php
add_action('init', 'register_post_type_and_taxonomy'); // // 最初にregister_post_type_and_taxonomy関数を実行
function register_post_type_and_taxonomy() {
  register_post_type( // カスタム投稿タイプを定義するための関数
    'shop', // カスタム投稿タイプ名
    array(
      'labels' => array(
        'name' => 'お店', //ダッシュボードに表示される名前
        'add_new_item' => 'お店を新規追加', // 新規追加画面に表示される名前
        'edit_item' => 'お店の編集', // 編集画面に表示される名前
      ),
      'public' => true, // ダッシュボードに表示するか否か
      'hierarchical' => true, // 階層型にするか否か
      'has_archive' => true, // アーカイブ（一覧表示機能）を持つか否か
      'supports' => array( // カスタム投稿ページに表示される項目
        'title', // タイトル　＊＊＊カスタムフィールドだけにしたい場合は消しちゃう＊＊＊
        'editor', // 本文　＊＊＊カスタムフィールドだけにしたい場合は消しちゃう＊＊＊
        'custom-fields', // カスタムフィールド
        'thumbnail', // アイキャッチ画像　＊＊＊カスタムフィールドだけにしたい場合は消しちゃう＊＊＊
      ),
      'menu_position' => 5, // ダッシュボードで投稿の下に表示
      'rewrite' => array('with_front' => false), // パーマリンクの編集（newsの前の階層URLを消して表示）
    )
  );

  register_post_type( // カスタム投稿タイプを定義するための関数
    'empty-shop', // カスタム投稿タイプ名
    array(
      'labels' => array(
        'name' => '空き店舗', //ダッシュボードに表示される名前
        'add_new_item' => '空き店舗を新規追加', // 新規追加画面に表示される名前
        'edit_item' => '空き店舗の編集', // 編集画面に表示される名前
      ),
      'public' => true, // ダッシュボードに表示するか否か
      'hierarchical' => true, // 階層型にするか否か
      'has_archive' => true, // アーカイブ（一覧表示機能）を持つか否か
      'supports' => array( // カスタム投稿ページに表示される項目
        'title', // タイトル　＊＊＊カスタムフィールドだけにしたい場合は消しちゃう＊＊＊
        'editor', // 本文　＊＊＊カスタムフィールドだけにしたい場合は消しちゃう＊＊＊
        'custom-fields', // カスタムフィールド
        'thumbnail', // アイキャッチ画像　＊＊＊カスタムフィールドだけにしたい場合は消しちゃう＊＊＊
      ),
      'menu_position' => 5, // ダッシュボードで投稿の下に表示
      'rewrite' => array('with_front' => false), // パーマリンクの編集（newsの前の階層URLを消して表示）
    )
  );

/* カテゴリタクソノミー(カテゴリー分け)を使えるように設定する */
  register_taxonomy(
    'orijinal_themes_cat', /* タクソノミーの名前 */
    'orijinal_themes', /* 使用するカスタム投稿タイプ名 */
    array(
      'hierarchical' => true, /* trueだと親子関係が使用可能。falseで使用不可 */
      'update_count_callback' => '_update_post_term_count',
      'label' => 'オリジナルテーマ作成カテゴリー',
      'singular_label' => 'オリジナルテーマ作成カテゴリー',
      'public' => true,
      'show_ui' => true
    )
  );
/* カスタムタクソノミー、タグを使えるようにする */
  register_taxonomy(
    'orijinal_themes_tag', /* タクソノミーの名前 */
    'orijinal_themes', /* 使用するカスタム投稿タイプ名 */
    array(
      'hierarchical' => false,
      'update_count_callback' => '_update_post_term_count',
      'label' => 'オリジナルテーマ作成タグ',
      'singular_label' => 'オリジナルテーマ作成タグ',
      'public' => true,
      'show_ui' => true
    )
  );

}

function my_scripts() {
    wp_enqueue_script( 'main_script', get_bloginfo( 'stylesheet_directory') . '/assets/js/main.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'my_scripts');

function shortcode_images() {
ob_start();
bloginfo('template_directory');
$td .= ob_get_clean();
return $td."/images";
}
add_shortcode('img', 'shortcode_images');

function shortcode_javascript() {
ob_start();
bloginfo('template_directory');
$td .= ob_get_clean();
return $td."/assets/js";
}
add_shortcode('js', 'shortcode_javascript');
