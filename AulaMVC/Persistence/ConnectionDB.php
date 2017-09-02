<?php
  class ConnectionDB extends PDO {
    private static $instance = null;

    public function ConnectionDB($dsn, $usuario, $password) {
      parent::__construct($dsn, $usuario, $password);
    }

    public static function getInstance() {
      if(!isset(self::$instance)) {
        try {
          self::$instance = new ConnectionDB("mysql:dbname=ecomm;host=localhost:3307","root","usbw");
          echo "Conectado ao banco de dados";
        } catch (Exception $e) {
          echo "Ocorreram erros ao tentar conectar ao banco de dados";
          echo $e;
          exit();
        }
      }

      return self::$instance;
    }
  }
 ?>
