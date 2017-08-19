<?php
  /**
   * Classe Celular
   *
   *  @author João Pedro Maffezzolli
   */
  class Celular {
    public $nome;
    public $marca;
    public $tamanhoTela;
    public $memoriaInterna;
    public $memoriaRAM;
    public $preco;

    function Celular($nome, $marca, $tamanhoTela, $memoriaInterna, $memoriaRAM, $preco) {
      $this->nome = $nome;
      $this->marca = $marca;
      $this->tamanhoTela = $tamanhoTela;
      $this->memoriaInterna = $memoriaInterna;
      $this->memoriaRAM = $memoriaRAM;
      $this->preco = $preco;
    }

    function ImprimeDados() {
      echo $this->nome, "&nbsp";
      echo $this->marca, "&nbsp";
      echo $this->tamanhoTela, "&nbsp";
      echo $this->memoriaInterna, "&nbsp";
      echo $this->memoriaRAM, "&nbsp";
      echo $this->preco, "<br>";
    }

  }

 ?>
