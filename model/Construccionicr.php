<?php


class Construccionicr {
    
    private $idicr;
    private $idambito;
    private $denominacionicr;
    private $descripcionicr;
    private $calculoicr;
    private $periodicidadicr;
    private $medidaicr;
    private $fuenteicr;
    private $tendenciaicr;
    private $otrosicr;
    
    function __construct($idicr, $idambito, $denominacionicr, $descripcionicr, $calculoicr, $periodicidadicr, $medidaicr, $fuenteicr, $tendenciaicr, $otrosicr) {
        $this->idicr = $idicr;
        $this->idambito = $idambito;
        $this->denominacionicr = $denominacionicr;
        $this->descripcionicr = $descripcionicr;
        $this->calculoicr = $calculoicr;
        $this->periodicidadicr = $periodicidadicr;
        $this->medidaicr = $medidaicr;
        $this->fuenteicr = $fuenteicr;
        $this->tendenciaicr = $tendenciaicr;
        $this->otrosicr = $otrosicr;
    }

    function getIdicr() {
        return $this->idicr;
    }

    function getIdambito() {
        return $this->idambito;
    }

    function getDenominacionicr() {
        return $this->denominacionicr;
    }

    function getDescripcionicr() {
        return $this->descripcionicr;
    }

    function getCalculoicr() {
        return $this->calculoicr;
    }

    function getPeriodicidadicr() {
        return $this->periodicidadicr;
    }

    function getMedidaicr() {
        return $this->medidaicr;
    }

    function getFuenteicr() {
        return $this->fuenteicr;
    }

    function getTendenciaicr() {
        return $this->tendenciaicr;
    }

    function getOtrosicr() {
        return $this->otrosicr;
    }

    function setIdicr($idicr) {
        $this->idicr = $idicr;
    }

    function setIdambito($idambito) {
        $this->idambito = $idambito;
    }

    function setDenominacionicr($denominacionicr) {
        $this->denominacionicr = $denominacionicr;
    }

    function setDescripcionicr($descripcionicr) {
        $this->descripcionicr = $descripcionicr;
    }

    function setCalculoicr($calculoicr) {
        $this->calculoicr = $calculoicr;
    }

    function setPeriodicidadicr($periodicidadicr) {
        $this->periodicidadicr = $periodicidadicr;
    }

    function setMedidaicr($medidaicr) {
        $this->medidaicr = $medidaicr;
    }

    function setFuenteicr($fuenteicr) {
        $this->fuenteicr = $fuenteicr;
    }

    function setTendenciaicr($tendenciaicr) {
        $this->tendenciaicr = $tendenciaicr;
    }

    function setOtrosicr($otrosicr) {
        $this->otrosicr = $otrosicr;
    }

}
