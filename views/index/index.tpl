<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ログイン</title>
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
      email: {
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
    <form method="post" id="signinForm" class="form-signin" action="../../dashboard/index">
      <input type="hidden" name="pre_userid" value="{$pre_userid}">
      <input type="hidden" name="email" value="{$email}">
      <h3 class="form-signin-heading">ログイン</h3>
      <div class="form-group">
        <label for="email" class="sr-only">Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="" required autofocus>
      </div>
      <div class="form-group">
        <label for="password" class="sr-only">パスワード</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="パスワード" value="" required>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" value="remember-me">次回から自動的にログイン
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" id="submit" type="submit">ログイン</button>
      <p id="signup" class="help-block">はじめての方は<a href="/pre_regist/input" class="btn btn-link">新規登録</a></p>
    </form>
  </div>
</body>
</html>
