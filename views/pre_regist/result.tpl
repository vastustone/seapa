<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
/* フォームからメールアドレスを取得 */
$email = $_POST["email"];

/* エラーメッセージ配列 */
$error = array();

/* データベースに接続 */
$link = mysqli_connect("localhost", "root", "root", "seapa");

/* メールアドレス入力チェック */
if($email == "") {
  array_push($error, "メールアドレスを入力してください。");
} else {
  $pre_user_id = uniqid(rand(100,999));

  $query = "insert into users(pre_id,email) values('$pre_user_id', '$email')";
  $result = mysqli_query($link, $query);

  if($result == false) {
    array_push($error, "データベースに登録できませんでした。");
  } else {
    mb_language("japanese");
    mb_internal_encoding("utf-8");

    $to = $email;
    $subject = "Seapaメンバー登録URL";
    $message = "以下のURLよりメンバー登録してください。\n".
    "http://localhost/regist_form.php?pre_userid=$pre_user_id";
    $header = "From: mail.seapa@gmail.com";

    if(!mb_send_mail($to, $subject, $message, $header, '-f' . 'test@example.jp')) {
      array_push($error, "メールが送信できませんでした。<a href='http://localhost/regist_form.php?pre_userid=$pre_user_id'>遷移先</a>");
    }
  }
}

if(count($error) > 0) {
  foreach($error as $value) {
?>
<table>
  <caption>メールアドレス登録エラー</caption>
  <tr>
    <td class="item">Error:</td>
    <td><?php print $value; ?></td>
  </tr>
</table>
<?php
  }
} else {
?>
<table>
  <caption>メール送信成功しました。</caption>
  <tr>
    <td class="item">送信先メールアドレス:</td>
    <td><?php print $email ?></td>
  </tr>
</table>
<?php
}
?>
</body>
</html>

