<?php
  $templete = 'qa';
  $title = 'よくある質問 - 大阪の風俗男性求人';
  $path = './';
  include $path .'components/header.php';
?>
<main>
  <div class="container">
    <div class="main__wrap">
      <div id="contents" class="main__wrap-inner">
        <section class="qa">
          <h2 class="page-title">よくある質問Q&A</h2>
          <p class="qa-text">
            皆様からのスピードグループに対する「よくある質問」を書き出してみました。もしも、この中に答えが見つからない時は、メール及びお電話（0120-504-204）にてお気軽にお問い合わせ下さい。求人担当者がお答えいたします。
          </p>
          <ul class="qa__contents">
            <?php include $path .'components/qaCard.php' ?>
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