<?php include 'cabecalho.inc.html'; ?>

  <form action="cadastro.php" method="post">
    <div id="cadastro">
      <h1 class="mid">Cadastro de novo cliente</h1>

      <table>
        <tr>
          <td class="right"><label for="cadastro-nome">Nome completo: </label></td>
          <td><input type="text" name="cadastro-nome" size=70><br></td>
        </tr>

        <tr>
          <td class="right"><label for="cadastro-email">E-mail para contato: </label></td>
          <td><input type="email" name="cadastro-email" size=70 ><br></td>
        </tr>

        <tr>
          <td class="right"><label for="cadastro-usuario">Usuário (máximo de 15 caracteres): </label></td>
          <td><input type="text" name="cadastro-usuario" size=20 maxlength=15><br></td>
        </tr>

        <tr>
          <td class="right"><label for="cadastro-senha">Senha (maximod de 15 caracteres): </label></td>
          <td><input type="password" name="cadastro-senha" size=20 maxlength=15 ><br></td>
        </tr>

        <tr>
          <td class="right"><label for="cadastro-rsenha">Repita sua senha: </label></td>
          <td><input type="password" name="cadastro-rsenha" size=20 maxlength=15 ><br></td>
        </tr>

        <tr>
          <td class="right"><label for="cadastro-end">Endereço completo: </label></td>
          <td><input type="password" name="cadastro-end" size=70><br></td>
        </tr>

        <tr>
          <td class="right"><label for="cadastro-cidade">Cidade/Estado: </label></td>
          <td><input type="password" name="cadastro-cidade" size=70 ><br></td>
        </tr>
      </table><br>

      <div class="mid">
        <button type="button" name="button" onclick="">Cadastrar novo cliente</button>
      </div>


    </div>
  </form>
</body>
