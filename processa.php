<?php
	include_once("conexao3.php");
  
        $ne = mysqli_real_escape_string($conn, $_POST['ne']);
        $cnpj = mysqli_real_escape_string($conn, $_POST['cnpj']);
        $tel = mysqli_real_escape_string($conn, $_POST['tel']);
        $nr = mysqli_real_escape_string($conn, $_POST['nr']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $cep = mysqli_real_escape_string($conn, $_POST['cep']);
	$endereco = mysqli_real_escape_string($conn, $_POST['rua']);
	$numero = mysqli_real_escape_string($conn, $_POST['numero']);
	$complemento = mysqli_real_escape_string($conn, $_POST['complemento']);
	$bairro = mysqli_real_escape_string($conn, $_POST['bairro']);
	$cidade = mysqli_real_escape_string($conn, $_POST['cidade']);
	$estado = mysqli_real_escape_string($conn, $_POST['uf']);
	
	$result_usuario = "INSERT INTO usuarios (
                nome_empresa,
                cnpj,
                telefone,
                nome_responsavel,
                email,
		cep, 
		endereco,
                numero,
                complemento,
		bairro, 
		cidade, 
		estado, 
		created) VALUES (
		'$ne',
                '$cnpj',
                '$tel',
                '$nr',
                '$email',
                '$cep', 
		'$endereco',
                '$numero',
                '$complemento',
		'$bairro', 
		'$cidade', 
		'$estado',  
		NOW())";
		$resultado_usuario = mysqli_query($conn, $result_usuario); 

                

header('Location: painel.php');
exit; 
                ?>