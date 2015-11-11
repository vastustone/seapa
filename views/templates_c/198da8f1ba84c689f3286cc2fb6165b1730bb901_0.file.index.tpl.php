<?php /* Smarty version 3.1.27, created on 2015-11-11 21:29:21
         compiled from "/Applications/MAMP/root/public_html/seapa/views/login/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1733622789564334a1883088_63394774%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '198da8f1ba84c689f3286cc2fb6165b1730bb901' => 
    array (
      0 => '/Applications/MAMP/root/public_html/seapa/views/login/index.tpl',
      1 => 1447244956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1733622789564334a1883088_63394774',
  'variables' => 
  array (
    'pre_userid' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564334a191cf71_40625671',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564334a191cf71_40625671')) {
function content_564334a191cf71_40625671 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1733622789564334a1883088_63394774';
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
    </form>
  </div>
</body>
</html>
<?php }
}
?>