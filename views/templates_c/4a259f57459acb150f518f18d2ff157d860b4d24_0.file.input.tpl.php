<?php /* Smarty version 3.1.27, created on 2015-10-26 23:37:53
         compiled from "/Applications/MAMP/root/public_html/seapa/views/pre_regist/input.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1727655020562e3ac18a6074_65490572%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a259f57459acb150f518f18d2ff157d860b4d24' => 
    array (
      0 => '/Applications/MAMP/root/public_html/seapa/views/pre_regist/input.tpl',
      1 => 1445870271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1727655020562e3ac18a6074_65490572',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562e3ac193b677_09182086',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562e3ac193b677_09182086')) {
function content_562e3ac193b677_09182086 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1727655020562e3ac18a6074_65490572';
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
  $.extend(jQuery.validator.messages, {
    required: "必須項目です。",
    email: "有効なメールアドレスを入力してください。"
  });

  $("#signupForm").validate({
    rules: {
      email: {
        required: true,
        email: true
      }
    }
  });
});
  <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="../../js/bootstrap.min.js"><?php echo '</script'; ?>
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
    <form id="signupForm" action="result" class="form-signin required" method="post">
      <h3 class="form-signin-heading">メールアドレス登録</h3>
      <div class="form-group">
        <label for="email" class="sr-only">Email</label>
        <input type="email" id="email" class="form-control" placeholder="Email address" name="email" required autofocus>
      </div>
      <button type="submit" id="submit" class="btn btn-lg btn-primary btn-block" name="submit"/>新規登録</button>
    </form>
  </div>
</body>
</html>
<?php }
}
?>