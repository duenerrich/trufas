<?php

public function get_all(){
  $query = $this->db-get('cliente');
  return $query->result();

}


?>
