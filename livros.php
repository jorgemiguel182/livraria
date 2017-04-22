<?php require_once 'cabecalho.inc.php'; ?>
<form action="valida_cadastro_livro" method="post">
  <div id="cadastro_livros">
    <h1 class="mid">Cadastro de livros</h1>

    <table>
      <tr>
        <td class="right"><label for="titulo">Titulo: </label></td>
        <td><input type="text" name="titulo" size="70"></td>
      </tr>

      <tr>
        <td class="right"><label for="autor">Autor: </label></td>
        <td><input type="text" name="autor" size="70"></td>
      </tr>

      <tr>
        <td class="right"><label for="preco">Preço (R$): </label></td>
        <td><input type="text" name="preco" size="15"></td>
      </tr>

      <tr>
        <td class="right"><label for="categoria">Categoria: </label></td>
        <td><select name="categoria">
          <option value="suspense">Suspense</option>
          <option value="informatica" selected>Informática</option>
          <option value="infantil">Infantil</option>
          </select></td>
      </tr>

      <tr>
        <td class="right"><label for="imagem">Imagem: </label></td>
        <td><input type="file" name="imagem" size="70"></td>
      </tr>

      <tr>
        <td class="right"><label for="quantidade">Quantidade: </label></td>
        <td><input type="number" name="quantidade" size="70"></td>
      </tr>
    </table>
<br><br>
    <div class="mid">
      <input type='submit' value='Cadastrar'>
    </div>



  </div>

</form>
<?php require_once 'rodape.inc.php'; ?>
