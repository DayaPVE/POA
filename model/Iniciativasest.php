<?php


class Iniciativasest {
    private $idiniciativasest;
    private $idcuadroman;
    private $descripcionini;
    
    function __construct($idiniciativasest, $idcuadroman, $descripcionini) {
        $this->idiniciativasest = $idiniciativasest;
        $this->idcuadroman = $idcuadroman;
        $this->descripcionini = $descripcionini;
    }

    function getIdiniciativasest() {
        return $this->idiniciativasest;
    }

    function getIdcuadroman() {
        return $this->idcuadroman;
    }

    function getDescripcionini() {
        return $this->descripcionini;
    }

    function setIdiniciativasest($idiniciativasest) {
        $this->idiniciativasest = $idiniciativasest;
    }

    function setIdcuadroman($idcuadroman) {
        $this->idcuadroman = $idcuadroman;
    }

    function setDescripcionini($descripcionini) {
        $this->descripcionini = $descripcionini;
    }

}
