<?php
  include "../Persistence/ConnectionDB.php";

  class UserDAO {
    public function __construct() {
      $this->connection = ConnectionDB::getInstance();
    }

    public function insertUser($user) {
      try {
        $status = $this->connection->prepare("insert into users(id, user, nome, sobrenome, idade, password, email) values(null,?,?,?,?,?,?)");

        $status->bindValue(1, $user->user);
        $status->bindValue(2, $user->nome);
        $status->bindValue(3, $user->sobrenome);
        $status->bindValue(4, $user->idade);
        $status->bindValue(5, $user->password);
        $status->bindValue(6, $user->email);

        $status->execute();

        $this->connection = null;
      } catch (PDOException $e) {
        "Ocorreram erros ao inserir novo usuario";
      }
    }
  }
 ?>
