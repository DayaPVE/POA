<?php

class Finalidadproposito {

    private $idfp;
    private $idambito;
    private $finalidadfp;
    private $propositofp;
    private $coordinadorfp;
    private $ejecutorfp;
    private $objetivo;

    function __construct($idfp, $idambito, $finalidadfp, $propositofp, $coordinadorfp, $ejecutorfp) {
        $this->idfp = $idfp;
        $this->idambito = $idambito;
        $this->finalidadfp = $finalidadfp;
        $this->propositofp = $propositofp;
        $this->coordinadorfp = $coordinadorfp;
        $this->ejecutorfp = $ejecutorfp;
    }

    function getIdfp() {
        return $this->idfp;
    }

    function getIdambito() {
        return $this->idambito;
    }

    function getFinalidadfp() {
        return $this->finalidadfp;
    }

    function getPropositofp() {
        return $this->propositofp;
    }

    function getCoordinadorfp() {
        return $this->coordinadorfp;
    }

    function getEjecutorfp() {
        return $this->ejecutorfp;
    }

    function setIdfp($idfp) {
        $this->idfp = $idfp;
    }

    function setIdambito($idambito) {
        $this->idambito = $idambito;
    }

    function setFinalidadfp($finalidadfp) {
        $this->finalidadfp = $finalidadfp;
    }

    function setPropositofp($propositofp) {
        $this->propositofp = $propositofp;
    }

    function setCoordinadorfp($coordinadorfp) {
        $this->coordinadorfp = $coordinadorfp;
    }

    function setEjecutorfp($ejecutorfp) {
        $this->ejecutorfp = $ejecutorfp;
    }


}
