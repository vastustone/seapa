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
      <td>{$username}<input type="hidden" name="username" value="{$username}"></td>
    </tr>
    <tr>
      <td class="item">パスワード:</td>
      <td>{$password}<input type="hidden" name="password" value="{$password}"></td>
    </tr>
    <tr>
      <td class="item">メールアドレス:</td>
      <td>{$email}<input type="hidden" name="email" value="{$email}"></td>
    </tr>
  </table>
  <div><input type="submit" value=" 登 録 "></div>
</form>
</body>
</html>
