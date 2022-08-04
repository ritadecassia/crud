<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos_model extends CI_Model {

    public function getProdutos() {
        $query = $this->db->get('loja');
        return $query->result();
    }


    public function addProduto($dados=NULL) {
        if($dados != NULL) {
            $this->db->insert('loja', $dados);
  
        }
    }

    public function getProdutoById($id=NULL){
        if($id!=NULL):
            $this->db->where('id', $id);
            //loja
            $query = $this->db->get("loja");
            return $query->row();

        endif;


        
    }

}