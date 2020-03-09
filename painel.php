<?php
session_start();
include('verifica_login.php');
?>

<center><h1>BEM VINDO,   <?php echo $_SESSION['nome'];?></h1>
    <h2><a href="logout.php" >Sair</a></h2></center><br>

<html >
<head>
  <meta charset="UTF-8">
  <title>Painel </title>
    
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">   
</head>

<body>
     
<script type="text/javascript" >
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            document.getElementById('ibge').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            document.getElementById('ibge').value=(conteudo.ibge);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                document.getElementById('ibge').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>
<meta charset="utf-8">
<h2>Cadastrar cliente</h2>
    <form action="processa.php" method="POST">
                          
        <input name="ne" type="text" class="input is-large" placeholder="Nome da Empresa" autofocus>
        <input name="cnpj" type="text" class="input is-large" placeholder="CNPJ">
        <input name="tel" class="input is-large" type="password" placeholder="Telefone"><br>
        <input name="nr" class="input is-large" type="password" placeholder="Nome do Responsavél"><br>
        <input name="email" class="input is-large" type="password" placeholder="Email"><br>
 
        <input name="cep" class="input is-large" type="text" id="cep" placeholder="CEP" value="" size="10" maxlength="9"
            onblur="pesquisacep(this.value);" /><br> 
        <input name="rua" class="input is-large" type="text" id="rua" placeholder="Rua" /></label>
        <input name="numero" class="input is-large" type="text" id="rua" placeholder="Numero" /></label>
        <input name="complemento" class="input is-large" type="text" id="rua" placeholder="Complemento" /></label>
        <input name="bairro" class="input is-large" type="text" id="bairro" placeholder="Bairro" />
        <input name="cidade" class="input is-large" type="text" id="cidade" placeholder="Cidade" />
        <input name="uf" class="input is-large" type="text" id="uf" size="2" placeholder="Estado" />
        <input name="ibge" class="input is-large" type="text" id="ibge" size="8" placeholder="IBGE" />
        <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>

?>
</body>
</html>
 