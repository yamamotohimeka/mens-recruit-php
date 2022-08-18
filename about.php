<?php
  $templete = 'about';
  $title = 'スピードってどんなグループ? - 大阪の風俗男性求人';
  $path = './';
  include $path .'components/header.php';
?>

<main>
  <div class="container">
    <div class="main__wrap">
      <div id="contents" class="main__wrap-inner">
        <section class="about">
          <div class="about-head tabContainer">
            <img src="<?php echo $path; ?>assets/images/about-head.png" alt="スピードグループとは">
          </div>
          <dl class="about__list">
            <dl>
              <dt>関西最大級のグループです!</dt>
              <dd>スピードグループはしっかりと稼げる場所です。店長・幹部候補は月給70万円以上、もちろんアルバイトからの社員登用や幹部ポストへの抜擢もあります。※本人の希望によります。</dd>
            </dl>
            <dl>
              <dt>成長できる職場環境</dt>
              <dd>月給以外に毎月インセンティブが発生します!その上、昇格すればその分インセンティブの量も多くなるので、仕事にもやりがいをもちやすいですよ。</dd>
            </dl>
            <dl>
              <dt>しっかりと評価される環境</dt>
              <dd>月給、インセンティブ以外に賞与が年に２回あるのでしっかりと働くとその分、自分に返ってきます。頑張った人が報われるシステムになっております。</dd>
            </dl>
          </dl>
        </section>
      </div>
      <div id="sideBar" class="main__wrap-side">
        <?php include $path .'components/sideBar.php';?>
      </div>
    </div>
  </div>
</main>
<?php
  include $path .'components/footer.php';
?>