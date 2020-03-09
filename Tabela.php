<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sua Página</title>
  <link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bulma.min.css" />
  <link rel="stylesheet" type="text/css" href="css/login.css">  
  <link rel="stylesheet" type="text/css" href="css/meni.css">
</head>
<body>
  
   <div class="menu-container">
        <ul class="menu clearfix">
            <li><a href="painel.php">Cadastro</a></li> 
            <li><a href="tabela.php">Clientes</a></li>        
            <li><h2><a href="logout.php" >Sair</a></h2></center></li>
        </ul> <br>
    
  <table id="minhaTabela">
    <thead>
      <tr>
        <th>Nome Empresa</th>
        <th>Telefone</th>
        <th>CEP</th>
        <th>Ação</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Alumiaço</td>
        <td>(71)3034-5900</td>
        <td><a href="https://www.google.com/maps/dir/-12.9606042,-38.4744778/endere%C3%A7o+alumia%C3%A7o/@-12.9586169,-38.4808729,16z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x7161372c993644cf:0xcd327706118dd403!2m2!1d-38.4772764!2d-12.957437">
                40323-215</a></td>
        <td><a href="">Alterar </a><a href="">Deletar</a></td>
      </tr>
      <tr>
        <td>GSA Auto Center</td>
        <td>(71)(71) 98793-4618 </td>
        <td>41185-210</td>
        <td><a href="">Alterar </a><a href="">Deletar</a></td>
      </tr>
      <tr>
        <td>Shopping da Bahia</td>
        <td>(71) 3350-5216</td>
        <td>41820-972</td>
        <td><a href="">Alterar </a><a href="">Deletar</a></td>
      </tr>
    </tbody>
  </table>
  
  <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  <script>
  $(document).ready(function(){
      $('#minhaTabela').DataTable({
          "language": {
                "lengthMenu": "Mostrando _MENU_ registros por página",
                "zeroRecords": "Nada encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(filtrado de _MAX_ registros no total)"
            }
        });
  });
  </script>
  
</body>
</html>