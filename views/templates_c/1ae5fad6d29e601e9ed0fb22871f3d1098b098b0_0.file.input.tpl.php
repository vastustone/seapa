<?php /* Smarty version 3.1.27, created on 2015-10-27 22:37:57
         compiled from "/Applications/MAMP/root/public_html/seapa/views/regist/input.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1909781726562f7e35e7c005_23339006%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ae5fad6d29e601e9ed0fb22871f3d1098b098b0' => 
    array (
      0 => '/Applications/MAMP/root/public_html/seapa/views/regist/input.tpl',
      1 => 1445953074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1909781726562f7e35e7c005_23339006',
  'variables' => 
  array (
    'errorFlg' => 0,
    'pre_userid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562f7e36032116_37356145',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562f7e36032116_37356145')) {
function content_562f7e36032116_37356145 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1909781726562f7e35e7c005_23339006';
?>
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
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
  <![endif]-->
  <?php echo '<script'; ?>
 type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="../../js/jquery.validate.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript">
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
<?php echo '</script'; ?>
>
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
<?php if (isset($_smarty_tpl->tpl_vars['errorFlg']->value)) {?>
    <div class="form-signin">
      <h3 class="form-signin-heading">メールアドレス登録エラー</h3>
      <p>このURLは利用できません。</p>
      <p>もう一度メールアドレスの登録からお願いします。</p>
      <p><a href="../../pre_regist/input">seapaメンバー登録ページ</p>
    </div>
<?php } else { ?>
    <form method="post" class="form-signin" action="../confirm">
      <input type="hidden" name="pre_userid" value="<?php echo $_smarty_tpl->tpl_vars['pre_userid']->value;?>
">
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
<?php }?>
</body>
</html>
<?php }
}
?>