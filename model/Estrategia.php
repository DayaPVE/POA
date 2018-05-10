<?php

class Estrategia {
  
    private $idestrategia;
    private $idambito;
    private $detalleestrategia;
    
    function __construct($idestrategia, $idambito, $detalleestrategia) {
        $this->idestrategia = $idestrategia;
        $this->idambito = $idambito;
        $this->detalleestrategia = $detalleestrategia;
    }

    function getIdestrategia() {
        return $this->idestrategia;
    }

    function getIdambito() {
        return $this->idambito;
    }

    function getDetalleestrategia() {
        return $this->detalleestrategia;
    }

    function setIdestrategia($idestrategia) {
        $this->idestrategia = $idestrategia;
    }

    function setIdambito($idambito) {
        $this->idambito = $idambito;
    }

    function setDetalleestrategia($detalleestrategia) {
        $this->detalleestrategia = $detalleestrategia;
    }


}
