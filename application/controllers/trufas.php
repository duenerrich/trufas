<?php

class Trufas extends CI_Controller
{
    function __construct()
    {
        // Herdo do pai para aqui
        parent::__construct();
        $this->load->model('tbtrufas_model', 'model_trufas');//o segundo parametro eu defino como apelido
    }


    public function index()
    {

        $envio['titulo'] = 'Trufas SA';
        $envio['trufas'] = $this->model_trufas->get_all(); // chamando o método que usei para consultar e trazer infomações do banco
        $this->load->view('templates/header');
        $this->load->view('trufas/principal' , $envio);
        $this->load->view('templates/footer');
    }

    public function info($id = null)
    {
        print_r($this->model_trufas->get($id));
    }
    public function cadastrar ()
    {
        $this->load->view('templates/header');
        $this->load->view('trufas/cadastrar.php');
        $this->load->view('templates/footer');
    }

    public function salvar ()
    {
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">','</div>');

        $this->form_validation->set_rules('sabor', 'Sabor', 'required|min_length[3]');
        $this->form_validation->set_rules('quantidade', 'Quantidade', 'required|integer');
        $this->form_validation->set_rules('preco', 'Preco', 'required|decimal');

        if (!$this->form_validation->run()){
            $this->cadastrar();
        } else {
          if ($this->model_trufas->insert()){
            echo "Sucesso";
          } else {
            $this->index();
          }
        }

    }

    public function preco ($id = null)
    {
        echo "Trufa {$id}  - 3.70$";
    }

    public function editar ($id = null){
      $this->load->view('templates/header');
      $this->load->view('trufas/editar', array('trufas' => $this->model_trufas->edit($id)));
      $this->load->view('templates/footer');
    }

    public function update (){
      $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">','</div>');

      $this->form_validation->set_rules('sabor', 'Sabor', 'required|min_length[3]');
      $this->form_validation->set_rules('quantidade', 'Quantidade', 'required|integer');
      $this->form_validation->set_rules('preco', 'Preco', 'required|decimal');

      if (!$this->form_validation->run()){
          $this->editar($this->input->post('id'));
      } else {
        if ($this->model_trufas->input->post('id')){
          $this->model_trufas->update($this->input->post('id'));
          echo "Sucesso ao editar";
          $this->index();
        } else {
              $this->index();
        }

        }
      }

      public function excluir ($id = null){
          $this->model_trufas->excluir($id);
            redirect('trufas');
          }
}


?>
