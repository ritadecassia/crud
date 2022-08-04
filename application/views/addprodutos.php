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
    <title>Novo cadastro</title>
    <meta charset="utf-8">
  </head>
  <body>

  
    <div class="container">

		<div class="row">
			<h1>Novo produto</h1>
			<a href="/crud" >Voltar para o início</a>

      <form action="/crud/produtos/salvar" name="form_add" method="post">
  <div class="form-group" >
    <label for="exampleInputEmail1">Usuário</label>
    <input type="text" name="id" class="form-control"  placeholder="id">
    
  </div>
  <div class="form-group" >
    <label for="exampleInputEmail1">Usuário</label>
    <input type="text" name="nome" class="form-control"  placeholder="nome">
    
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="text" name="senha" class="form-control"  placeholder="senha">
  </div>

  <div class="form-group" >
    <label for="exampleInputEmail1">Usuário</label>
    <input type="text" name="foto" class="form-control"  placeholder="foto">
    
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
		</div>
	</div>
  </body>
</html>