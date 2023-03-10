<!DOCTYPE html>
<html>
  
  <!-- 見えないところ始まり -->
  <head>
    <title>MyProfile</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="<?php echo get_template_directory_uri(); ?>/https://fonts.googleapis.com">
    <link rel="preconnect" href="<?php echo get_template_directory_uri(); ?>/https://fonts.gstatic.com" crossorigin>
    <link href="<?php echo get_template_directory_uri(); ?>/https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <!-- 見えないところ終わり -->

  <!-- 見えるところ始まり -->
  <body>

    <!-- ヘッダー始まり -->
    <header>
      <div class="header-container">
        <h1><a href="/">MyProfile</a></h1>
        <nav>
          <!-- モバイル用ナビゲーション始まり -->
          <div class="navbtn">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <!-- モバイル用ナビゲーション終わり -->

          <ul class="nav-menu">
            <li><a href="/">About</a></li>
            <li><a href="/">Works</a></li>
           </ul>
        </nav>
      </div>
    </header>
    <!-- ヘッダー終わり -->