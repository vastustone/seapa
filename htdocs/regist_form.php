<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
/* pre_userid有効チェック */
$pre_userid = $_GET['pre_userid'];
$errorFlag = true;

/* データベース接続設定 */
$link = mysqli_connect("localhost", "root", "root", "seapa");

/* 取得したユニークIDをキーに登録されたメールアドレスを取得 */
$query = "select email from users where pre_id = '$pre_userid'";
$result = mysqli_query($link,$query);

/* データベースより取得したメールアドレスを表示 */
if(mysqli_num_rows($result) > 0) {
  $errorFlag = false;
  $data = mysqli_fetch_array($result);
  $email = $data['email'];
}

if($errorFlag) {
?>
<table>
  <caption>メールアドレス登録エラー</caption>
  <tr>
    <td class="item">Error:</td>
    <td>このURLは利用できません。<br>もう一度メールアドレスの登録からお願いします。<br> <a href="email_form.php">seapaメンバー登録ページ</a></td>
  </tr>
</table>
<?php
} else {
  if(count($error) > 0) {
    foreach($error as $value) {
    print $value."<br>";
    }
  }
?>
<form method="post" action="regist_confirm.php">
  <input type="hidden" name="mode" value="regist_confirm">
  <input type="hidden" name="pre_userid" value="<?php print $pre_userid; ?>">
  <table>
    <caption>ユーザ情報登録フォーム</caption>
    <tr>
      <td class="item">ユーザ名:</td>
      <td><input type="text" size="30" name="input_username" value=""></td>
    </tr>
    <tr>
      <td class="item">パスワード:</td>
      <td><input type="password" size="30" name="input_password" value="">&nbsp;&nbsp;* 6文字以上16文字以下</td>
    </tr>
    <tr>
      <td class="item">パスワード(確認用):</td>
      <td><input type="password" size="30" name="input_password_conf" value=""></td>
    </tr>
    <tr>
      <td class="item">E-mail:</td>
      <td><?php print $email; ?><input type="hidden" name="input_email" value="<?php print $email; ?>"></td>
    </tr>
  </table>
  <div><input type="submit" value=" 送 信 "></div>
</form>
<?php
}
?>
</body>
</html>
