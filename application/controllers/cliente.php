<?php
class Cliente extends CI_Controller
{

      function __construct()
      {
          // Herdo do pai para aqui
          parent::__construct();
          $this->load->model('clientes_model', 'model_clientes');//o segundo parametro eu defino como apelido
      }


   public function index (){
     $array['clientes'] = $this->model_clientes->get_all();
     $this->load->view('templates/header');
      $this->load->view('clientes/principal', $array);
      $this->load->view('templates/footer');

   }
public function cadastrar (){
  $titulo['title'] = 'Cadastrar' ;
  $this->load->view('templates/header');
  $this->load->view('clientes/cadastrar', $titulo);
  $this->load->view('templates/footer.php');
}

public function salvar (){
    $array = array (
      'nome' => $this->input->post('nome'),
      'telefone' => $this->input->post('telefone') ,
      'endereco' => $this->input->post('endereco')
    );
      $this->model_clientes->insert($array);
}


public function exists ($id = null){
  print_r($this->model_clientes->get($id)) ;
}

  public function excluir ($id = null){
      $this->model_clientes->delete($id);
      redirect('cliente');

  }
}
?>
