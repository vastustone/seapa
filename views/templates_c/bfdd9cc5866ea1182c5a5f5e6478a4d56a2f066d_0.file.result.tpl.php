<?php /* Smarty version 3.1.27, created on 2015-11-07 16:15:54
         compiled from "/Applications/MAMP/root/public_html/seapa/views/regist/result.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1510056147563da52ac9b272_12098128%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfdd9cc5866ea1182c5a5f5e6478a4d56a2f066d' => 
    array (
      0 => '/Applications/MAMP/root/public_html/seapa/views/regist/result.tpl',
      1 => 1446880525,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1510056147563da52ac9b272_12098128',
  'variables' => 
  array (
    'errorFlg' => 0,
    'pre_userid' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_563da52ad9ce00_64659186',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563da52ad9ce00_64659186')) {
function content_563da52ad9ce00_64659186 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1510056147563da52ac9b272_12098128';
?>
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
<?php if (isset($_smarty_tpl->tpl_vars['errorFlg']->value)) {?>
    <div class="form-signin">
      <h3 class="form-signin-heading">ユーザ登録エラー</h3>
      <p>ユーザ登録に失敗しました。</p>
      <p>管理者に問い合わせてください。</p>
      <p><a href="#">トップページへ</p>
    </div>
<?php } else { ?>
    <div class="form-signin">
      <input type="hidden" name="pre_userid" value="<?php echo $_smarty_tpl->tpl_vars['pre_userid']->value;?>
">
      <h3 class="form-signin-heading">ユーザ登録完了</h3>
      <div class="form-group">
        <p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
さん、ようこそ！</p>
        <p class="form-control-static">早速ダッシュボードに移動しましょう！</p>
      </div>
      <a href="../../dashboard/index" class="btn btn-lg btn-info btn-block">ダッシュボードへ</a>
    </div>
<?php }?>
  </div>
</body>
</html>
<?php }
}
?>