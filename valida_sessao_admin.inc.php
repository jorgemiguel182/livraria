<?php session_start();
require_once 'conecta_mysql.inc.php';

if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location:testeindex.php');
}

$logado = $_SESSION['login'];
?>
