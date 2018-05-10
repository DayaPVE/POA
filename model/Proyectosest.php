<?php

class Proyectosest {
   private $idproyectoest;
   private $proyectoest;
   private $descripcionest;
   private $viabilidadest;
   
   function __construct($idproyectoest, $proyectoest, $descripcionest, $viabilidadest) {
       $this->idproyectoest = $idproyectoest;
       $this->proyectoest = $proyectoest;
       $this->descripcionest = $descripcionest;
       $this->viabilidadest = $viabilidadest;
   }

   function getIdproyectoest() {
       return $this->idproyectoest;
   }

   function getProyectoest() {
       return $this->proyectoest;
   }

   function getDescripcionest() {
       return $this->descripcionest;
   }

   function getViabilidadest() {
       return $this->viabilidadest;
   }

   function setIdproyectoest($idproyectoest) {
       $this->idproyectoest = $idproyectoest;
   }

   function setProyectoest($proyectoest) {
       $this->proyectoest = $proyectoest;
   }

   function setDescripcionest($descripcionest) {
       $this->descripcionest = $descripcionest;
   }

   function setViabilidadest($viabilidadest) {
       $this->viabilidadest = $viabilidadest;
   }

}
