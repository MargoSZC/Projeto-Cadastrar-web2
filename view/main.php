<?php
include "../Util.php";

	session_start();
?>
<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
		<h3>Sistema Academico</h3>
		<?php
				echo "Seja bem vindo usuário: " .$_SESSION['login'], "<a href='login.php'>Sair</a>";
		?>
    <br>
    <br>
    <a href='UsuarioList.php'> Listar usuários</a>
  </body>
</html>