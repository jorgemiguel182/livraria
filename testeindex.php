<?php require_once 'cabecalho.inc.php'; ?>


    <form action="vl.php" method="POST">

    <div id="index">
        <h1>Seja bem-vindo à Livraria Banzai!</h1>
        <h3>Para sua comodidade, efetue o login:</h3>

        <div id="index-input">

          <label for="index-usuario">Usuário: </label>
          <input type="text" name="index-usuario" ><br>

          <label for="index-senha">Senha: </label>
          <input type="text" name="index-senha" >
        </div><br>

        <input type="checkbox" name="index-adm" value="adm">
        <label for="index-adm">Efetuar <i>login</i> como Administrador </label><br><br>

        <input type='submit' value='Login'>

        <br><br>

            <a href="cadastro.php">Cadastro de novo usuario</a>

    </div>

    </form>
<?php require_once 'rodape.inc.php'; ?>
