<?php

class clientes_model extends CI_Model {

public function get($id){
  // Voce primeiro faz um filtro no banco para saber quais dados possuem o mesmo id
  $query = $this->db->where('id', $id);
  // Logo depois voce traz todos esses itens em um array
$query = $this->db->get('clientes');
if ($query->result()){ // Caso o array estava com alguma informação ele retorna esse array
    return $query->result();
} else { 
  echo "Id nao encontrado";
}

  }



public function get_all ()
{
  $query = $this->db->get('clientes');
  return $query->result();
  }

  public function insert ($array = array())
  {
        if ($this->db->insert('clientes', $array))
        {
            echo "Sucesso ao adicionar";
        } else {
            echo "Falha ao adicionar no banco";
        }
  }

  public function delete ($id){
    $this->db->delete('clientes', $id);
    echo "Excluido com sucesso";
  }
}
?>
