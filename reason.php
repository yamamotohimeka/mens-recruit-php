<?php
  $templete = 'reason';
  $title = '稼げる5つの理由 - 大阪の風俗男性求人';
  $path = './';
  include $path .'components/header.php';
?>
<main>
  <div class="container">
    <div class="main__wrap">
      <div id="contents" class="main__wrap-inner">
        <section class="reason">
          <div class="reason-head pc">
            <img src="<?php echo $path; ?>assets/images/reason-head.png" alt="START給が35万円以上!">
          </div>
          <div class="reason-head tab">
            <img src="<?php echo $path; ?>assets/images/reason-head-tab.png" alt="START給が35万円以上!">
          </div>
          <dl class="reason__list">
            <dl>
              <dt>月給70万円以上!</dt>
              <dd>スピード・グループはしっかりと稼げる場所です。店長・幹部候補は月給70万円以上、もちろんアルバイトからの社員登用や幹部ポストへの抜擢もあります。※本人の希望によります。</dd>
            </dl>
            <dl>
              <dt>毎月の高額歩合</dt>
              <dd>月給以外に毎月インセンティブが発生します！その上、昇格すればその分インセンティブの量も多くなるので、仕事にもやりがいを持ちやすいですよ。</dd>
            </dl>
            <dl>
              <dt>賞与あり</dt>
              <dd>月給、インセンティブ以外に賞与が年に２回あるのでしっかりと働くとその分、自分に返ってきます。頑張った人が報われるシステムになっております。</dd>
            </dl>
            <dl>
              <dt>充実の手当て</dt>
              <dd>スタッフ全員に・残業手当　・休日出勤手当　・各種役職手当・大入り手当(特別ボーナス)　・皆勤手当　・各種技術手当があります。<br />
                <br />
                正社員に関しては・営業手当(インセンティブ)　・家族（扶養）手当て・住宅手当（家賃or寮費補助）があるので安心して働くことができます！
              </dd>
            </dl>
            <dl>
              <dt>独立支援制度あり</dt>
              <dd>
                "いつかは独立・開業したい！"という方のために、スピードグループでは、フランチャイズシステムをご用意しております。自己資金額を抑えた上で、独立に向けての必要な経営ノウハウを学べます！開業後も本部から経営などのアドバイスをしますので、安心して続けられます。
              </dd>
            </dl>
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