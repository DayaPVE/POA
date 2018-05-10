<?php
/**
 * Description of floas
 *
 * @author Saúl_A
 */
class floas {
    private $idfloas;
    private $areafloas;
    private $detallefloas;
    
    function __construct($idfloas, $areafloas, $detallefloas) {
        $this->idfloas = $idfloas;
        $this->areafloas = $areafloas;
        $this->detallefloas = $detallefloas;
    }
    
    function getIdfloas() {
        return $this->idfloas;
    }

    function getAreafloas() {
        return $this->areafloas;
    }

    function getDetallefloas() {
        return $this->detallefloas;
    }

    function setIdfloas($idfloas) {
        $this->idfloas = $idfloas;
    }

    function setAreafloas($areafloas) {
        $this->areafloas = $areafloas;
    }

    function setDetallefloas($detallefloas) {
        $this->detallefloas = $detallefloas;
    }



}
