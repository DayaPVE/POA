<?php

class Detestrategia {

    private $iddetestrategia;
    private $idcabestrategia;
    private $accionesdet;
    private $primariadet;
    private $otrosdet;
    private $tipoactdet;
    private $enero;
    private $febrero;
    private $marzo;
    private $abril;
    private $mayo;
    private $junio;
    private $julio;
    private $agosto;
    private $septiembre;
    private $octubre;
    private $noviembre;
    private $diciembre;
    private $rrhhdet;
    private $rrmmdet;
    private $rrffdet;
    private $verificaciondet;
    private $escaladet;

    function __construct($iddetestrategia, $idcabestrategia, $accionesdet, $primariadet, $otrosdet, $tipoactdet, $enero, $febrero, $marzo, $abril, $mayo, $junio, $julio, $agosto, $septiembre, $octubre, $noviembre, $diciembre, $rrhhdet, $rrmmdet, $rrffdet, $verificaciondet, $escaladet) {
        $this->iddetestrategia = $iddetestrategia;
        $this->idcabestrategia = $idcabestrategia;
        $this->accionesdet = $accionesdet;
        $this->primariadet = $primariadet;
        $this->otrosdet = $otrosdet;
        $this->tipoactdet = $tipoactdet;
        $this->enero = $enero;
        $this->febrero = $febrero;
        $this->marzo = $marzo;
        $this->abril = $abril;
        $this->mayo = $mayo;
        $this->junio = $junio;
        $this->julio = $julio;
        $this->agosto = $agosto;
        $this->septiembre = $septiembre;
        $this->octubre = $octubre;
        $this->noviembre = $noviembre;
        $this->diciembre = $diciembre;
        $this->rrhhdet = $rrhhdet;
        $this->rrmmdet = $rrmmdet;
        $this->rrffdet = $rrffdet;
        $this->verificaciondet = $verificaciondet;
        $this->escaladet = $escaladet;
    }

    function getIddetestrategia() {
        return $this->iddetestrategia;
    }

    function getIdcabestrategia() {
        return $this->idcabestrategia;
    }

    function getAccionesdet() {
        return $this->accionesdet;
    }

    function getPrimariadet() {
        return $this->primariadet;
    }

    function getOtrosdet() {
        return $this->otrosdet;
    }

    function getTipoactdet() {
        return $this->tipoactdet;
    }

    function getEnero() {
        return $this->enero;
    }

    function getFebrero() {
        return $this->febrero;
    }

    function getMarzo() {
        return $this->marzo;
    }

    function getAbril() {
        return $this->abril;
    }

    function getMayo() {
        return $this->mayo;
    }

    function getJunio() {
        return $this->junio;
    }

    function getJulio() {
        return $this->julio;
    }

    function getAgosto() {
        return $this->agosto;
    }

    function getSeptiembre() {
        return $this->septiembre;
    }

    function getOctubre() {
        return $this->octubre;
    }

    function getNoviembre() {
        return $this->noviembre;
    }

    function getDiciembre() {
        return $this->diciembre;
    }

    function getRrhhdet() {
        return $this->rrhhdet;
    }

    function getRrmmdet() {
        return $this->rrmmdet;
    }

    function getRrffdet() {
        return $this->rrffdet;
    }

    function getVerificaciondet() {
        return $this->verificaciondet;
    }

    function getEscaladet() {
        return $this->escaladet;
    }

    function setIddetestrategia($iddetestrategia) {
        $this->iddetestrategia = $iddetestrategia;
    }

    function setIdcabestrategia($idcabestrategia) {
        $this->idcabestrategia = $idcabestrategia;
    }

    function setAccionesdet($accionesdet) {
        $this->accionesdet = $accionesdet;
    }

    function setPrimariadet($primariadet) {
        $this->primariadet = $primariadet;
    }

    function setOtrosdet($otrosdet) {
        $this->otrosdet = $otrosdet;
    }

    function setTipoactdet($tipoactdet) {
        $this->tipoactdet = $tipoactdet;
    }

    function setEnero($enero) {
        $this->enero = $enero;
    }

    function setFebrero($febrero) {
        $this->febrero = $febrero;
    }

    function setMarzo($marzo) {
        $this->marzo = $marzo;
    }

    function setAbril($abril) {
        $this->abril = $abril;
    }

    function setMayo($mayo) {
        $this->mayo = $mayo;
    }

    function setJunio($junio) {
        $this->junio = $junio;
    }

    function setJulio($julio) {
        $this->julio = $julio;
    }

    function setAgosto($agosto) {
        $this->agosto = $agosto;
    }

    function setSeptiembre($septiembre) {
        $this->septiembre = $septiembre;
    }

    function setOctubre($octubre) {
        $this->octubre = $octubre;
    }

    function setNoviembre($noviembre) {
        $this->noviembre = $noviembre;
    }

    function setDiciembre($diciembre) {
        $this->diciembre = $diciembre;
    }

    function setRrhhdet($rrhhdet) {
        $this->rrhhdet = $rrhhdet;
    }

    function setRrmmdet($rrmmdet) {
        $this->rrmmdet = $rrmmdet;
    }

    function setRrffdet($rrffdet) {
        $this->rrffdet = $rrffdet;
    }

    function setVerificaciondet($verificaciondet) {
        $this->verificaciondet = $verificaciondet;
    }

    function setEscaladet($escaladet) {
        $this->escaladet = $escaladet;
    }

}
