<?php

class Cart {
    private $_idClient;
    private $_idProduct;
    private $_nbrProduct;
  
    public function __construct(int $idClient, int $idProduct, int $nbrProduct) {
      $this->_idClient = $idClient;
      $this->_nom = $nom;
      $this->_prenom = $prenom;
      $this->_adresseMail = $adresseMail;
      $this->_adresseLivraison = $adresseLivraison;
      $this->_adresseFacturation = $adresseFacturation;
    }
  
    public function getIdClient(): string {return $this->_idClient; }
    public function getNom(): string { return $this->_nom; }
    public function getPrenom(): string { return $this->_prenom; }
    public function getAdresseMail(): string { return $this->_adresseMail; }
    public function getAdresseLivraison(): string { return $this->_adresseLivraison; }
    public function getAdresseFacturation(): string { return $this->_adresseFacturation; }

    public function getDatas(): string {
      return  '<div><span>'.$this->_idClient.'</span><span>'.$this->_nom.'</span><span>'.$this->_prenom.'</span><span>'.$this->_adresseMail.'</span><span>'.$this->_adresseLivraison.'</span><span>'.$this->_adresseFacturation.'</span></div>';
    }
}
  