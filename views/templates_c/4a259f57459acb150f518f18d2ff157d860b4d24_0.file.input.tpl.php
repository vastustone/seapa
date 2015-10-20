<?php /* Smarty version 3.1.27, created on 2015-10-20 21:37:04
         compiled from "/Applications/MAMP/root/public_html/seapa/views/pre_regist/input.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:542729264562635700250d9_30432684%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a259f57459acb150f518f18d2ff157d860b4d24' => 
    array (
      0 => '/Applications/MAMP/root/public_html/seapa/views/pre_regist/input.tpl',
      1 => 1445344622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '542729264562635700250d9_30432684',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562635700d34b0_32081755',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562635700d34b0_32081755')) {
function content_562635700d34b0_32081755 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '542729264562635700250d9_30432684';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<?php echo '<script'; ?>
 type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
$(function(){
  $("#submit").click(function(){
      if($("#email").val() == ""){
        $("#error").text('メールアドレスが入力されていません。');
        return false;
      }
  });
});
<?php echo '</script'; ?>
>
</head>
<body>
<form action="result" method="post"><input type="hidden" name="mode" value="email_regist"/>
  <table><caption>メールアドレス登録フォーム</caption>
    <tr>
      <td class="item">E-mail:</td>
      <td><input type="text" id="email" name="email" size="40" /><div class="error" id="error"></div></td>
    </tr>
  </table>
  <div><input type="submit" id="submit" name="submit" value=" 送 信 "/></div>
</form>
</body>
</html>
<?php }
}
?>