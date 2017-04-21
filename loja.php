<?php include 'cabecalho.inc.html'; ?>
<?php require_once 'conecta_mysql.inc.php';

$dados = $mysqli->query('select * from livros order by titulo');
$linha = $dados->fetch_assoc();
/* $total = $dados->affected_rows; */

?>

<div>
  <table>
    <?php do { ?>
      <tr>
        <td><img src="<?php echo $linha['imagem'] ?>" alt="<?php echo $linha['titulo'] ?>"></td>
      </tr>
      <tr>
        <td><b>Titulo</b>: <?php echo $linha['titulo'] ?></td>
        <td><b>Autor:</b> <?php echo $linha['autor'] ?></td>
        <td><b>Preço:</b> <?php echo $linha['preco'] ?></td>
        <td><b>Quantidade</b>: <?php echo $linha['qtde'] ?></td>
      </tr>
    </table>
    <br>
    <hr>
    <?php } while ($linha = ($linha = $dados->fetch_assoc())); ?>
  </div>
</body>
</html>
