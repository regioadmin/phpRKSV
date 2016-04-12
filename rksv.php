<?php
 class RSKV {
  protected $value;
    RK_SUITE(0),                                            //Registrierkassenalgorithmuskennzeichen
    CASHBOX_ID(1),                                          //Kassen-ID
    RECEIPT_IDENTIFIER(2),                                  //Belegnummer
    RECEIPT_DATE_AND_TIME(3),                               //Beleg-Datum-Uhrzeit
    SUM_TAX_SET_NORMAL(4),                                  //Betrag-Satz-Normal
    SUM_TAX_SET_ERMAESSIGT1(5),                             //Betrag-Satz-Ermaessigt-1
    SUM_TAX_SET_ERMAESSIGT2(6),                             //Betrag-Satz-Ermaessigt-2
    SUM_TAX_SET_NULL(7),                                    //Betrag-Satz-Null
    SUM_TAX_SET_BESONDERS(8),                               //Betrag-Satz-Besonders
    ENCRYPTED_TURN_OVER_VALUE(9),                           //Stand-Umsatz-Zaehler-AES256-ICM
    CERTIFICATE_SERIAL_NUMBER_OR_COMPANYID_AND_KEYID(10),   //Zertifikat-Seriennummer (or Ordnungszahl Unternehmen plus KEY-ID)
    CHAINING_VALUE_PREVIOUS_RECEIPT(11),                    //Sig-Voriger-Beleg
    SIGNATURE_VALUE(12);                                    //Signatur

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
