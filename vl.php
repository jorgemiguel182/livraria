<?php session_start();
require_once 'conecta_mysql.inc.php';

//pega usuario e senha da tela de login e se check de adm esta flagado
$login = $_POST['index-usuario'];
$senha = $_POST['index-senha'];

//verifica usuario normal ou adm
$resultUser = $mysqli->query("SELECT usuario, senha FROM clientes WHERE usuario = '".$login."' AND senha= '".$senha."'");
$resultADM = $mysqli->query("SELECT usuario, senha FROM admins WHERE usuario = '".$login."' AND senha= '".$senha."'");


if (isset($_POST['index-adm'])){
  if ($row = $resultADM->fetch_assoc()) {
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    header('location:admin.php');
  }else
    echo '<h2>usuario ou senha incorreto adm</h2>';

}

else {
  if ($row = $resultUser->fetch_assoc()) {
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    header('location:loja.php');
  }else{
    echo '<h2>usuario ou senha incorreto user</h2>';
  }
}
