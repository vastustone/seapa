<?php
// セッション作成
session_start();

if(!isset($_POST['login'])) {
  // ログインフォームを表示
  inputForm();
} else {
  // フォームの値を取得
  $formUserId = $_POST['formUserid'];
  $formPassword = $_POST['formPassword'];

  // ID, PASSWORDが未入力の場合
  if(($formUserId == "") || ($formPassword == "")) {
    // エラー関数の呼び出し
    error(1);
  } else {
    // ID, PASSWORD入力あり
    // データベースへ接続
    $link = mysqli_connect("localhost", "root", "root", "seapa");

    // usersテーブルのデータを取得
    $query = "select * from users where email = '$formUserId'";
    $result = mysqli_query($link, $query); 

    if(mysqli_num_rows($result) > 0) {
      $data = mysqli_fetch_array($result);
      if($data['password'] == $formPassword) {
        $_SESSION['loginUser'] = $formUserId;
        header("Location:test.php");
      } else {
        // 認証失敗
        error(2);
      }
    } else {
      // 認証失敗
      error(3);
    }
  }
}
?>
<?php
  // 入力画面表示
  function inputForm() {
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ログイン</title>
</head>
<body>
  <h1>ログインページ</h1>
  <form action="login.php" method="post">
  <label for="userid">ユーザID</label>:
  <input type="text" name="formUserid" id="userid"/>
  <br />
  <label for="password">パスワード</label>:
  <input type="text" name="formPassword" id="password"/>
  <br />
  <input type="submit" name="login" value="ログイン" />
</form>
</body>
</html>
<?php
}

// エラー表示
function error($errorType) {
  switch($errorType) {
    case 1:
      $errorMsg = "IDとパスワードを入力してください。";
      break;
    case 2:
      $errorMsg = "パスワードが違います。";
      break;
    case 3:
      $errorMsg = "IDが違います。";
      break;
  }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ログイン</title>
</head>
<body>
  <h1>エラーページ</h1>
<?php
  print $errorMsg;
?>
</form>
</body>
</html>
<?php
}
?>
