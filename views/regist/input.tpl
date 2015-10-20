<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript">
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
</script>
</head>
<body>
{if isset($errorFlg)}
<table>
  <caption>メールアドレス登録エラー</caption>
  <tr>
    <td class="item">Error:</td>
    <td>このURLは利用できません。<br>もう一度メールアドレスの登録からお願いします。<br> <a href="../../pre_regist/input">seapaメンバー登録ページ</a></td>
  </tr>
</table>
{else}
<form method="post" action="../confirm">
  <input type="hidden" name="pre_userid" value="{$pre_userid}">
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
      <td>{$email}<input type="hidden" name="email" value="{$email}"></td>
    </tr>
  </table>
  <div><input type="submit" value=" 送 信 "></div>
</form>
{/if}
</body>
</html>
