<?php
  $templete = 'top';
  $title = '大阪の風俗男性求人';
  $path = './';
  include $path .'components/header.php';
?>

<main class="top">
  <div class="container">
    <?php include $path.'components/tabLink.php'?>
    <h2>スピードグループの3つの魅力</h2>
    <p>他にはないスピードグループのイチオシポイント</p>
    <dl class="top__desc">
      <dl>
        <dt class="gothic">
          <p>
            関西最大級の<br />グループ
          </p>
        </dt>
        <dd>
          <p>
            大手ならではの<br />
            洗練された仕事を<br />
            体験してみませんか？<br />
            充実した人生を共に<br />
            歩みましょう
          </p>
        </dd>
      </dl>
      <dl>
        <dt class="gothic">
          <p>
            ヤル気次第で<br />ガンガン稼げる!
          </p>
        </dt>
        <dd>
          <p>
            私たちは<br />
            頑張る人を応援します<br />
            あなたの努力は全て<br />
            給料として自分自身に<br />
            返ってきます
          </p>
        </dd>
      </dl>
      <dl>
        <dt class="gothic">
          <p>
            安心して<br />働ける!
          </p>
        </dt>
        <dd>
          <p>
            従業員の安心は<br />
            最低条件です<br />
            保証・待遇など最高の<br />
            環境があなたを<br />
            迎えます
          </p>
        </dd>
      </dl>
    </dl>
    <dl class="top__tabDesc tab">
      <dl>
        <dt class="gothic">
          <p>
            関西最大級のグループ
          </p>
        </dt>
        <dd>
          <p>
            大手ならではの洗練された仕事を体験してみませんか？<br />
            充実した人生を共に歩みましょう
          </p>
        </dd>
      </dl>
      <dl>
        <dt class="gothic">
          <p>
            ヤル気次第でガンガン稼げる!
          </p>
        </dt>
        <dd>
          <p>
            私たちは頑張る人を応援します!<br />
            保証・待遇など最高の環境があなたを迎えます
          </p>
        </dd>
      </dl>
      <dl>
        <dt class="gothic">
          <p>
            安心して働ける!
          </p>
        </dt>
        <dd>
          <p>
            従業員の安心は最低条件です!<br />
            保証・待遇など最高の環境があなたを迎えます
          </p>
        </dd>
      </dl>
    </dl>
    <div class="top__guide pc">
      <h3>
        未経験者ガイド
      </h3>
      <ul class="top__guide__list">
        <li>
          <a href="<?php echo $path; ?>about">
            <img src="<?php echo $path; ?>assets/images/top-guide0.png" alt="スピードってどんなグループ?">
          </a>
        </li>
        <li>
          <a href="<?php echo $path; ?>work">
            <img src="<?php echo $path; ?>assets/images/top-guide1.png" alt="仕事内容について">
          </a>
        </li>
        <li>
          <a href="<?php echo $path; ?>qa">
            <img src="<?php echo $path; ?>assets/images/top-guide2.png" alt="よくある質問">
          </a>
        </li>
      </ul>
    </div>
    <div class="top__tabGuide tab">
      <h3>
        <img src="<?php echo $path; ?>assets/images/top-guide-title-tab.png" alt="未経験者ガイド">
      </h3>
      <ul class="top__tabGuide__list">
        <li>
          <a href="<?php echo $path; ?>about">
            <img src="<?php echo $path; ?>assets/images/top-guide0-tab.png" alt="スピードってどんなグループ?">
          </a>
        </li>
        <li>
          <a href="<?php echo $path; ?>work">
            <img src="<?php echo $path; ?>assets/images/top-guide1-tab.png" alt="仕事内容について">
          </a>
        </li>
        <li>
          <a href="<?php echo $path; ?>qa">
            <img src="<?php echo $path; ?>assets/images/top-guide2-tab.png" alt="よくある質問">
          </a>
        </li>
      </ul>
    </div>
  </div>
</main>
<?php
  include $path .'components/footer.php' ?>