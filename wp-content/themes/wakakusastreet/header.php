<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
  </head>
  <body>
    <header>
      <div id="header-content">
        <div id="header-title">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <h2>若草通商店街振興組合</h2>
            <p>WakakusaStreet</p>
          </a>
        </div>
        <div id="header-menu">
          <ul>
            <li><a href="<?php echo esc_url( home_url( '/shoplist' ) ); ?>">お店一覧</a></li>
            <li><a href="<?php echo esc_url( home_url( '/empty-shoplist' ) ); ?>">空き店舗一覧</a></li>
          </ul>
        </div>
      </div>
    </header>
<?php wp_head(); ?>
