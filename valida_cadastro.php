<?php
  require_once 'conecta_mysql.inc.php';

  $nome           = $_POST['cadastro-nome'];
  $email          = $_POST['cadastro-email'];
  $usuario        = $_POST['cadastro-usuario'];
  $senha          = $_POST['cadastro-senha'];
  $rsenha         = $_POST['cadastro-rsenha'];
  $end            = $_POST['cadastro-end'];
  $cidade         = $_POST['cadastro-cidade'];

  $validaUser = $mysqli->query("SELECT usuario FROM clientes WHERE usuario = '".$usuario."'");
  $validaEmail = $mysqli->query("SELECT email FROM clientes WHERE email = '".$email."'");

  if ((!$row = $validaEmail->fetch_assoc()) && (!$row = $validaUser->fetch_assoc())){
    if( $senha == $rsenha){
      $insereUser = $mysqli->query("INSERT INTO clientes (usuario, senha, nome, email, endereco, cidade) VALUES ('".$usuario."', '".$senha."', '".$nome."', '".$email."', '".$end."', '".$cidade."')");
      if ($mysqli->affected_rows){
        echo "Usuario '.$nome.' cadastrado com sucesso, prosseguir para tela de login";
        header( "refresh:5;url=testeindex.php" );
      }
    }
    else{
      echo "Senhas nao conferem!";
    }
  }
  else{
    echo "Usuario e/ou email cadastrado, tentar novamente.";
  }




 ?>
