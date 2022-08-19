<?php 
  $title = '募集要項・給与 - 大阪の風俗男性求人';
  $path = './';
  include $path .'components/header.php';
?>
<main>
  <div class="container">
    <div class="main__wrap">
      <div id="contents" class="main__wrap-inner">
        <section class="recruit">
          <h2 class="page-title">募集要項・給与</h2>
          <ul class="recruit__list">
            <li>
              <a href="#staff">店舗運営スタッフ</a>
            </li>
            <li>
              <a href="#office">本社事務(女性)</a>
            </li>
            <li>
              <a href="#designer">男女WEBデザイナー</a>
            </li>
            <li>
              <a href="#companion">コンパニオン紹介業務</a>
            </li>
            <li>
              <a href="#driver">ドライバー</a>
            </li>
            <li>
              <a href="#secretary">秘書</a>
            </li>
          </ul>
          <ul class="recruit__contents">
            <?php include $path .'components/recruitCard.php'?>
          </ul>
        </section>
      </div>
      <div id="sideBar" class="main__wrap-side">
        <?php include $path .'components/sideBar.php' ?>
      </div>
    </div>
  </div>
</main>
<?php include $path .'components/footer.php' ?>