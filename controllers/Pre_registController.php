<?php

class Pre_registController extends ControllerBase
{
  public function inputAction()
  {
    
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
      $result = new Users()->addEmail(array($pre_user_id, $email));

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
      }
    }
  }
}

?>
