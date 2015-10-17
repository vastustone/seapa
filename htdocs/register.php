<?php
// セッション開始
session_start();

$db['host'] = "localhost";
$db['user'] = "root";
$db['pass'] = "root";
$db['dbname'] = "seapa";

// エラーメッセージの初期化
$errorMessage = "";

// ログインボタンが押された場合
if (isset($_POST["login"])) {
  // 1.ユーザIDの入力チェック
  if (empty($_POST["userid"])) {
    $errorMessage = "ユーザIDが未入力です";
  } else if (empty($_POST["password"])) {
    $errorMessage = "パスワードが未入力です";
  }

  // 2.ユーザIDとパスワードが入力されていたら認証する
  if (!empty($_POST["userid"]) && !empty($_POST["password"])) {
    // mysqlへの接続
    $mysqli = new mysqli($db['host'], $db['user'], $db['pass']);
    if ($mysqli->connect_errno) {
      print('<p>データベースへの接続に失敗しました。</p>' . $mysqli->connect_error);
      exit();
    }

    // データベースの選択
    $mysqli->select_db($db['dbname']);

    // 入力値のサニタイズ
    $userid = $mysqli->real_escape_string($_POST["userid"]);

    // クエリの実行
    $query = "INSERT INTO auth (mail, username, pass, admin) values($_POST["mail"], $_POST["userid"], password_hash($_POST["password"], PASSWORD_BCRYPT))";
    $result = $mysqli->query($query);
    if (!$result) {
      print('クエリーが失敗しました。' . $mysqli->error);
      $mysqli->cose();
      exit();
    }

    // データベースの切断
    $mysqli->close();

    // 3.画面から入力されたパスワードとデータベースから取得したパスワードのハッシュを比較
    if (password_verify($_POST["password"], $db_hashed_pwd)) {
      // 4.認証成功なら、セッションIDを新規に発行する
      session_regenerate_id(true);
      $_SESSION["USERID"] = $_POST["userid"];
      //header("Location: main.php");
      exit;
    }
    else {
      // 認証失敗
      $errorMessage = "ユーザIDあるいはパスワードに誤りがあります。";
    }
  } else {
    // 未入力なら何もしない
  }
}

?>

<!doctype html>
<html>
  <head>
  <meta charset="UTF-8">
  <title>サンプルアプリケーション</title>
  </head>
<body>
  <h1>ログイン機能　サンプルアプリケーション</h1>
  <!-- $_SERVER('PHP_SELF')はXSSの危険性があるので、actionは空にしておく -->
  <form id="loginForm" name="loginForm" action="" method="POST">
  <fieldset>
  <legend>ログインフォーム</legend>
  <div><?php echo $errorMessage ?></div>
  <label for="userid">ユーザID</label><input type="text" id="userid" name="userid" value="">
  <br>
  <label for="password">パスワード</label><input type="password" id="password" name="password" value="">
  <br>
  <input type="submit" id="login" name="login" value="ログイン">
  </fieldset>
  </form>
  </body>
</html>

