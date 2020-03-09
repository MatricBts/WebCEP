<?php
function get_endereco($cep){
  // formatar o cep removendo caracteres nao numericos
  $cep = preg_replace("/[^0-9]/", "", $cep);
  $url = "http://viacep.com.br/ws/$cep/xml/";
  $xml = simplexml_load_file($url);
  return $xml;
}
?>
<meta charset="utf-8">
<h1>Pesquisar Endereço</h1>
    <form action="" method="post">
    <input type="text" name="ne" placeholder="Nome da Empresa"/>
    <input type="number" name="cnpj" placeholder="CNPJ" />
    <input type="text" name="tel" placeholder="Telefone"/>
    <input type="text" name="nr" placeholder="Nome do responsavel"/>
    <input type="text" name="em" placeholder="Email"/>
    <input type="text" name="cep">
    <button type="submit">Pesquisar Endereço</button>
    <button type="submit">Confirmar</button>

  <?php
  $cep = $_POST['cep'];
  ?>
</form>
<?php if($cep){ ?>
<h2>Resultado da Pesquisa</h2>
<p>
  <?php $endereco = get_endereco($cep); ?>
  <b>CEP: </b> <?php echo $endereco->cep; ?><br>
  <b>Logradouro: </b> <?php echo $endereco->logradouro; ?><br>
  <b>Bairro: </b> <?php echo $endereco->bairro; ?><br>
  <b>Localidade: </b> <?php echo $endereco->localidade; ?><br>
  <b>UF: </b> <?php echo $endereco->uf; ?><br>
</p>
<?php }

?>