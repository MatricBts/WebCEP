<?php
include("conexao.php"); // caminho do seu arquivo de conexão ao banco de dados
$consulta = "SELECT * FROM usuario";

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Tutorial</title>
</head>
<body>
  <table border="1">
    <tr>
      <td>Código</td>
      <td>Nome</td>
      <td>E-mail</td>
      <td>Data de Cadastro</td>
      <td>Ação</td>
    </tr>
    <?php { ?>
    <tr>
      <td><?php echo $dado['usuario']; ?></td>
      <td><?php echo $dado['senha']; ?></td>
      <td><?php echo $dado['nome']; ?></td>
      <td><?php echo date('d/m/Y', strtotime($dado['data_cadastro'])); ?></td>
      <td>
        <a href="usu_editar.php?codigo=<?php echo $dado['usu_codigo']; ?>">Editar</a>
        <a href="usu_excluir.php?codigo=<?php echo $dado['usu_codigo']; ?>">Excluir</a>
      </td>
    </tr>
    <?php } ?>
  </table>
</body>
</html>