<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php if(wp_title()) echo wp_title(); ?> 若草通商店街</title>
<!--
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
<!--
    <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-2.2.3.js"></script>
    <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
-->
  </head>
  <body>
    <header>
      <div class="title">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <h2>若草通商店街振興組合</h2>
        </a>
      </div>
      <div class="menu">
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップ</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">商店街について</a></li>
          <li><a href="<?php echo esc_url( home_url( '/shoplist' ) ); ?>">お店一覧</a></li>
          <li><a href="<?php echo esc_url( home_url( '/empty-shoplist' ) ); ?>">空き店舗一覧</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">アクセス</a></li>
        </ul>
      </div>
    </header>
<?php wp_head(); ?>
