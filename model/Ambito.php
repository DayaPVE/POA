<?php
class Ambito {
    private $idambito;
    private $idfinanciera;
    private $detalleambito;
    
    function __construct($idambito, $idfinanciera, $detalleambito) {
        $this->idambito = $idambito;
        $this->idfinanciera = $idfinanciera;
        $this->detalleambito = $detalleambito;
    }

    function getIdambito() {
        return $this->idambito;
    }

    function getIdfinanciera() {
        return $this->idfinanciera;
    }

    function getDetalleambito() {
        return $this->detalleambito;
    }

    function setIdambito($idambito) {
        $this->idambito = $idambito;
    }

    function setIdfinanciera($idfinanciera) {
        $this->idfinanciera = $idfinanciera;
    }

    function setDetalleambito($detalleambito) {
        $this->detalleambito = $detalleambito;
    }

}
