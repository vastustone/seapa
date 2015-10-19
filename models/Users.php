<?php

class Users extends ModelBase
{
  protected $name = 'users';

  public function addEmail($data)
  {
    $sql = sprintf("INSERT INTO %s (pre_id, email) values('%s', '%s')", $this->name, $data[0], $data[1]);
    $res = $this->db->query($sql);
    return $res;
  }

  public function getPreUser($id)
  {
    $sql = sprintf("select email from %s where pre_id = '%s'", $this->name, $id);
    $res = $this->db->query($sql);
    return $res;
  }
}

?>
