<?php
  $templete = 'work';
  $title = '仕事内容について - 大阪の風俗男性求人';
  $path = './';
  include $path .'components/header.php';
?>

<main>
  <div class="container">
    <div id="contents" class="main__wrap">
      <div class="main__wrap-inner">
        <section class="work">
          <h2 class="page-title">気になる実際の仕事内容</h2>
          <p class="work-text">
            どの業務もお店が営業をしていく上で大切なものばかりです。<br class="pc" />
            自分たちの工夫や努力が結果に出やすいのでやりがいをもって仕事に臨むことができます。
          </p>
          <dl class="work__list">
            <?php include $path .'components/workCard.php' ?>
          </dl>
        </section>
      </div>
      <div id="sideBar" class="main__wrap-side">
        <?php include $path .'components/sideBar.php' ?>
      </div>
    </div>
  </div>
</main>
<?php include $path .'components/footer.php' ?>