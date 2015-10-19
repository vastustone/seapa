<?php /* Smarty version 3.1.27, created on 2015-10-19 21:38:53
         compiled from "/Applications/MAMP/root/public_html/seapa/views/regist/confirm.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3608220805624e45d7f8990_10233833%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f3d60dbeec7fbf4dde5daf648dd8330666c34b2' => 
    array (
      0 => '/Applications/MAMP/root/public_html/seapa/views/regist/confirm.tpl',
      1 => 1445258052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3608220805624e45d7f8990_10233833',
  'variables' => 
  array (
    'username' => 0,
    'password' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5624e45d8ff991_09992042',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5624e45d8ff991_09992042')) {
function content_5624e45d8ff991_09992042 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3608220805624e45d7f8990_10233833';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
</head>
<body>
<div class="error-msg">
</div>
<form method="post" action="../result">
  <table>
    <caption>入力情報確認ページ</caption>
    <tr>
      <td class="item">ユーザ名:</td>
      <td><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
<input type="hidden" name="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
"></td>
    </tr>
    <tr>
      <td class="item">パスワード:</td>
      <td><?php echo $_smarty_tpl->tpl_vars['password']->value;?>
<input type="hidden" name="password" value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
"></td>
    </tr>
    <tr>
      <td class="item">メールアドレス:</td>
      <td><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
<input type="hidden" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"></td>
    </tr>
  </table>
  <div><input type="submit" value=" 登 録 "></div>
</form>
</body>
</html>
<?php }
}
?>