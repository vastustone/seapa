<?php /* Smarty version 3.1.27, created on 2015-10-19 21:44:48
         compiled from "/Applications/MAMP/root/public_html/seapa/views/regist/input.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16955895865624e5c0bcfc36_25540985%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ae5fad6d29e601e9ed0fb22871f3d1098b098b0' => 
    array (
      0 => '/Applications/MAMP/root/public_html/seapa/views/regist/input.tpl',
      1 => 1445258163,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16955895865624e5c0bcfc36_25540985',
  'variables' => 
  array (
    'pre_userid' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5624e5c0c5f4e4_17089420',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5624e5c0c5f4e4_17089420')) {
function content_5624e5c0c5f4e4_17089420 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16955895865624e5c0bcfc36_25540985';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
</head>
<body>
<table>
  <caption>メールアドレス登録エラー</caption>
  <tr>
    <td class="item">Error:</td>
    <td>このURLは利用できません。<br>もう一度メールアドレスの登録からお願いします。<br> <a href="../../pre_regist/input">seapaメンバー登録ページ</a></td>
  </tr>
</table>
<form method="post" action="../confirm">
  <input type="hidden" name="pre_userid" value="<?php echo $_smarty_tpl->tpl_vars['pre_userid']->value;?>
">
  <table>
    <caption>ユーザ情報登録フォーム</caption>
    <tr>
      <td class="item">ユーザ名:</td>
      <td><input type="text" size="30" name="username" value=""></td>
    </tr>
    <tr>
      <td class="item">パスワード:</td>
      <td><input type="password" size="30" name="password" value="">&nbsp;&nbsp;* 6文字以上16文字以下</td>
    </tr>
    <tr>
      <td class="item">パスワード(確認用):</td>
      <td><input type="password" size="30" name="password_conf" value=""></td>
    </tr>
    <tr>
      <td class="item">E-mail:</td>
      <td><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
<input type="hidden" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"></td>
    </tr>
  </table>
  <div><input type="submit" value=" 送 信 "></div>
</form>
</body>
</html>
<?php }
}
?>