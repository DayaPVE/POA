<?php

class Determinacionmeta {
    
    private $iddeterminacion;
    private $idambito;
    private $estandardeter;
    private $inferiordeter;
    private $basedeter;
    private $superiordeter;
    
    function __construct($iddeterminacion, $idambito, $estandardeter, $inferiordeter, $basedeter, $superiordeter) {
        $this->iddeterminacion = $iddeterminacion;
        $this->idambito = $idambito;
        $this->estandardeter = $estandardeter;
        $this->inferiordeter = $inferiordeter;
        $this->basedeter = $basedeter;
        $this->superiordeter = $superiordeter;
    }

    function getIddeterminacion() {
        return $this->iddeterminacion;
    }

    function getIdambito() {
        return $this->idambito;
    }

    function getEstandardeter() {
        return $this->estandardeter;
    }

    function getInferiordeter() {
        return $this->inferiordeter;
    }

    function getBasedeter() {
        return $this->basedeter;
    }

    function getSuperiordeter() {
        return $this->superiordeter;
    }

    function setIddeterminacion($iddeterminacion) {
        $this->iddeterminacion = $iddeterminacion;
    }

    function setIdambito($idambito) {
        $this->idambito = $idambito;
    }

    function setEstandardeter($estandardeter) {
        $this->estandardeter = $estandardeter;
    }

    function setInferiordeter($inferiordeter) {
        $this->inferiordeter = $inferiordeter;
    }

    function setBasedeter($basedeter) {
        $this->basedeter = $basedeter;
    }

    function setSuperiordeter($superiordeter) {
        $this->superiordeter = $superiordeter;
    }

}
