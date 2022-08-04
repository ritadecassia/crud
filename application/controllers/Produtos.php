<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		//carrega nosso model
		$this->load->model('produtos_model', 'produtos');
		//pega dados do model
		$data['produtos'] = $this->produtos->getProdutos();

		$this->load->view('listarprodutos', $data);
	}

	public function add() {
		//carrega o model Produtos
		$this->load->model('produtos_model', 'produtos');

		//carrega a view
		$this->load->view('addprodutos');
	}

	public function salvar() {
		if($this->input->post('nome')==NULL) {
			echo 'O campo usuário é obrigatório';
			echo '<a href="/crud/produtos/add">Voltar</a>';
		}else{
			$this->load->model('produtos_model', 'produtos');

			$dados['id'] = $this->input->post("id");
			$dados['nome'] = $this->input->post("nome");
			$dados['senha'] = $this->input->post("senha");
			$dados['foto'] = $this->input->post("foto");

			$this->produtos->addProduto($dados);

			redirect('http://localhost/crud/');
		}
	}


	public function editar($id=NULL){
		if($id==NULL) {
			redirect('http://localhost/crud/');
		}

		$this->load->model('produtos_model', 'produtos');

		$query = $this->produtos->getProdutoById($id);

		if($query==NULL){
			redirect('http://localhost/crud/');
		}
		

		$dados['loja'] = $query;
		

		$this->load->view('editarprodutos', $dados);

		




	}
}
