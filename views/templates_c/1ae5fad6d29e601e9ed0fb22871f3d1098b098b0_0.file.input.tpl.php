<?php /* Smarty version 3.1.27, created on 2015-10-20 22:52:13
         compiled from "/Applications/MAMP/root/public_html/seapa/views/regist/input.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11253286195626470de8f7e3_90335440%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ae5fad6d29e601e9ed0fb22871f3d1098b098b0' => 
    array (
      0 => '/Applications/MAMP/root/public_html/seapa/views/regist/input.tpl',
      1 => 1445349131,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11253286195626470de8f7e3_90335440',
  'variables' => 
  array (
    'errorFlg' => 0,
    'pre_userid' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5626470e059371_69279333',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5626470e059371_69279333')) {
function content_5626470e059371_69279333 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11253286195626470de8f7e3_90335440';
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
  $("input[type='submit']").click(function(){
    // エラーメッセージ初期化
    $("#error_user").text('');
    $("#error_pass").text('');
    $("#error_pass_conf").text('');
    var errorFlg = false;

    // 入力チェック
    if($("input[name='username']").val() == "") {
      $("#error_user").text('ユーザ名が入力されていません。');
      errorFlg = true;
    }

    if($("input[name='password']").val() == "") {
      $("#error_pass").text('パスワードが入力されていません。');
      errorFlg = true;
    } else if($("input[name='password']").val().length < 6 || $("input[name='password']").val().length > 16){
      $("#error_pass").text('パスワードは6文字以上16文字以下にしてください。');
      errorFlg = true;
    }
    if($("input[name='password_conf']").val() == "") {
      $("#error_pass_conf").text('パスワードが入力されていません。');
      errorFlg = true;
    } else if($("input[name='password']").val() != $("input[name='password_conf']").val()){
      $("#error_pass_conf").text('パスワードが誤っています。');
      errorFlg = true;
    }

    if (errorFlg) {
      return false;
    }
  });
});
<?php echo '</script'; ?>
>
</head>
<body>
<?php if (isset($_smarty_tpl->tpl_vars['errorFlg']->value)) {?>
<table>
  <caption>メールアドレス登録エラー</caption>
  <tr>
    <td class="item">Error:</td>
    <td>このURLは利用できません。<br>もう一度メールアドレスの登録からお願いします。<br> <a href="../../pre_regist/input">seapaメンバー登録ページ</a></td>
  </tr>
</table>
<?php } else { ?>
<form method="post" action="../confirm">
  <input type="hidden" name="pre_userid" value="<?php echo $_smarty_tpl->tpl_vars['pre_userid']->value;?>
">
  <table>
    <caption>ユーザ情報登録フォーム</caption>
    <tr>
      <td class="item">ユーザ名:</td>
      <td><input type="text" size="30" name="username" value=""><div id="error_user"></div></td>
    </tr>
    <tr>
      <td class="item">パスワード:</td>
      <td><input type="password" size="30" name="password" value="">&nbsp;&nbsp;* 6文字以上16文字以下<div id="error_pass"></div></td>
    </tr>
    <tr>
      <td class="item">パスワード(確認用):</td>
      <td><input type="password" size="30" name="password_conf" value=""><div id="error_pass_conf"></div></td>
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
<?php }?>
</body>
</html>
<?php }
}
?>