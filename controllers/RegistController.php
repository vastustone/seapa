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
    $username = $post["username"];
    $password = $post["password"];
    $error = array();
    
    $userModel = new Users();
    $result = $userModel->addUser(array($username, $password, $email));

    if (false == $result) {
      $errorFlg = 1;
      $this->view->assign('errorFlg', $errorFlg);
    } else {
      $this->view->assign('username', $username);
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
