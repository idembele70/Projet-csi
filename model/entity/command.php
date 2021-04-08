<?php

class Command {
    private $_idCommand;
    private $_ref;
    private $_dateCreation;
    private $_idClient;

    public function __construct(string $idCommand, string $ref, string $dateCreation, string $idClient) {
      $this->_idCommand = $idCommand;
      $this->_ref = $ref;
      $this->_dateCreation = $dateCreation;
      $this->_idClient = $idClient;
    }
  
    public function getIdCommand(): string {return $this->_idCommand; }
    public function getRef(): string { return $this->_ref; }
    public function getDateCreation(): string { return $this->_dateCreation; }
    public function getIdClient(): string { return $this->_idClient; }
}
  