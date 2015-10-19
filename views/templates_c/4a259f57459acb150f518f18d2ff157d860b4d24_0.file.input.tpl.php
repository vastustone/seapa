<?php /* Smarty version 3.1.27, created on 2015-10-18 11:17:52
         compiled from "/Applications/MAMP/root/public_html/seapa/views/pre_regist/input.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14482919456230150d37114_56666593%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a259f57459acb150f518f18d2ff157d860b4d24' => 
    array (
      0 => '/Applications/MAMP/root/public_html/seapa/views/pre_regist/input.tpl',
      1 => 1445134470,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14482919456230150d37114_56666593',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56230150dc4953_63160316',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56230150dc4953_63160316')) {
function content_56230150dc4953_63160316 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14482919456230150d37114_56666593';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<body>
<form action="result" method="post"><input type="hidden" name="mode" value="email_regist"/>
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