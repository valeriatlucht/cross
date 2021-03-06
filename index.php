<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Pessoas</title>
	<!-- jQuery -->
	<script src="js/jquery-2.1.4.js"></script>
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css" />

<?php
    include_once __DIR__."/autoload.php";
?>
</head>
<body>
    <div class="container">
        <div class="box">
            <h2>Cadastro de pessoas</h2>
        </div>

        <div class="box">
<?php
		include_once __DIR__."/view/formulario.php";
?>
        </div>

        <div class="box">
<?php
        include_once __DIR__."/view/tabela.php";
?>
        </div>

        <div class="box rodape">
            <p>Disponível no <a href="https://github.com/valeriatlucht/cross">GitHub</a></p>
            <p>Desenvolvido por <span>Valéria Lucht</span></p>
        </div>
    </div>
    
    <script src="./js/script.js"></script>
    
</body>
</html>