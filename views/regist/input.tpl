<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>メールアドレス登録フォーム</title>
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
  <script type="text/javascript">
$(function(){
  $("input[type='submit']").click(function(){
    // エラーメッセージ初期化
    $("#error_user").text('');
    $("#error_pass").text('');
    $("#error_pass_conf").text('');
    var errorFlg = false;

    // 入力チェック
    if($("input[name='username']").val() == "") {
      $("#error_user").text('ユーザ名が入力されていません。');
      errorFlg = true;
    }

    if($("input[name='password']").val() == "") {
      $("#error_pass").text('パスワードが入力されていません。');
      errorFlg = true;
    } else if($("input[name='password']").val().length < 6 || $("input[name='password']").val().length > 16){
      $("#error_pass").text('パスワードは6文字以上16文字以下にしてください。');
      errorFlg = true;
    }
    if($("input[name='password_conf']").val() == "") {
      $("#error_pass_conf").text('パスワードが入力されていません。');
      errorFlg = true;
    } else if($("input[name='password']").val() != $("input[name='password_conf']").val()){
      $("#error_pass_conf").text('パスワードが誤っています。');
      errorFlg = true;
    }

    if (errorFlg) {
      return false;
    }
  });
});
</script>
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
<!--
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> -->
        登録済みの方はログイン
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
    <form method="post" class="form-signin" action="../confirm">
      <input type="hidden" name="pre_userid" value="{$pre_userid}">
      <h3 class="form-signin-heading">ユーザ情報登録</h3>
      <div class="form-group">
        <label for="username" class="sr-only">ユーザ名</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="ユーザ名" value="" required autofocus>
      </div>
      <div class="form-group">
        <label for="password" class="sr-only">パスワード</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="パスワード" value="" required>
        <p>* 6文字以上16文字以下</p>
      </div>
      <button class="btn btn-lg btn-primary btn-block" id="submit" type="submit">送信</button>
    </form>
  </div>
{/if}
</body>
</html>
