<html>
  <head>
    <title>Cadastro de Usuário Efetuado</title>
  </head>
  <body>
    <h1>Resultado</h1>
    <?php
      if (isset($_GET['user']) && isset($_GET['email'])) {
        echo '<br>Usuário: ', $_GET['user'], '<br>Email: ', $_GET['email'];
      }
     ?>
  </body>
</html>
