<?php

class Perso {
    private $_idClient;
    private $_nom;
    private $_adresseMail;
    private $_adresseLivraison;
    private $_adresseFacturation;
  
    public function __construct(string $idClient, string $nom, string $adresseMail, string $adresseLivraison, string $_adresseFacturation) {
      $this->_idClient = $idClient;
      $this->_nom = $nom;
      $this->_adresseMail = $adresseMail;
      $this->_adresseLivraison = $adresseLivraison;
      $this->_adresseFacturation = $adresseFacturation;
    }
  
    public function getIdClient(): string {return $this->_idClient; }
    public function getNom(): string { return $this->_nom; }
    public function getAdresseMail(): string { return $this->_adresseMail; }
    public function getAdresseLivraison(): string { return $this->_adresseLivraison; }
    public function getAdresseFacturation(): string { return $this->_adresseFacturation; }
}
  