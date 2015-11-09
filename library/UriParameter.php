<?php

class UriParameter extends RequestVariables
{
  protected function setValues()
  {
    // パラメータ取得（末尾の/は削除）
    $param = preg_replace('/\/\z/','',$_SERVER['REQUEST_URI']);

    $params = array();
    if ('' != $param) {
      // パラメータを/で分割
      $params = explode('/', $param);
    }

    // 3番目以降のパラメータを純に_valuesに格納
    $i = 0;
    if (3 < count($params)) {
      for ($i=0; $i<count($params)-3; $i++) {
        $this->_values[$i] = $params[$i+3];
      }
    }
  }
}

?>
