<?php /* Smarty version 3.1.27, created on 2015-10-17 00:36:18
         compiled from "/Applications/MAMP/root/public_html/seapa/views/pre_regist/input.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12012543295621197294c305_35847707%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a259f57459acb150f518f18d2ff157d860b4d24' => 
    array (
      0 => '/Applications/MAMP/root/public_html/seapa/views/pre_regist/input.tpl',
      1 => 1445009490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12012543295621197294c305_35847707',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56211972a25986_83358754',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56211972a25986_83358754')) {
function content_56211972a25986_83358754 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12012543295621197294c305_35847707';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<body>
<form action="pre_regist/result" method="post"><input type="hidden" name="mode" value="email_regist"/>
  <table><caption>メールアドレス登録フォーム</caption>
    <tr>
      <td class="item">E-mail:</td>
      <td><input type="text" name="email" size="40" /></td>
    </tr>
  </table>
  <div><input type="submit" name="submit" value=" 送 信 "/></div>
</form>
</body>
</html>

<?php }
}
?>