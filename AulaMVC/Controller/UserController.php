<?php
  if ( (!empty($_POST['txtUser'])) &&
    (!empty($_POST['txtNome'])) &&
    (!empty($_POST['txtSobrenome'])) &&
    (!empty($_POST['txtEmail'])) &&
    (!empty($_POST['txtIdade'])) &&
    (!empty($_POST['pwdSenha'])) )
  {
    echo "Todos os campos informados!";
  }
  else {
    echo "Informe todos os campos";
  }
 ?>
