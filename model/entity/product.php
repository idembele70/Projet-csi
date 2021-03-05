<?php

class Product {
    private $_idProduct;
    private $_ref;
    private $_nom;
    private $_description;
  
    public function __construct(string $idProduct, string $ref, string $nom, string $description) {
      $this->_idProduct = $idProduct;
      $this->_ref = $ref;
      $this->_nom = $nom;
      $this->_description = $description;
    }
  
    public function getIdProduct(): string {return $this->_idProduct;}
    public function getRef(): string { return $this->_ref; }
    public function getNom(): string { return $this->_nom; }
    public function getDescription(): string { return $this->_description; }
    
}
