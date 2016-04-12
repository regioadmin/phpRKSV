<?php
 class RSKV {
  
  protected $cashBoxId;
  protected $turnOverCounterAESKey;
  protected $companyID;
  
    

  public function standardReceipt()
            {
            # dieses "function" heisst wie die Klasse - sobald die
            # Klasse mit NEW erstellt wird, wird diese function
            # als erstes aufgerufen - ohne dass wir sie manuell
            # starten
            }
            
  public function __get($property) {
   if (property_exists($this, $property)) {
    return $this->$property;
   }
  }

  public function __set($property, $value) {
   if (property_exists($this, $property)) {
    $this->$property = $value;
   }
  }
}
?>
