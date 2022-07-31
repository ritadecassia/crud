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
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>
    <div class="container">

		<div class="row">
			<h1>Lista de produtos</h1>


			<table>
				<tr>
					<td>Usuário</td>
					<td class="text-center">Senha</td>
				</tr>

			
			
			<?php
			$contador = 0;
			foreach($produtos as $produto) {
				echo '<tr>';
				echo '<td class="text-left">'.$produto->usuario.'</td>';
				echo '<td class="text-center">'.$produto->senha.'</td>';
				echo '<td class="text-left;"><a href="/produtos/editar">Editar </a></td>';
				echo '<td class="text-left;"><a href="/produtos/editar">Apagar </a></td>';
				echo '<td class="text-left;"><a href="/produtos/editar">Enviar foto </a></td>';
				echo '</tr>';
			}

			?>

			</table>
		</div>
	</div>
  </body>
</html>