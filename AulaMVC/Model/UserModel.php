<?php
  /**
   * @author João Pedro Maffezzolli
   */
  class UserModel {
    private $user;
    private $nome;
    private $sobrenome;
    private $idade;
    private $senha;
    private $email;

    public function __set($propriedade, $valor) {
      $this->propriedade = $valor;
    }

    public function __get($propriedade) {
      return $this->propriedade;
    }
  }

 ?>
