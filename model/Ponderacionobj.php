<?php

class Ponderacionobj {

    private $idponderacionobj;
    private $perspectivaestpon;
    private $tipoobjpon;
    private $finalidadpon;
    private $propositopon;
    private $indicadorpripon;
    private $pesoporimppon;

    function __construct($idponderacionobj, $perspectivaestpon, $tipoobjpon, $finalidadpon, $propositopon, $indicadorpripon, $pesoporimppon) {
        $this->idponderacionobj = $idponderacionobj;
        $this->perspectivaestpon = $perspectivaestpon;
        $this->tipoobjpon = $tipoobjpon;
        $this->finalidadpon = $finalidadpon;
        $this->propositopon = $propositopon;
        $this->indicadorpripon = $indicadorpripon;
        $this->pesoporimppon = $pesoporimppon;
    }

    function getIdponderacionobj() {
        return $this->idponderacionobj;
    }

    function getPerspectivaestpon() {
        return $this->perspectivaestpon;
    }

    function getTipoobjpon() {
        return $this->tipoobjpon;
    }

    function getFinalidadpon() {
        return $this->finalidadpon;
    }

    function getPropositopon() {
        return $this->propositopon;
    }

    function getIndicadorpripon() {
        return $this->indicadorpripon;
    }

    function getPesoporimppon() {
        return $this->pesoporimppon;
    }

    function setIdponderacionobj($idponderacionobj) {
        $this->idponderacionobj = $idponderacionobj;
    }

    function setPerspectivaestpon($perspectivaestpon) {
        $this->perspectivaestpon = $perspectivaestpon;
    }

    function setTipoobjpon($tipoobjpon) {
        $this->tipoobjpon = $tipoobjpon;
    }

    function setFinalidadpon($finalidadpon) {
        $this->finalidadpon = $finalidadpon;
    }

    function setPropositopon($propositopon) {
        $this->propositopon = $propositopon;
    }

    function setIndicadorpripon($indicadorpripon) {
        $this->indicadorpripon = $indicadorpripon;
    }

    function setPesoporimppon($pesoporimppon) {
        $this->pesoporimppon = $pesoporimppon;
    }

}
