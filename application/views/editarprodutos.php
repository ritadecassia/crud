<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
  <head>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	
	<style>
		@font-face {
  font-family: 'Glyphicons Halflings';
  src: url('http://darmatec.com.br/fonts/glyphicons-halflings-regular.eot');
}

		
	</style>


	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar cadastro</title>
    <meta charset="utf-8">
  </head>
  <body>
 

    <div class="container">

		<div class="row">
			<h1>Atualizar cadastro</h1>
			<a href="/crud" >Voltar para o início</a>

            <form action="/crud/produtos/editar/" name="form_add" method="post">
  <div class="form-group" >
    <label for="exampleInputEmail1">Id</label>
    <input type="text" name="id" value="<?php print_r($loja->id); ?>" class="form-control"  >
    
  </div>
  <div class="form-group" >
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" name="nome"  class="form-control" value="<?php print_r($loja->nome); ?>"   placeholder="nome">
    
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="text" name="senha" class="form-control" value="<?php print_r($loja->senha); ?>"   placeholder="senha">
  </div>

  <div class="form-group" >
    <label for="exampleInputEmail1">Foto</label>
    <input type="text" name="foto" value="<?php print_r($loja->foto); ?>"  class="form-control"  placeholder="foto">
    
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
		</div>
	</div>
  </body>
</html>