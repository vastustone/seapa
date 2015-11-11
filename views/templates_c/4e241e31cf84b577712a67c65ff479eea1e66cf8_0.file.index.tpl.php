<?php /* Smarty version 3.1.27, created on 2015-11-11 21:52:07
         compiled from "/Applications/MAMP/root/public_html/seapa/views/index/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1920972130564339f7eaf247_31130590%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e241e31cf84b577712a67c65ff479eea1e66cf8' => 
    array (
      0 => '/Applications/MAMP/root/public_html/seapa/views/index/index.tpl',
      1 => 1447246325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1920972130564339f7eaf247_31130590',
  'variables' => 
  array (
    'pre_userid' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564339f802d5a3_45168804',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564339f802d5a3_45168804')) {
function content_564339f802d5a3_45168804 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1920972130564339f7eaf247_31130590';
?>
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
 type="text/javascript" src="../../js/messages_ja.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="../../js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript">
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
<?php echo '</script'; ?>
>
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
      <input type="hidden" name="pre_userid" value="<?php echo $_smarty_tpl->tpl_vars['pre_userid']->value;?>
">
      <input type="hidden" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
">
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
<?php }
}
?>