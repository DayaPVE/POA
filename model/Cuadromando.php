<?php

class Cuadromando {

    private $perspectiva;
    private $objetivo;
    private $finalidad;
    private $proposito;
    private $indicador;
    private $inferior;
    private $base;
    private $superior;
    private $idambito;
    
    function __construct($perspectiva, $objetivo, $finalidad, $proposito, $indicador, $inferior, $base, $superior, $idambito) {
        $this->perspectiva = $perspectiva;
        $this->objetivo = $objetivo;
        $this->finalidad = $finalidad;
        $this->proposito = $proposito;
        $this->indicador = $indicador;
        $this->inferior = $inferior;
        $this->base = $base;
        $this->superior = $superior;
        $this->idambito = $idambito;
    }
    
    function getPerspectiva() {
        return $this->perspectiva;
    }

    function getObjetivo() {
        return $this->objetivo;
    }

    function getFinalidad() {
        return $this->finalidad;
    }

    function getProposito() {
        return $this->proposito;
    }

    function getIndicador() {
        return $this->indicador;
    }

    function getInferior() {
        return $this->inferior;
    }

    function getBase() {
        return $this->base;
    }

    function getSuperior() {
        return $this->superior;
    }

    function getIdambito() {
        return $this->idambito;
    }

    function setPerspectiva($perspectiva) {
        $this->perspectiva = $perspectiva;
    }

    function setObjetivo($objetivo) {
        $this->objetivo = $objetivo;
    }

    function setFinalidad($finalidad) {
        $this->finalidad = $finalidad;
    }

    function setProposito($proposito) {
        $this->proposito = $proposito;
    }

    function setIndicador($indicador) {
        $this->indicador = $indicador;
    }

    function setInferior($inferior) {
        $this->inferior = $inferior;
    }

    function setBase($base) {
        $this->base = $base;
    }

    function setSuperior($superior) {
        $this->superior = $superior;
    }

    function setIdambito($idambito) {
        $this->idambito = $idambito;
    }

}
