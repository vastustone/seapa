<?php

require_once 'Smarty.class.php';
require_once 'Request.php';

class Dispatcher
{
  private $sysRoot;

  // システムのルートディレクトリを設定
  public function setSystemRoot($path)
  {
    $this->sysRoot = rtrim($path, '/');
  }

  // 振り分け処理実行
  public function dispatch()
  {
    $param = preg_replace('/\/\z/', '', $_SERVER['REQUEST_URI']);

    $params = array();
    if ('' != $param) {
      $params = explode("/", $param);
    }

    $controller = 'index';
    if (0 < count($params)) {
      $controller = $params[1];
    }

    $controllerInstance = $this->getControllerInstance($controller);
    if (null == $controller) {
      header("HTTP/1.0 404 Not Found");
    } 

    $action = 'index';
    if (1 < count($params)) {
      $action = $params[2];
    }

    if (false == method_exists($controllerInstance, $action.'Action')) {
      header("HTTP/1.0 404 Not Found");
      exit;
    }

    $controllerInstance->setSystemRoot($this->sysRoot);
    $controllerInstance->setControllerAction($controller, $action);
    $controllerInstance->run();
  }

  // コントローラークラスのインスタンスを取得
  private function getControllerInstance($controller)
  {
    // １文字目のみ大文字に変換+Controller
    $className = ucfirst(strtolower($controller)).'Controller';
    // コントローラーファイル名
    $controllerFileName = sprintf('%s/controllers/%s.php', $this->sysRoot, $className);

    // ファイル存在チェック
    if (false == file_exists($controllerFileName)) {
      return null;
    }

    // クラスファイルを読み込み
    require_once $controllerFileName;
    // クラスが定義されているかチェック
    if (false == class_exists($className)) {
      return null;
    }

    // クラスインスタンス生成
    $controllerInstance = new $className();

    return $controllerInstance;
  }
}

?>
