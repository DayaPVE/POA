<?php

class Financiera {
  
    private $idfinanciera;
    private $detallefinanciera;
    
    function __construct($idfinanciera, $detallefinanciera) {
        $this->idfinanciera = $idfinanciera;
        $this->detallefinanciera = $detallefinanciera;
    }

    function getIdfinanciera() {
        return $this->idfinanciera;
    }

    function getDetallefinanciera() {
        return $this->detallefinanciera;
    }

    function setIdfinanciera($idfinanciera) {
        $this->idfinanciera = $idfinanciera;
    }

    function setDetallefinanciera($detallefinanciera) {
        $this->detallefinanciera = $detallefinanciera;
    }


}
