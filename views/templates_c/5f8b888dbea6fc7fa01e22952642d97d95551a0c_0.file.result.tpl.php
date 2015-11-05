<?php /* Smarty version 3.1.27, created on 2015-11-04 23:07:22
         compiled from "/Applications/MAMP/root/public_html/seapa/views/pre_regist/result.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1790732833563a111aa9c1d9_20869685%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f8b888dbea6fc7fa01e22952642d97d95551a0c' => 
    array (
      0 => '/Applications/MAMP/root/public_html/seapa/views/pre_regist/result.tpl',
      1 => 1446038182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1790732833563a111aa9c1d9_20869685',
  'variables' => 
  array (
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_563a111ab727f3_28506194',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563a111ab727f3_28506194')) {
function content_563a111ab727f3_28506194 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1790732833563a111aa9c1d9_20869685';
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
    <div class="form-signin">
      <h3 class="form-singin-heading">メールアドレス登録</h3>
      <p>メール送信に成功しました。</p>
      <p>本文に記載のURLから登録を続けてください。</p>
      <p>送信先メールアドレス：<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</p>
    </div>
  </div>
</body>
</html>
<?php }
}
?>