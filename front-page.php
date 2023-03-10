    <?php get_header(); ?>
    <main>

    <!-- メイン画像 -->
    <div class="main-visual">
      <img src="<?php echo get_template_directory_uri(); ?>/images/main.png" alt="メイン画像" />
    </div>
    <!-- メイン画像 -->

    <!-- About始まり -->
    <div id="about" class="about-container">
      <h2>About</h2>
      <div class="about-box">
        <div class="about-img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/profile.png" alt="プロフィール写真" />
        </div>
        <div class="about-text">
          <h3>Akiho Oda</h3>
          <ul>
            <li>・ 28歳 三重県鈴鹿市出身</li>
            <li>・ 未経験からWebデザイナーを目指して勉強中</li>
            <li>・ 医療事務、保育士、栄養士などの資格所持</li>
            <li>・ カフェの雰囲気、ご飯が好き</li>
            <li>・ 海を眺めながら過ごす時間が落ち着く</li>
            <li>・ ディズニーが好き</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- About終わり -->

    <!-- Works始まり -->
    <div id="works" class="works-container">
      <h2>Works</h2>
      <div class="works-box">
        <div class="works-item">
          <img class="works-img" src="<?php echo get_template_directory_uri(); ?>/images/gohan.png" alt="手作りご飯" />
          <p>ある日の夕食、手作りご飯の1枚</p>
        </div>
        <div class="works-item">
          <img class="works-img" src="<?php echo get_template_directory_uri(); ?>/images/cafegohan.png" alt="カフェご飯" />
          <p>カフェのご飯は盛り付けも美味しさも抜群！</p>
        </div>
        <div class="works-item">
          <img class="works-img" src="<?php echo get_template_directory_uri(); ?>/images/cafeh.png" alt="カフェ雰囲気" />
          <p>良く晴れた夏の日、テラス席での1枚</p>
        </div>
        <div class="works-item">
          <img class="works-img" src="<?php echo get_template_directory_uri(); ?>/images/jimoto.png" alt="地元の海" />
          <p>地元の海、ぼーっと眺めてリフレッシュ</p>
        </div>
        <div class="works-item">
          <img class="works-img" src="<?php echo get_template_directory_uri(); ?>/images/cafesea.png" alt="海の見えるカフェ" />
          <p>海の見えるカフェ、波の音と眩しい夕日</p>
        </div>
        <div class="works-item">
          <img class="works-img" src="<?php echo get_template_directory_uri(); ?>/images/disney.png" alt="ディズニー" />
          <p>夢の国、水に映るシンデレラ城</p>
        </div>
      </div>
    </div>
    <!-- Works終わり -->

    </main>
    <?php get_footer(); ?>