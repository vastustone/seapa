<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ユーザ情報登録</title>
  <link href="../../css/bootstrap.min.css" rel="stylesheet">
  <link href="../../css/signin.css" rel="stylesheet">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script type="text/javascript" src="../../js/jquery.validate.min.js"></script>
  <script type="text/javascript" src="../../js/messages_ja.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
  <script type="text/javascript">
$(function(){
  // Validatorの初期値を変更します
  $.validator.setDefaults({
    // NG項目のclass
    errorClass : 'has-error',
    // OK項目のclass
    validClass : 'has-success',
    // 入力チェックNGの場合、項目のform-groupにerrorClassを設定します
    highlight : function(element, errorClass, validClass) {
      $(element).closest('.form-group').addClass(errorClass).removeClass(validClass);
    },
    // 入力チェックOKの場合、項目のform-groupにvalidClassを設定します
    unhighlight : function(element, errorClass, validClass) {
      $(element).closest('.form-group').removeClass(errorClass).addClass(validClass);
    }
  });

  $("#signinForm").validate({
    rules: {
      username: {
        required: true,
        maxlength: 30
      },
      password: {
        required: true,
        minlength:6,
        maxlength:16
      }
    }
  });
});
</script>
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Seapa</a>
      </div>
    </div>
  </nav>
  <div class="container-fluid">
{if isset($errorFlg)}
    <div class="form-signin">
      <h3 class="form-signin-heading">メールアドレス登録エラー</h3>
      <p>このURLは利用できません。</p>
      <p>もう一度メールアドレスの登録からお願いします。</p>
      <p><a href="../../pre_regist/input">seapaメンバー登録ページ</p>
    </div>
{else}
    <form method="post" id="signinForm" class="form-signin" action="../result">
      <input type="hidden" name="pre_userid" value="{$pre_userid}">
      <input type="hidden" name="email" value="{$email}">
      <h3 class="form-signin-heading">ユーザ情報登録</h3>
      <div class="form-group">
        <label for="username" class="sr-only">ユーザ名</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="ユーザ名" value="" aria-describedby="username-help" required autofocus>
        <p id="username-help" class="help-block">全角30文字まで。後から変更可能。</p>
      </div>
      <div class="form-group">
        <label for="password" class="sr-only">パスワード</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="パスワード" value="" required>
      </div>
      <button class="btn btn-lg btn-primary btn-block" id="submit" type="submit">送信</button>
    </form>
  </div>
{/if}
</body>
</html>
