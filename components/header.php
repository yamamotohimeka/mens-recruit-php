<?php
$url = 'https://mens.speed-recruit.net/';

  session_start();
  header('X-Frame-Options: DENY');
  $token = sha1(uniqid(rand(), true));
  $_SESSION['key'] = $token;  
    
$RECAPTUER = $_ENV["V3_SECRETKEY"];
$message = null;

if (isset($_REQUEST["recaptchaToken"]) == true)	/* 送信ボタンが押された ? */
{
	/** トークンチェック */
	$token = $_REQUEST["recaptchaToken"];

	if (token_chk($token) == true)	/* トークンチェックOK */
	{
		$message = "<p class=\"OK\">reCAPTCHAチェックOKです。</p>";
	}
	else
	{
		$message = "<p class=\"NG\">reCAPTCHAチェックNGです。</p>";
	}
}

function token_chk($token)
{
	global $RECAPTUER;

	/** ステータス初期化 */
	$sts = false;

	$result = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=${RECAPTUER}&response=${token}");
	$chk = json_decode($result);

	if ($chk->success == true)	/* トークンエラー */
	{
		$sts = true;
	}

	/** 処理終了 */
	return $sts;
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php echo $title; ?> | スピードグループ求人オフィシャルサイト</title>


  <link rel="stylesheet" href="<?php echo $path; ?>assets/css/style.css">
  <link rel="icon" href="<?php echo $path; ?>assets/images/favicon.ico" />

  <?php if ($templete == 'policy' || $templete == 'rule'): ?>
  <meta name=" description"
    content="大阪の風俗スピード求人センターの<?php echo $title; ?>のページです。スピードグループ求人オフィシャルサイトのトップページです｡日本橋,難波,梅田,谷九,京橋と店舗拡大中！関西最大級グループで一番稼げるのはここだ！高収入なお仕事をお探しなら是非ご応募を！" />
  <?php elseif ($templete == 'beginners'): ?>
  <?php else: ?>
  <meta name="description"
    content="大阪の風俗求人サイトスピードグループ求人センターです。日本橋,難波,梅田,京橋,天王寺,谷九と関西エリアを中心に続々と店舗拡大中。今がチャンス！必ずもらえる入店祝い金30万円！24時間365日･年中無休で受付中、お気軽にお問い合わせ下さい。" />
  <?php endif; ?>
</head>

<body>
  <header class="header">
    <div class="container">
      <div class="header__top">
        <div class="header__top__logo">
          <p>大阪の風俗男性求人|スピードグループ求人オフィシャルサイト</p>
          <h1>
            <a href="<?php echo $path; ?>">
              SPEEDGROUP
            </a>
          </h1>
        </div>
        <dl class="header__top__info pc">
          <dt>24時間お電話受付中</dt>
          <a href="tel:0120-504-204">
            <dd>TEL 0120-504-204</dd>
          </a>
        </dl>
        <div class="header__top__form pc">
          <a href="#form">
            <img src="<?php echo $path; ?>assets/images/header-form.png" alt="ご応募はこちら">
            <p>ご応募はこちら<br /><span>お気軽にご相談下さい</span></p>
          </a>
        </div>
      </div>
    </div>
    <?php if ($templete == 'top'): ?>
    <div class="header__banner">
      <div class="container">
        <div class="flex-center">
          <div class="left pc">
            <img class="img1" src="<?php echo $path; ?>assets/images/header-banner-img0.png" alt="大阪の風俗男性求人スピードグループ">
          </div>
          <div class="right pc">
            <div>
              <img class="img2" src="<?php echo $path; ?>assets/images/header-banner-img1.png"
                alt="関西最大級グループ一番稼げるのはここだ!!">
            </div>
            <div class="pc">
              <a href="<?php echo $path; ?>reason">
                <img class="button" src="<?php echo $path; ?>assets/images/header-banner-button.png" alt="稼げる5つの理由">
              </a>
            </div>
          </div>
          <div class="line pc">
            <img src="<?php echo $path; ?>assets/images/header-banner-line.png" alt="LINEで簡単応募">
          </div>
        </div>
      </div>
      <div class="header__banner-tabImg tab">
        <img src="<?php echo $path; ?>assets/images/header-banner-img-tab.png" alt="大阪の風俗男性求人スピードグループ">
      </div>
      <div class="header__banner-tabButton tab">
        <a href="<?php echo $path; ?>reason">
          <img src="<?php echo $path; ?>assets/images/header-banner-button-tab.png" alt="稼げる5つの理由">
        </a>
      </div>
    </div>
    <div class="header__banner-point"></div>
    <?php endif; ?>
    <nav class="header__nav">
      <div class="container">
        <ul>
          <li>
            <a href="<?php echo $path; ?>">
              ホーム
            </a>
          </li>
          <li>
            <a href="<?php echo $path; ?>about">
              スピードってどんなグループ?
            </a>
          </li>
          <li>
            <a href="<?php echo $path; ?>work">
              仕事内容について
            </a>
          </li>
          <li>
            <a href="<?php echo $path; ?>recruit">
              募集要項・給与
            </a>
          </li>
          <li>
            <a href="<?php echo $path; ?>qa">
              よくある質問
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="header__tabButton tab">
      <span></span>
    </div>
    <nav class="header__tabNav tab">
      <h3>MENU</h3>
      <div class="header__tabNav-close">
        <img src="<?php echo $path; ?>assets/images/header-nav-button-tab.png" alt="closeボタン">
      </div>
      <ul>
        <li>
          <a href="<?php echo $path; ?>about">
            スピードグループとは
          </a>
        </li>
        <li>
          <a href="<?php echo $path; ?>reason">
            稼げる5つの理由
          </a>
        </li>
        <li>
          <a href="<?php echo $path; ?>work">
            仕事内容について
          </a>
        </li>
        <li>
          <a href="<?php echo $path; ?>recruit">
            募集要項・給与
          </a>
        </li>
        <li>
          <a href="<?php echo $path; ?>qa">
            よくある質問
          </a>
        </li>
        <li>
          <a href="<?php echo $path; ?>">
            トップへ戻る
          </a>
        </li>
      </ul>
    </nav>
  </header>