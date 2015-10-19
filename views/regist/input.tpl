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
  <input type="hidden" name="pre_userid" value="{$pre_userid}">
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
      <td>{$email}<input type="hidden" name="email" value="{$email}"></td>
    </tr>
  </table>
  <div><input type="submit" value=" 送 信 "></div>
</form>
</body>
</html>
