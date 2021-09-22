<?php
session_start();
/*include('verifica_login.php');*/
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Produtos - Cine MaX</title>

		<link rel="stylesheet" href="css\reset.css">
		<link rel="stylesheet" href="css\style.css">
	</head>
	<body>
		<header>
      <div class="caixa">
        <h1 class ="logo"><img   src="img\log1.png"></h1>

        <nav>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="produtos.html">Produtos</a></li>
            <li><a href="homelogin.php">Login </a></li>
            <li><a href="contato.html">Contato</a></li>
          </ul>
        </nav>
      </div>
    </header>

		<main>
			<ul class="produtos">
				<li>
					<h2>Ação</h2>

					<fieldset class="produto-descricao">
					<legend>Selecione o Filme:</legend>
					<select>
						<option> RED: Aposentados e Perigosos </option>
						<option> A Guerra do Amanhã </option>
						<option> Arranha-Céu: Coragem sem Limite </option>
					</select>
				  </fieldset>

				</li>
				<li>
					<h2>Comedia</h2>
					
					<fieldset class="produto-descricao">
					<legend>Selecione o Filme:</legend>
					<select>
						<option> Ele é demais </option>
						<option> A Barraca do Beijo 3 </option>
						<option> O Guia da Família Perfeita </option>
						<option> Divã </option>
					</select>
				  </fieldset>
				</li>


				<li>
					<h2>Romance</h2>

					<fieldset class="produto-descricao">
					<legend>Selecione o Filme:</legend>
					<select>
						<option> Coincidências do Amor </option>
						<option> Se a Rua Beale Falasse </option>
						<option> Simplesmente Acontece </option>
					</select>
				  </fieldset>

				</li>
			</ul>
			<button  href= "logout.php"  type="submit"  >SAIR</button>
		</main>

		<footer>
			
			<p class="copyright">&copy; Copyright Cine MaX - 2021</p>
		</footer>
	</body>
</html>