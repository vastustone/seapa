<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
/* 入力フォームからパラメータを取得 */
$formList = array('mode', 'input_username', 'input_password', 'input_email');

/* ポストデータを取得しパラメータと同名の変数に格納 */
foreach($formList as $value) {
  $$value = $_POST[$value];
}

/* エラーメッセージの初期化 */
$error = array();

/* データベース接続設定 */
$link = mysqli_connect("localhost", "root", "root", "seapa");

/* ユーザーIDチェック */
$query = "select username from users where username = '$input_username'";
$resultId = mysqli_query($link, $query);

if(mysqli_num_rows($resultId) > 0) {
  array_push($error,"このユーザ名はすでに登録されています。");
}

if(count($error) == 0) {
  mysqli_query($link, "begin");

  $query = "update users set username='$input_username', password='$input_password' where email = '$input_email'";
  $result = mysqli_query($link, $query);

  if($result) {
    mysqli_query($link, "commit");
  } else {
    mysqli_query($link, "rollback");
    array_push($error, "データベースに接続できませんでした。");
  }
}
if(count($error) == 0) {
?>
<table>
  <caption>データベース登録完了</caption>
  <tr>
    <td class="item">Thanks:</td>
    <td>登録が完了しました。</td>
  </tr>
</table>
<?php
/* エラー内容表示 */
} else {
?>
<table>
  <caption>データベース登録エラー</caption>
  <tr>
    <td class="item">Error:</td>
    <td>
    <?php
      foreach($error as $value) {
        print $value;
    ?>
    </td>
  </tr>
</table>
<?php
      }
}
?>
</body>
</html>
