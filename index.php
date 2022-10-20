<?php

$empresas = [
	[
		"nome" => "Microsoft",
		"contato" =>"Bill Gates",
		"pais" => "Novo México",
		"fundacao" =>"1975"
	],
	[
		"nome" => "Tesla, Inc",
		"contato" =>"Elon Musk",
		"pais" =>"Califórnia",
		"fundacao" =>"2003"
	],
	[
		"nome" =>"High Company",
		"contato" =>"Diogo Roccon",
		"pais" =>"Brasil",
		"fundacao" =>"2012"
	],
	[
		"nome" =>"Fiat",
		"contato" =>"Giocanni Agnelli",
		"pais" =>"Italia",
		"fundacao" =>"1899"
	],
	[
		"nome" =>"Death Row Records",
		"contato" =>"Dr.Dre",
		"pais" =>"Los Angeles",
		"fundacao" =>"1991"
	]
	
];



$title = "Home";
include("includes/header.php") ?>
<link rel="stylesheet" href="styles/global.css">
<nav class="navbar navbar-expand-lg bg-light">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="pagina 2.html">Pagina 2</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="formulario.php">formulario</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
						Banco de Dados
					</a>
					<div class="dropdown-menu">
					<a class="dropdown-item" href="http://localhost/phpmyadmin/sql.php?db=celke&table=usuarios&pos=0">Banco de Dados</a>
					<a class="dropdown-item" href="listar.php">Lista de registros </a>
					<!-- <a class="dropdown-item" href="#">Something else here</a> -->
					</div>
				</li>
			</ul>
		</div>
	</div>
</nav>

<h3 style="border:2px tomato;"> TESTANDO COMANDOS </h3>
<img src="https://ipaconline.com.br/assets/imagens/logo.jpg" alt="IPAC" width="120px" height="auto">

<p style="color:red;border:4px solid pink">CORUJA</p>

<a href="pagina 2.html">direcionando para o site 2</a>

<img class="d-none d-md-block d-xl-none" src="img/download.jfif" alt="coruja" width="350" height="350">
<!--<img src="download.jfif" alt="coruja" width="350" height="350"> -->


<p style="font-size:25px"><b>modificado por joão</b></p>
<p style="font-size:25px"><b> exemplo de "b" ou "strong"</b></p>
<p style="font-size:25px"><strong> exemplo de "b" ou "strong"</strong></p>

<p><mark> exemplo de de "mark"</mark></p>

<p><i> exemplo de "i" ou "em"</i></p>
<small> exemplo de "small" </small>
<del> exemplo de "del" </del></p>
<ins> exemplo de "ins"</ins></p>
teste <sup> exemplo de "sup"</sup>teste</p>
teste<sub> exemplo de "sub"</sub>teste</p>
<hr>

<p> font-size:|<br> 12.5px !important; </p>
<hr>



<p>The <abbr title="World Health Organization">WHO</abbr> was founded in 1948.</p>

<p>Marking up abbreviations can give useful information to browsers, translation systems and search-engines.</p>

<div class="d-flex w-100 justify-content-between">
	<p>
		<a href="https://escolakids.uol.com.br/ciencias/corujas.htm" target="_blank"><img src="img/coruja.webp" alt="gif de coruja" style="width:42px;height:42px;"></a>
	</p>

	<button onclick="document.location='https://www.ipaconline.com.br'" class="btn btn-warning ml-2">botão
		teste</button>
</div>

<style>
	a:link {
		color: green;
		background-color: transparent;
		text-decoration: none;
	}

	a:visited {
		color: black;

		background-color: transparent;
		text-decoration: none;
	}

	a:hover {
		color: red;
		background-color: transparent;
		text-decoration: underline;
	}

	a:active {
		color: yellow;
		background-color: transparent;
		text-decoration: underline;
	}

	table,
	th,
	td {
		border: 1px solid black;
	}
</style>


	<h2>A basic HTML table</h2>

	<!-- table, th, td {
	border:1px solid black;
	} -->
	
	<div class="table-responsive">
		<table style="width:100%" >
			<!--table é a tabela -->



			<tr>
				<!--o "tr" seria as linhas -->
				<th>Empresa</th> <!-- "th" seria o nome das colunas-->
				<th>fundador</th>
				<th>País</th>
				<th>fundação</th>
			</tr>

		<?php 
		//var_dump($empresas);
			foreach ($empresas as $key => $emp) :

				//var_dump($emp, "empresa:$key");

		?>

				<tr>
					<td class=""><?= $emp["nome"] ?></td>
					<!-- o "td" seria as celula (encontro de linha com a coluna) -->
					<td class="bg"><?= $emp["contato"] ?></td>
					<td class="bg"><?= $emp["pais"] ?></td>
					<td class="bg"><?= $emp["fundacao"] ?></td>
				</tr>

		<?php

			endforeach
		?>

		</table>

	</div>

	<p>To undestand the example better, we have added borders to the table.</p>



	</style>

	<p><a href="https://www.youtube.com/?hl=pt&gl=BR" target="_blank">youtube</a> </p>

	

<?php include("includes/footer.php") ?>