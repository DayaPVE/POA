<?php

class Cabestrategia {

    private $idcabestrategia;
    private $idestrategia;
    private $perspectivacab;
    private $objetivocab;
    private $finalidadcab;
    private $propositocab;
    private $iniciativacab;
    private $fechaicab;

    function __construct($idcabestrategia, $idestrategia, $perspectivacab, $objetivocab, $finalidadcab, $propositocab, $iniciativacab, $fechaicab) {
        $this->idcabestrategia = $idcabestrategia;
        $this->idestrategia = $idestrategia;
        $this->perspectivacab = $perspectivacab;
        $this->objetivocab = $objetivocab;
        $this->finalidadcab = $finalidadcab;
        $this->propositocab = $propositocab;
        $this->iniciativacab = $iniciativacab;
        $this->fechaicab = $fechaicab;
    }

    function getIdcabestrategia() {
        return $this->idcabestrategia;
    }

    function getIdestrategia() {
        return $this->idestrategia;
    }

    function getPerspectivacab() {
        return $this->perspectivacab;
    }

    function getObjetivocab() {
        return $this->objetivocab;
    }

    function getFinalidadcab() {
        return $this->finalidadcab;
    }

    function getPropositocab() {
        return $this->propositocab;
    }

    function getIniciativacab() {
        return $this->iniciativacab;
    }

    function getFechaicab() {
        return $this->fechaicab;
    }

    function setIdcabestrategia($idcabestrategia) {
        $this->idcabestrategia = $idcabestrategia;
    }

    function setIdestrategia($idestrategia) {
        $this->idestrategia = $idestrategia;
    }

    function setPerspectivacab($perspectivacab) {
        $this->perspectivacab = $perspectivacab;
    }

    function setObjetivocab($objetivocab) {
        $this->objetivocab = $objetivocab;
    }

    function setFinalidadcab($finalidadcab) {
        $this->finalidadcab = $finalidadcab;
    }

    function setPropositocab($propositocab) {
        $this->propositocab = $propositocab;
    }

    function setIniciativacab($iniciativacab) {
        $this->iniciativacab = $iniciativacab;
    }

    function setFechaicab($fechaicab) {
        $this->fechaicab = $fechaicab;
    }

}
