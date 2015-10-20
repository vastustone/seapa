<?php

class RegistController extends ControllerBase
{
  public function inputAction()
  {
    $get = $this->request->getParam();
    $pre_userid = $get[0];
    $userModel = new Users();
    $stmt = $userModel->getPreUser($pre_userid);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if($result != null) {
      $email = $result['email'];
      $this->view->assign('pre_userid', $pre_userid);
      $this->view->assign('email', $email);
    } else {
      $errorFlg = 1;
      $this->view->assign('errorFlg', $errorFlg);
    }
  }

  public function resultAction()
  {
    $post = $this->request->getPost();
    $email = $post["email"];
    $error = array();
    
    if ("" == $email) {
      array_push($error, "メールアドレスを入力してください");
    } else {
      $pre_user_id = uniqid(rand(100,999));
      $userModel = new Users();
      $result = $userModel->addEmail(array($pre_user_id, $email));

      if (false == $result) {
        array_push($error, "データベースに登録できませんでした。");
      } else {
        mb_language("japanese");
        mb_internal_encoding("utf-8");

        $to = $email;
        $subject = "seapaメンバー登録URL";
        $message = "以下のURLよりメンバー登録を行ってください。\n".
                   "http://localhost/regist/input/$pre_user_id";
        $header = "From: mail.seapa@gmail.com";

        if (!mb_send_mail($to, $subject, $message, $header, '-f'.'mail.seapa@gmail.com')) {
          array_push($error, "メールが送信できませんでした。<a href='http://localhost/regist/input/$pre_user_id'>遷移先</a>");
        }
        $this->view->assign('email', $email);
      }
    }
  }

  public function confirmAction()
  {
    $post = $this->request->getPost();
    $email = $post["email"];
    $username = $post["username"];
    $password = $post["password"];

    $this->view->assign('email', $email);
    $this->view->assign('username', $username);
    $this->view->assign('password', $password);
  }
}

?>
