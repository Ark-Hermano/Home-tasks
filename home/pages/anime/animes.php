<?php
	$acao = 'recuperaranime';
	require '../back/tarefa_controller.php';
?>


<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Plataforma</title>

		<link rel="stylesheet" href="../../modelo/modelop/css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


		<style type="text/css">
			div.sec { margin-top: 8px  }

		</style>

		<script>
			function editar(id) {

				//criar um form de edição
				let form = document.createElement('form')
				form.action = 'tarefa_controller.php?acao=atualizar'
				form.method = 'post'
				form.className = 'row'

				//criar um input para entrada do texto
				let inputTarefa = document.createElement('input')
				inputTarefa.type = 'text'
				inputTarefa.name = 'tarefa'
				inputTarefa.className = 'col-9 form-control'
				inputTarefa.value = txt_tarefa

				//criar um input hidden para guardar o id da tarefa
				let inputId = document.createElement('input')
				inputId.type = 'hidden'
				inputId.name = 'id'
				inputId.value = id

				//criar um button para envio do form
				let button = document.createElement('button')
				button.type = 'submit'
				button.className = 'col-3 btn btn-info'
				button.innerHTML = 'Atualizar'

				//incluir inputTarefa no form
				form.appendChild(inputTarefa)

				//incluir inputId no form
				form.appendChild(inputId)

				//incluir button no form
				form.appendChild(button)

				//teste
				//console.log(form)

				//selecionar a div tarefa
				let tarefa = document.getElementById('tarefa_'+id)

				//limpar o texto da tarefa para inclusão do form
				tarefa.innerHTML = ''

				//incluir form na página
				tarefa.insertBefore(form, tarefa[0])

			}

			function remover(id) {
				location.href = 'animes.php?acao=removeranime&id='+id;
			}

			function marcarRealizada(id) {
				location.href = 'animes.php?acao=marcarRealizadaanime&id='+id;
			}
		</script>

	</head>

	<body  class= "bg-dark">
		<nav class="navbar navbar-light bg-dark">
			<div class="container">
				<a class="navbar-brand text-info" href="#">
					
					Plataforma
				</a>
			</div>
		</nav>

		

		<div class="container app bg-dark ">
			<div class="row">
				<div class="col-md-3 menu bg-dark">
					<ul class="list-group">
						<li class="list-group-item"><a href="animesp.php">Animes pendentes</a></li>
						<li class="list-group-item info"><a href="#">Animes</a></li>
						
					</ul>
				</div>

				<div class="col-md-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4 class="text-info">Novo Anime</h4>
								<hr />

								<form method="post" action="../back/tarefa_controller.php?acao=anime">
									<div class="form-group">
										<label class="text-info" >Nome do anime</label>
										<input type="text" class="form-control" name="anime" >
									</div>

									<button class="btn btn-info">Enviar</button>
								</form>
							</div>
						</div>
					</div>
					<div class="container pagina sec ">
						<div class="row">
							<div class="col">
								<h4 class="text-info">Todos animes</h4>
								<hr />

								<?php foreach($tarefas as $indice => $tarefa) { ?>
									<div class="row mb-3 d-flex align-items-center tarefa">
										<div class="col-sm-9 text-info" id="tarefa_<?= $tarefa->id ?>">
											<?= $tarefa->anime ?>  
										</div>
										<div class="col-sm-3 mt-2 d-flex justify-content-between">
											<i class="fas fa-trash-alt fa-lg text-danger" onclick="remover(<?= $tarefa->id ?>)"></i>
											
											<?php if($tarefa->status == 'pendente') { ?>
												<i class="fas fa-edit fa-lg text-info" onclick="editar(<?= $tarefa->id ?>, <?= $tarefa->anime ?>)"></i>
												<i class="fas fa-check-square fa-lg text-success" onclick="marcarRealizada(<?= $tarefa->id ?>)"></i>
											<?php } ?>
										</div>
									</div>

								<?php } ?>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>