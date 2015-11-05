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
<head>
<meta charset="UTF-8">
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
      <h3 class="form-signin-heading">ユーザ登録エラー</h3>
      <p>ユーザ登録に失敗しました。</p>
      <p>管理者に問い合わせてください。</p>
      <p><a href="#">トップページへ</p>
    </div>
{else}
    <form method="post" id="signinForm" class="form-signin" action="../confirm">
      <input type="hidden" name="pre_userid" value="{$pre_userid}">
      <h3 class="form-signin-heading">ユーザ登録完了</h3>
      <div class="form-group">
        <p class="form-control-static">{$username}さん、ようこそ！</p>
        <p class="form-control-static">早速ダッシュボードに移動しましょう！</p>
      </div>
      <button class="btn btn-lg btn-info btn-block" id="submit" type="submit">ダッシュボードへ</button>
    </form>
{/if}
  </div>
</body>
</html>
