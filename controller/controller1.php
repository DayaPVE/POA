<?php

include_once '../model/Ambito.php';
include_once '../model/Cabestrategia.php';
include_once '../model/Construccionicr.php';
include_once '../model/Determinacionmeta.php';
include_once '../model/Detestrategia.php';
include_once '../model/Estrategia.php';
include_once '../model/Finalidadproposito.php';
include_once '../model/PoaModel.php';
session_start();
$poaModel = new PoaModel();
$opcion = $_REQUEST['opcion'];

switch ($opcion) {

    case "cerrarSesion":
        session_destroy();
        header('Location: ../view/indexInicio.php');
        break;

    //PROYECTOS ESTRATEGICOS
    case "guardarproyectosestrategicos":

        $proyectoest = $_REQUEST['proyectoest'];
        $descripcionest = $_REQUEST['descripcionest'];
        $viabilidadest = $_REQUEST['viabilidadest'];

        try {
            $poaModel->insertarProyectosest($proyectoest, $descripcionest, $viabilidadest);
        } catch (Exception $e) {
            $_SESSION['mensaje'] = $e->getMessage();
        }
        $listadoProest = $poaModel->getProyectosests();
        $_SESSION['listadoProest'] = serialize($listadoProest);
        header('Location: ../view/proyectosestrategicos.php');
        break;

    case "eliminarProyectoest":
        $idproyectoest = $_REQUEST['idproyectoest'];
        $poaModel->eliminarProyectosest($idproyectoest);
        $listadoProest = $poaModel->getProyectosests();
        $_SESSION['listadoProest'] = serialize($listadoProest);
        header('Location: ../view/listarproyectosestrategicos.php');
        break;
    case "cargarProyectoest":
        $idproyectoest = $_REQUEST['idproyectoest'];
        $proyecto = $poaModel->getProyectosest($idproyectoest);
        $codigo = $proyecto->getIdproyectoest();
//        echo $codigo;
        $_SESSION['proyecto'] = serialize($proyecto);
        header('Location: ../view/actualizarproyectosestrategicos.php');
        break;
    case "actualizarProyectoest":
        $idproyectoest = $_REQUEST['idproyectoest'];
        $proyectoest = $_REQUEST['proyectoest'];
        $descripcionest = $_REQUEST['descripcionest'];
        $viabilidadest = $_REQUEST['viabilidadest'];
        $poaModel->actualizarProyectosest($idproyectoest, $proyectoest, $descripcionest, $viabilidadest);
        $listadoProest = $poaModel->getProyectosests();
        $_SESSION['listadoProest'] = serialize($listadoProest);
        $proyecto = $poaModel->getProyectosest($idproyectoest);
        $_SESSION['proyecto'] = $proyecto;
        header('Location: ../view/proyectosestrategicos.php');
        break;


    //CASOS CRUD TABLA DETALLE FINALIDADPROPOSITO
    case "guardarfinalidadproposito":
        $idambito = $_REQUEST['idambito'];
        $finalidadfp = $_REQUEST['finalidadfp'];
        $propositofp = $_REQUEST['propositofp'];
        $coordinadorfp = $_REQUEST['coordinadorfp'];
        $ejecutorfp = $_REQUEST['ejecutorfp'];
        $objetivo = $_REQUEST['objetivo'];
        try {
            $poaModel->insertarFinalidadproposito($idambito, $finalidadfp, $propositofp, $coordinadorfp, $ejecutorfp, $objetivo);
        } catch (Exception $e) {
            $_SESSION['mensaje'] = $e->getMessage();
        }
        $listadoFP = $poaModel->getFinalidadpropositoU($idambito);
        $_SESSION['listadoFP'] = serialize($listadoFP);
        header('Location: ../view/indexInsertar.php');
        break;

    //CASOS CRUD TABLA DETALLE ESTRATEGIA
    case "guardarestrategia":
        $idambito = $_REQUEST['idambito'];
        $detalleestrategia = $_REQUEST['detalleestrategia'];
        try {
            $poaModel->insertarEstrategia($idambito, $detalleestrategia);
        } catch (Exception $e) {
            $_SESSION['mensaje'] = $e->getMessage();
        }
        $listadoEstrategia = $poaModel->getEstrategiaU($idambito);
        $_SESSION['listadoEstrategia'] = serialize($listadoEstrategia);
        $listadoAmbito = $poaModel->getAmbitos();
        $_SESSION['listadoAmbito'] = serialize($listadoAmbito);
        header('Location: ../view/indexInsertar.php');
        break;
    case "eliminarEstrategia":
        $idestrategia = $_REQUEST['idestrategia'];
        $estrategia = $poaModel->getEstrategia($idestrategia);
        $idambito = $estrategia->getIdambito();
        $poaModel->eliminarEstrategia($idestrategia);
        $listadoEstrategia = $poaModel->getEstrategiaU($idambito);
        $_SESSION['listadoEstrategia'] = serialize($listadoEstrategia);
        header('Location: ../view/indexFinancieroUno.php');
        break;
    case "cargarEstrategia":
        $idestrategia = $_REQUEST['idestrategia'];
        $estrategia = $poaModel->getEstrategia($idestrategia);
        $_SESSION['estrategia'] = $estrategia;
        header('Location: ../view/actualizarEstrategia.php');
        break;
    case "actualizarEstrategia":
        $idestrategia = $_REQUEST['idestrategia'];
        $idambito = $_REQUEST['idambito'];
        $detalleestrategia = $_REQUEST['detalleestrategia'];
        $poaModel->actualizarEstrategia($idestrategia, $idambito, $detalleestrategia);
        $listadoEstrategia = $poaModel->getEstrategiaU($idambito);
        $_SESSION['listadoEstrategia'] = serialize($listadoEstrategia);
        $estrategia = $poaModel->getEstrategia($idestrategia);
        $_SESSION['estrategia'] = $estrategia;
        header('Location: ../view/indexFinancieroUno.php');
        break;

    //CASOS CRUD TABLA DETALLE AMBITO
    case "guardarambito":
        $idfinanciera = $_REQUEST['idfinanciera'];
        $detalleambito = $_REQUEST['detalleambito'];
        try {
            $poaModel->insertarAmbito($idfinanciera, $detalleambito);
        } catch (Exception $e) {
            $_SESSION['mensaje'] = $e->getMessage();
        }
        $listadoAmbito = $poaModel->getAmbitos();
        $_SESSION['listadoAmbito'] = serialize($listadoAmbito);
        $listadoFinanciera = $poaModel->getFinancieras();
        $_SESSION['listadoFinanciera'] = serialize($listadoFinanciera);
        header('Location: ../view/index.php');
        break;
    case "eliminarAmbito":
        $idambito = $_REQUEST['idambito'];
        $poaModel->eliminarAmbito($idambito);
        $listadoAmbito = $poaModel->getAmbitos();
        $_SESSION['listadoAmbito'] = serialize($listadoAmbito);
        header('Location: ../view/index.php');
        break;
    case "cargarAmbito":
        $idambito = $_REQUEST['idambito'];
        $ambito = $poaModel->getAmbito($idambito);
        $_SESSION['ambito'] = serialize($ambito);
        header('Location: ../view/actualizarAmbito.php');
        break;
    case "actualizarAmbito":
        $idambito = $_REQUEST['idambito'];
        $idfinanciera = $_REQUEST['idfinanciera'];
        $detalleambito = $_REQUEST['detalleambito'];
        $poaModel->actualizarAmbito($idambito, $idfinanciera, $detalleambito);
        $listadoAmbito = $poaModel->getAmbitos();
        $_SESSION['listadoAmbito'] = serialize($listadoAmbito);
        $ambito = $poaModel->getAmbito($idambito);
        $_SESSION['ambito'] = $ambito;
        header('Location: ../view/index.php');
        break;
    //CASOS CRUD TABLA DETALLE CONSTRUCCIONICR
    case "guardarconstruccionicr":
        $idambito = $_REQUEST['idambito'];
        $denominacionicr = $_REQUEST['denominacionicr'];
        $descripcionicr = $_REQUEST['descripcionicr'];
        $calculoicr = $_REQUEST['calculoicr'];
        $periodicidadicr = $_REQUEST['periodicidadicr'];
        $medidaicr = $_REQUEST['medidaicr'];
        $fuenteicr = $_REQUEST['fuenteicr'];
        $tendenciaicr = $_REQUEST['tendenciaicr'];
        $otrosicr = $_REQUEST['otrosicr'];
        try {
            $poaModel->insertarConstruccionicr($idambito, $denominacionicr, $descripcionicr, $calculoicr, $periodicidadicr, $medidaicr, $fuenteicr, $tendenciaicr, $otrosicr);
        } catch (Exception $e) {
            $_SESSION['mensaje'] = $e->getMessage();
        }
        $listadoICR = $poaModel->getConstruccionicrU($idambito);
        $_SESSION['listadoICR'] = serialize($listadoICR);
        header('Location: ../view/indexInsertar.php');
        break;

    //CASOS CRUD TABLA DETALLE DETERMINACIONMETA
    case "guardardeterminacionmeta":
        $idambito = $_REQUEST['idambito'];
        $estandardeter = $_REQUEST['estandardeter'];
        $inferiordeter = $_REQUEST['inferiordeter'];
        $basedeter = $_REQUEST['basedeter'];
        $superiordeter = $_REQUEST['superiordeter'];
        try {
            $poaModel->insertarDeterminacionmeta($idambito, $estandardeter, $inferiordeter, $basedeter, $superiordeter);
        } catch (Exception $e) {
            $_SESSION['mensaje'] = $e->getMessage();
        }
        $listadoDM = $poaModel->getDeterminacionmetaU($idambito);
        $_SESSION['listadoDM'] = serialize($listadoDM);
        header('Location: ../view/indexInsertar.php');
        break;

    //VER DETALLES
    case "verdetalles":
        unset($_SESSION['listadoDetE']);
        $idestrategia = $_REQUEST['idestrategia'];
        $estrategia = $poaModel->getEstrategia($idestrategia);
        $nombre = $estrategia->getDetalleestrategia();
        $idestrategia1 = $estrategia->getIdestrategia();
        $listadoCabE = $poaModel->getCabestrategiaE($idestrategia);
        $_SESSION['listadoCabE'] = serialize($listadoCabE);

        $codigocabecera = "";
        foreach ($listadoCabE as $lst) {
            if ($lst->getIdestrategia() == $idestrategia) {
                $codigocabecera = $lst->getIdcabestrategia();
            }
        }

//        echo $codigocabecera;
        $_SESSION['codigocabecera'] = serialize($codigocabecera);

        $_SESSION['nombre'] = serialize($nombre);
        $_SESSION['idestrategia'] = serialize($idestrategia);
        header('Location: ../view/indexCabDet.php');
        break;

    case "vercronograma":
        $idcabestrategia = $_REQUEST['idcabestrategia'];
        $listadoDetE = $poaModel->getDetestrategiaE($idcabestrategia);
        $_SESSION['listadoDetE'] = serialize($listadoDetE);
        header('Location: ../view/indexCabDet.php');
        break;

    //verdetallesAmbito
    case "verdetallesAmbito":
        $idambito = $_REQUEST['idambito'];
        $ambito = $poaModel->getAmbito($idambito);
        $estrategiaD = $ambito->getDetalleambito();
        $codigoD = $ambito->getIdambito();

        $listadoDM = $poaModel->getDeterminacionmetaU($idambito);
        $_SESSION['listadoDM'] = serialize($listadoDM);

        $listadoICR = $poaModel->getConstruccionicrU($idambito);
        $_SESSION['listadoICR'] = serialize($listadoICR);

        $listadoEstrategia = $poaModel->getEstrategiaU($idambito);
        $_SESSION['listadoEstrategia'] = serialize($listadoEstrategia);

        $listadoFP = $poaModel->getFinalidadpropositoU($idambito);
        $_SESSION['listadoFP'] = serialize($listadoFP);

        $_SESSION['estrategiaD'] = serialize($estrategiaD);
        $_SESSION['codigoD'] = serialize($codigoD);
        $_SESSION['ambito'] = serialize($ambito);
        header('Location: ../view/indexFinancieroUno.php');
        break;
    case "eliminarAmbito":
        $idambito = $_REQUEST['idambito'];
        $poaModel->eliminarAmbito($idambito);
        $listadoAmbito = $poaModel->getAmbitos();
        $_SESSION['listadoAmbito'] = serialize($listadoAmbito);
        header('Location: ../view/indexFinancieroUno.php');
        break;


    case "cargarFP":
        $idfp = $_REQUEST['idfp'];
//        echo $idfp;
        $finalidad = $poaModel->getFinalidadproposito($idfp);
        $_SESSION['finalidad'] = serialize($finalidad);
        header('Location: ../view/actualizarFP.php');
        break;
    case "actualizarFP":
        $idfp = $_REQUEST['idfp'];
        $fp = $poaModel->getFinalidadproposito($idfp);
        $idambito = $fp->getIdambito();
//        echo $idambito;
        $finalidadfp = $_REQUEST['finalidadfp'];
        $propositofp = $_REQUEST['propositofp'];
        $coordinadorfp = $_REQUEST['coordinadorfp'];
        $ejecutorfp = $_REQUEST['ejecutorfp'];
        $poaModel->actualizarFinalidadproposito($idambito, $finalidadfp, $propositofp, $coordinadorfp, $ejecutorfp, $idfp);
        $listadoFP = $poaModel->getFinalidadpropositoU($idambito);
        $_SESSION['listadoFP'] = serialize($listadoFP);
        $finalidad = $poaModel->getFinalidadproposito($idfp);
        $_SESSION['finalidad'] = serialize($finalidad);
        header('Location: ../view/indexFinancieroUno.php');
        break;

    case "cargarICR":
        $idicr = $_REQUEST['idicr'];
//        echo $idfp;
        $construccion = $poaModel->getConstruccionicr($idicr);
        $_SESSION['construccion'] = serialize($construccion);
        header('Location: ../view/actualizarICR.php');
        break;

    case "actualizarICR":
        $idicr = $_REQUEST['idicr'];
        $icr = $poaModel->getConstruccionicr($idicr);
        $idambito = $icr->getIdambito();
        $denominacionicr = $_REQUEST['denominacionicr'];
        $descripcionicr = $_REQUEST['descripcionicr'];
        $calculoicr = $_REQUEST['calculoicr'];
        $periodicidadicr = $_REQUEST['periodicidadicr'];
        $medidaicr = $_REQUEST['medidaicr'];
        $fuenteicr = $_REQUEST['fuenteicr'];
        $tendenciaicr = $_REQUEST['tendenciaicr'];
        $otrosicr = $_REQUEST['otrosicr'];
        $poaModel->actualizarConstruccionicr($idicr, $idambito, $denominacionicr, $descripcionicr, $calculoicr, $periodicidadicr, $medidaicr, $fuenteicr, $tendenciaicr, $otrosicr);
        $listadoICR = $poaModel->getConstruccionicrU($idambito);
        $_SESSION['listadoICR'] = serialize($listadoICR);
        $construccion = $poaModel->getConstruccionicr($idicr);
        $_SESSION['construccion'] = serialize($construccion);
        header('Location: ../view/indexFinancieroUno.php');
        break;

    case "cargarDM":
        $iddeterminacion = $_REQUEST['iddeterminacion'];
//        echo $idfp;
        $determinacion = $poaModel->getDeterminacionmeta($iddeterminacion);
        $_SESSION['determinacion'] = serialize($determinacion);
        header('Location: ../view/actualizarDM.php');
        break;

    case "actualizarDM":
        $iddeterminacion = $_REQUEST['iddeterminacion'];
        $dm = $poaModel->getDeterminacionmeta($iddeterminacion);
        $idambito = $dm->getIdambito();
        $estandardeter = $_REQUEST['estandardeter'];
        $inferiordeter = $_REQUEST['inferiordeter'];
        $basedeter = $_REQUEST['basedeter'];
        $superiordeter = $_REQUEST['superiordeter'];
        $poaModel->actualizarDeterminacionmeta($iddeterminacion, $idambito, $estandardeter, $inferiordeter, $basedeter, $superiordeter);
        $listadoDM = $poaModel->getDeterminacionmetaU($idambito);
        $_SESSION['listadoDM'] = serialize($listadoDM);
        $determinacion = $poaModel->getDeterminacionmeta($iddeterminacion);
        $_SESSION['determinacion'] = serialize($determinacion);
        header('Location: ../view/indexFinancieroUno.php');
        break;
    //CASOS CRUD TABLA DETALLE CABESTRATEGIA
    case "guardarcabestrategia":
        $idestrategia = $_REQUEST['idestrategia'];
        $perspectivacab = $_REQUEST['perspectivacab'];
        $objetivocab = $_REQUEST['objetivocab'];
        $finalidadcab = $_REQUEST['finalidadcab'];
        $propositocab = $_REQUEST['propositocab'];
        $iniciativacab = $_REQUEST['iniciativacab'];
        $fechaicab = $_REQUEST['fechaicab'];

        try {
            $poaModel->insertarCabestrategia($idestrategia, $perspectivacab, $objetivocab, $finalidadcab, $propositocab, $iniciativacab, $fechaicab);
        } catch (Exception $e) {
            $_SESSION['mensaje'] = $e->getMessage();
        }

        $listadoCabE = $poaModel->getCabestrategiaE($idestrategia);
        $codigocabecera = "";
        foreach ($listadoCabE as $lst) {
            if ($lst->getIdestrategia() == $idestrategia) {
                $codigocabecera = $lst->getIdcabestrategia();
            }
        }
//        echo $codigocabecera;
        $_SESSION['codigocabecera'] = serialize($codigocabecera);

        $_SESSION['listadoCabE'] = serialize($listadoCabE);

        header('Location: ../view/indexCabDet.php');
        break;

    //CASOS CRUD TABLA DETALLE DETESTRATEGIA
    case "guardardetestrategia":
        $idcabestrategia = $_REQUEST['idcabestrategia'];
//       echo $idcabestrategia;
        $accionesdet = $_REQUEST['accionesdet'];
//        echo $accionesdet;
        $primariadet = $_REQUEST['primariadet'];
//        echo $accionesdet;
        $otrosdet = $_REQUEST['otrosdet'];
//        echo $accionesdet;
        $tipoactdet = $_REQUEST['tipoactdet'];
//        echo $accionesdet;
        $enero = $_REQUEST['enero'];
//        echo $enero;
        $febrero = $_REQUEST['febrero'];
//        echo $febrero;
        $marzo = $_REQUEST['marzo'];
//        echo $marzo;
        $abril = $_REQUEST['abril'];
//        echo $abril;
        $mayo = $_REQUEST['mayo'];
//        echo $mayo;
        $junio = $_REQUEST['junio'];
//        echo $junio;
        $julio = $_REQUEST['julio'];
//        echo $julio;
        $agosto = $_REQUEST['agosto'];
//        echo $agosto;
        $septiembre = $_REQUEST['septiembre'];
//        echo $septiembre;
        $octubre = $_REQUEST['octubre'];
//        echo $octubre;
        $noviembre = $_REQUEST['noviembre'];
//        echo $noviembre;
        $diciembre = $_REQUEST['diciembre'];
//        echo $diciembre;
        $rrhhdet = $_REQUEST['rrhhdet'];
//        echo $rrhhdet;
        $rrmmdet = $_REQUEST['rrmmdet'];
//        echo $rrmmdet;
        $rrffdet = $_REQUEST['rrffdet'];
//        echo $rrffdet;
        $verificaciondet = $_REQUEST['verificaciondet'];
//        echo $verificaciondet;
        $escaladet = $_REQUEST['escaladet'];
//    echo $escaladet;

        try {
            $poaModel->insertarDetestrategia($idcabestrategia, $accionesdet, $primariadet, $otrosdet, $tipoactdet, $enero, $febrero, $marzo, $abril, $mayo, $junio, $julio, $agosto, $septiembre, $octubre, $noviembre, $diciembre, $rrhhdet, $rrmmdet, $rrffdet, $verificaciondet, $escaladet);
        } catch (Exception $e) {
            $_SESSION['mensaje'] = $e->getMessage();
        }

        $listadoDetE = $poaModel->getDetestrategiaE($idcabestrategia);
        $_SESSION['listadoDetE'] = serialize($listadoDetE);

        $idcabestrategia1 = $poaModel->getDetestrategias();
        $_SESSION['idcabestrategia1'] = serialize(idcabestrategia1);

        header('Location: ../view/indexCabDet.php');
        break;

    case "iniciarsistema":
        $listadoAmbito = $poaModel->getAmbitos();
        $_SESSION['listadoAmbito'] = serialize($listadoAmbito);
        $listadoFinanciera = $poaModel->getFinancieras();
        $_SESSION['listadoFinanciera'] = serialize($listadoFinanciera);
        header('Location: ../view/index.php');
        break;

    case "eliminarDetestrategia":
        $iddetestrategia = $_REQUEST['iddetestrategia'];
        $idcabestrategia = $_REQUEST['idcabestrategia'];
        $poaModel->eliminarDetestrategia($iddetestrategia);

        $listadoDetE = $poaModel->getDetestrategiaE($idcabestrategia);
        $_SESSION['listadoDetE'] = serialize($listadoDetE);

        header('Location: ../view/indexCabDet.php');
        break;

    case "cargarDetestrategia":
        $iddetestrategia = $_REQUEST['iddetestrategia'];
        $idcabestrategia = $_REQUEST['idcabestrategia'];
//        echo $iddetestrategia;
        $detalleestrategia = $poaModel->getDetestrategia($iddetestrategia);

        $_SESSION['idcabestrategia'] = serialize($idcabestrategia);
        $_SESSION['detalleestrategia'] = serialize($detalleestrategia);
        header('Location: ../view/actualizarDetallesDet.php');
        break;
    case "actualizardetestrategia":

        $idcabestrategia = $_REQUEST['idcabestrategia'];
        $iddetestrategia = $_REQUEST['iddetestrategia'];
//        echo $iddetestrategia;
        $accionesdet = $_REQUEST['accionesdet'];
//        echo $accionesdet;
        $primariadet = $_REQUEST['primariadet'];
//        echo $primariadet;
        $otrosdet = $_REQUEST['otrosdet'];
//        echo $accionesdet;
        $tipoactdet = $_REQUEST['tipoactdet'];
//        echo $accionesdet;
        $enero = $_REQUEST['enero'];
//        echo $enero;
        $febrero = $_REQUEST['febrero'];
//        echo $febrero;
        $marzo = $_REQUEST['marzo'];
//        echo $marzo;
        $abril = $_REQUEST['abril'];
//        echo $abril;
        $mayo = $_REQUEST['mayo'];
//        echo $mayo;
        $junio = $_REQUEST['junio'];
//        echo $junio;
        $julio = $_REQUEST['julio'];
//        echo $julio;
        $agosto = $_REQUEST['agosto'];
//        echo $agosto;
        $septiembre = $_REQUEST['septiembre'];
//        echo $septiembre;
        $octubre = $_REQUEST['octubre'];
//        echo $octubre;
        $noviembre = $_REQUEST['noviembre'];
//        echo $noviembre;
        $diciembre = $_REQUEST['diciembre'];
//        echo $diciembre;
        $rrhhdet = $_REQUEST['rrhhdet'];
//        echo $rrhhdet;
        $rrmmdet = $_REQUEST['rrmmdet'];
//        echo $rrmmdet;
        $rrffdet = $_REQUEST['rrffdet'];
//        echo $rrffdet;
        $verificaciondet = $_REQUEST['verificaciondet'];
//        echo $verificaciondet;
        $escaladet = $_REQUEST['escaladet'];
        echo $escaladet;


        $poaModel->actualizarDetestrategia($accionesdet, $primariadet, $otrosdet, $tipoactdet, $enero, $febrero, $marzo, $abril, $mayo, $junio, $julio, $agosto, $septiembre, $octubre, $noviembre, $diciembre, $rrhhdet, $rrmmdet, $rrffdet, $verificaciondet, $escaladet, $iddetestrategia);

        $listadoDetE = $poaModel->getDetestrategiaE($idcabestrategia);
        $_SESSION['listadoDetE'] = serialize($listadoDetE);

        $detalleestrategia = $poaModel->getDetestrategia($iddetestrategia);
        $_SESSION['detalleestrategia'] = serialize($detalleestrategia);
        header('Location: ../view/indexCabDet.php');
        break;

    //CONTROLLLER CASOS CRUD TABLA PONDERACIONOBJ
    case "guardarPonderacion":
        $perspectivaestpon = $_REQUEST['perspectivaestpon'];
        $tipoobjpon = $_REQUEST['tipoobjpon'];
        $finalidadpon = $_REQUEST['finalidadpon'];
        $propositopon = $_REQUEST['propositopon'];
        $indicadorpripon = $_REQUEST['indicadorpripon'];
        $pesoporimppon = $_REQUEST['pesoporimppon'];
        try {
            $poaModel->insertarPonderacionobj($perspectivaestpon, $tipoobjpon, $finalidadpon, $propositopon, $indicadorpripon, $pesoporimppon);
        } catch (Exception $e) {
            $_SESSION['mensaje'] = $e->getMessage();
        }
        $listadoPonderacion = $poaModel->getPonderacionobjs();
        $_SESSION['listadoPonderacion'] = serialize($listadoPonderacion);
        header('Location: ../view/ponderaciondeobjetivos.php');
        break;
    case "eliminarPonderacion":
        $idponderacionobj = $_REQUEST['idponderacionobj'];
        $poaModel->eliminarPonderacionobj($idponderacionobj);
        $listadoPonderacion = $poaModel->getPonderacionobjs();
        $_SESSION['listadoPonderacion'] = serialize($listadoPonderacion);
        header('Location: ../view/ponderaciondeobjetivos.php');
        break;

    case "cargarPonderacion":
        $idponderacionobj = $_REQUEST['idponderacionobj'];
        $ponderacion = $poaModel->getPonderacionobj($idponderacionobj);
        $_SESSION['ponderacion'] = serialize($ponderacion);
        header('Location: ../view/actualizarponderaciondeobjetivos.php');
        break;
    case "actualizarPonderacion":
        $idponderacionobj = $_REQUEST['idponderacionobj'];
        $perspectivaestpon = $_REQUEST['perspectivaestpon'];
        $tipoobjpon = $_REQUEST['tipoobjpon'];
        $finalidadpon = $_REQUEST['finalidadpon'];
        $propositopon = $_REQUEST['propositopon'];
        $indicadorpripon = $_REQUEST['indicadorpripon'];
        $pesoporimppon = $_REQUEST['pesoporimppon'];

        $poaModel->actualizarPonderacionobj($idponderacionobj, $perspectivaestpon, $tipoobjpon, $finalidadpon, $propositopon, $indicadorpripon, $pesoporimppon);
        $listadoPonderacion = $poaModel->getPonderacionobjs();
        $_SESSION['listadoPonderacion'] = serialize($listadoPonderacion);
        $ponderacion = $poaModel->getPonderacionobj($idponderacionobj);
        $_SESSION['ponderacion'] = $ponderacion;
        header('Location: ../view/ponderaciondeobjetivos.php');
        break;
//CASOS CRUD TABLA DETALLE FLOAS
    case "guardarfloas":
        $areafloas = $_REQUEST['areafloas'];
        $detallefloas = $_REQUEST['detallefloas'];
        try {
            $poaModel->insertarFloa($areafloas, $detallefloas);
        } catch (Exception $e) {
            $_SESSION['mensaje'] = $e->getMessage();
        }
        $listadoFloas = $poaModel->getFloas();
        $_SESSION['listadoFloas'] = serialize($listadoFloas);
        header('Location: ../view/floas.php');
        break;
    case "eliminarFloas":
        $idfloas = $_REQUEST['idfloas'];
        $poaModel->eliminarFloa($idfloas);
        $listadoFloas = $poaModel->getFloas();
        $_SESSION['listadoFloas'] = serialize($listadoFloas);
        header('Location: ../view/floas.php');
        break;
    case "cargarFloas":
        $idfloas = $_REQUEST['idfloas'];
        $floas = $poaModel->getFloa($idfloas);
        $_SESSION['floas'] = serialize($floas);
        header('Location: ../view/actualizarFloas.php');
        break;
    case "actualizarFloas":
        $idfloas = $_REQUEST['idfloas'];
        $areafloas = $_REQUEST['areafloas'];
        $detallefloas = $_REQUEST['detallefloas'];
        $poaModel->actualizarFloa($idfloas, $areafloas, $detallefloas);
        $listadoFloas = $poaModel->getFloas();
        $_SESSION['listadoFloas'] = serialize($listadoFloas);
        $floas = $poaModel->getFloa($idfloas);
        $_SESSION['floas'] = $floas;
        header('Location: ../view/floas.php');
        break;


    default:
        header('Location: ../view/indexInicio.php');
}
