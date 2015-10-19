<?php /* Smarty version 3.1.27, created on 2015-10-18 11:22:46
         compiled from "/Applications/MAMP/root/public_html/seapa/views/pre_regist/result.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15716399275623027622e859_63655251%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f8b888dbea6fc7fa01e22952642d97d95551a0c' => 
    array (
      0 => '/Applications/MAMP/root/public_html/seapa/views/pre_regist/result.tpl',
      1 => 1445134720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15716399275623027622e859_63655251',
  'variables' => 
  array (
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562302762c1bb6_67311294',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562302762c1bb6_67311294')) {
function content_562302762c1bb6_67311294 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15716399275623027622e859_63655251';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
</head>
<body>
<table>
  <caption>メール送信成功しました。</caption>
  <tr>
    <td class="item">送信先メールアドレス:</td>
    <td><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</td>
  </tr>
</table>
</body>
</html>
<?php }
}
?>