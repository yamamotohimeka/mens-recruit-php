<?php 
$templete = 'form';
  
session_start();
$token = sha1(uniqid(rand(), true));
$_SESSION['key'] = $token;

?>


<div class="form">
  <form method="post" class="validationForm" id="the-form">

    <div class="form-box">
      <label class="hissu">お名前</label>
      <input type="text" name=" name" value="" class="maxlength required" data-maxlength="10">
    </div>

    <div class="form-box">
      <label class="hissu">メールアドレス</label>
      <input type="email" name="email" value="" size="40" id="email" class="required email" placeholder="例）a@gmail.com">
    </div>


    <div class="form-box form-textarea">
      <label>ご希望・ご質問</label>
      <textarea name="text" cols="40" rows="10"></textarea>
    </div>

    <p class="form-desc">
      <span>※</span>のついている項目は必須項目になります。必ずご記入下さい。
    </p>

    <div class="form-submit">
      <input type="submit" value="送信" class="submit-btn" id="submit" value="送信する">
      <input type="hidden" name="token" value="<?= $token ?>">
    </div>
  </form>
</div>


<div id="form-load">
  <div class="load">
  </div>
  <div class="load1">
    <br>
    <div class="loader"></div>
    <p>送信中</p>
  </div>
</div>

<!-- 結果メッセージ -->
<div id="result"></div><!-- /#result -->

<script src="https://www.google.com/recaptcha/api.js?render=6LfQXoghAAAAAA98HACeMlTRYYc09U3tdVRSp9k1"></script>
<script type="module" src="php_mailer/js/form.js"></script>