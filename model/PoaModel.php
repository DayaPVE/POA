<?php

include_once 'Ambito.php';
include_once 'Cabestrategia.php';
include_once 'Construccionicr.php';
include_once 'Determinacionmeta.php';
include_once 'Detestrategia.php';
include_once 'Estrategia.php';
include_once 'Financiera.php';
include_once 'Finalidadproposito.php';
include_once 'Database.php';
include_once 'Cuadromando.php';
include_once 'Iniciativasest.php';
include_once 'Ponderacionobj.php';
include_once 'Proyectosest.php';
include_once 'floas.php';

class PoaModel {

    //METODOS CRUD TABLA FINANCIERA
    public function getFinancieras() {
        $pdo = Database::connect();
        $sql = "select * from financiera";
        $resultado = $pdo->query($sql);
        $listado = array();
        foreach ($resultado as $res) {
            $financiera = new Financiera($res['idfinanciera'], $res['detallefinanciera']);
            array_push($listado, $financiera);
        }
        Database::disconnect();
        return $listado;
    }

    public function insertarFinanciera($detallefinanciera) {
        $pdo = Database::connect();
        $sql = "insert into financiera (detallefinanciera) values (?)";
        $consulta = $pdo->prepare($sql);
        try {
            $consulta->execute(array($detallefinanciera));
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

    public function getFinanciera($idfinanciera) {
        $pdo = Database::connect();
        $sql = "select * from financiera where idfinanciera=?";
        $consulta = $pdo->prepare($sql);
        $consulta->execute(array($idfinanciera));
        $res = $consulta->fetch(PDO::FETCH_ASSOC);
        $financiera = new Financiera($res['idfinanciera'], $res['detallefinanciera']);
        Database::disconnect();
        return $financiera;
    }

    public function actualizarFinanciera($idfinanciera, $detallefinanciera) {
        $pdo = Database::connect();
        $sql = "update financiera set detallefinanciera=? where idfinanciera=?";
        $consulta = $pdo->prepare($sql);
        try {
            $consulta->execute(array($detallefinanciera, $idfinanciera));
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

    public function eliminarFinanciera($idfinanciera) {
        $pdo = Database::connect();
        $sql = "delete from financiera where idfinanciera=?";
        $consulta = $pdo->prepare($sql);
        try {
            $consulta->execute(array($idfinanciera));
        } catch (Exception $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

    //METODOS CRUD TABLA AMBITO
    public function getAmbitos() {
        $pdo = Database::connect();
        $sql = "select * from ambito order by idambito";
        $resultado = $pdo->query($sql);
        $listado = array();
        foreach ($resultado as $res) {
            $ambito = new Ambito($res['idambito'], $res['idfinanciera'], $res['detalleambito']);
            array_push($listado, $ambito);
        }
        Database::disconnect();
        return $listado;
    }

    public function insertarAmbito($idfinanciera, $detalleambito) {
        $pdo = Database::connect();
        $sql = "insert into ambito (idfinanciera, detalleambito) values (?, ?)";
        $consulta = $pdo->prepare($sql);
        try {
            $consulta->execute(array($idfinanciera, $detalleambito));
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

    public function getAmbito($idambito) {
        $pdo = Database::connect();
        $sql = "select * from ambito where idambito=?";
        $consulta = $pdo->prepare($sql);
        $consulta->execute(array($idambito));
        $res = $consulta->fetch(PDO::FETCH_ASSOC);
        $ambito = new Ambito($res['idambito'], $res['idfinanciera'], $res['detalleambito']);
        Database::disconnect();
        return $ambito;
    }

    public function actualizarAmbito($idambito, $idfinanciera, $detalleambito) {
        $pdo = Database::connect();
        $sql = "update ambito set idfinanciera=?, detalleambito=? where idambito=?";
        $consulta = $pdo->prepare($sql);
        try {
            $consulta->execute(array($idfinanciera, $detalleambito, $idambito));
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

    public function eliminarAmbito($idambito) {
        $pdo = Database::connect();
        $sql = "delete from ambito where idambito=?";
        $consulta = $pdo->prepare($sql);
        try {
            $consulta->execute(array($idambito));
        } catch (Exception $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

    //METODOS CRUD TABLA ESTRATEGIA
    public function getEstrategias() {
        $pdo = Database::connect();
        $sql = "select * from estrategia order by idambito";
        $resultado = $pdo->query($sql);
        $listado = array();
        foreach ($resultado as $res) {
            $estrategia = new Estrategia($res['idestrategia'], $res['idambito'], $res['detalleestrategia']);
            array_push($listado, $estrategia);
        }
        Database::disconnect();
        return $listado;
    }

    public function insertarEstrategia($idambito, $detalleestrategia) {
        $pdo = Database::connect();
        $sql = "insert into estrategia (idambito,detalleestrategia) values (?,?)";
        $consulta = $pdo->prepare($sql);
        try {
            $consulta->execute(array($idambito, $detalleestrategia));
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

    public function getEstrategia($idestrategia) {
        $pdo = Database::connect();
        $sql = "select * from estrategia where idestrategia=?";
        $consulta = $pdo->prepare($sql);
        $consulta->execute(array($idestrategia));
        $res = $consulta->fetch(PDO::FETCH_ASSOC);
        $estrategia = new Estrategia($res['idestrategia'], $res['idambito'], $res['detalleestrategia']);
        Database::disconnect();
        return $estrategia;
    }

    public function actualizarEstrategia($idestrategia, $idambito, $detalleestrategia) {
        $pdo = Database::connect();
        $sql = "update estrategia set idambito=?, detalleestrategia=? where idestrategia=?";
        $consulta = $pdo->prepare($sql);
        try {
            $consulta->execute(array($idambito, $detalleestrategia, $idestrategia));
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

    public function eliminarEstrategia($idestrategia) {
        $pdo = Database::connect();
        $sql = "delete from estrategia where idestrategia=?";
        $consulta = $pdo->prepare($sql);
        try {
            $consulta->execute(array($idestrategia));
        } catch (Exception $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

    //METODOS CRUD TABLA CONTRUCCIONICR

    public function getConstruccionicrs() {
        $pdo = Database::connect();
        $sql = "select * from construccionicr";
        $resultado = $pdo->query($sql);
        $listado = array();
        foreach ($resultado as $res) {
            $construccionicr = new Construccionicr($res['idicr'], $res['idambito'], $res['denominacionicr'], $res['descripcionicr'], $res['calculoicr'], $res['periodicidadicr'], $res['medidaicr'], $res['fuenteicr'], $res['tendenciaicr'], $res['otrosicr']);
            array_push($listado, $construccionicr);
        }
        Database::disconnect();
        return $listado;
    }

    public function insertarConstruccionicr($idambito, $denominacionicr, $descripcionicr, $calculoicr, $periodicidadicr, $medidaicr, $fuenteicr, $tendenciaicr, $otrosicr) {
        $pdo = Database::connect();
        $sql = "insert into construccionicr (idambito, denominacionicr, descripcionicr, calculoicr, periodicidadicr, medidaicr, fuenteicr, tendenciaicr, otrosicr) values (?,?,?,?,?,?,?,?,?)";
        $consulta = $pdo->prepare($sql);
        try {
            $consulta->execute(array($idambito, $denominacionicr, $descripcionicr, $calculoicr, $periodicidadicr, $medidaicr, $fuenteicr, $tendenciaicr, $otrosicr));
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

    public function getConstruccionicr($idicr) {
        $pdo = Database::connect();
        $sql = "select * from construccionicr where idicr=?";
        $consulta = $pdo->prepare($sql);
        $consulta->execute(array($idicr));
        $res = $consulta->fetch(PDO::FETCH_ASSOC);
        $construccionicr = new Construccionicr($res['idicr'], $res['idambito'], $res['denominacionicr'], $res['descripcionicr'], $res['calculoicr'], $res['periodicidadicr'], $res['medidaicr'], $res['fuenteicr'], $res['tendenciaicr'], $res['otrosicr']);
        Database::disconnect();
        return $construccionicr;
    }

    public function actualizarConstruccionicr($idicr, $idambito, $denominacionicr, $descripcionicr, $calculoicr, $periodicidadicr, $medidaicr, $fuenteicr, $tendenciaicr, $otrosicr) {
        $pdo = Database::connect();
        $sql = "update construccionicr set idambito=?, denominacionicr=?, descripcionicr=?, calculoicr=?, periodicidadicr=?, medidaicr=?, fuenteicr=?, tendenciaicr=?, otrosicr=? where idicr=?";
        $consulta = $pdo->prepare($sql);
        try {
            $consulta->execute(array($idambito, $denominacionicr, $descripcionicr, $calculoicr, $periodicidadicr, $medidaicr, $fuenteicr, $tendenciaicr, $otrosicr, $idicr));
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

    public function eliminarConstruccionicr($idicr) {
        $pdo = Database::connect();
        $sql = "delete from construccionicr where idicr=?";
        $consulta = $pdo->prepare($sql);
        try {
            $consulta->execute(array($idicr));
        } catch (Exception $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

    //METODOS CRUD TABLA DETERMINACIONMETA

    public function getDeterminacionmetas() {
        $pdo = Database::connect();
        $sql = "select * from determinacionmeta";
        $resultado = $pdo->query($sql);
        $listado = array();
        foreach ($resultado as $res) {
            $determinacionmeta = new Determinacionmeta($res['iddeterminacion'], $res['idambito'], $res['estandardeter'], $res['inferiordeter'], $res['basedeter'], $res['superiordeter']);
            array_push($listado, $determinacionmeta);
        }
        Database::disconnect();
        return $listado;
    }

    public function insertarDeterminacionmeta($idambito, $estandardeter, $inferiordeter, $basedeter, $superiordeter) {
        $pdo = Database::connect();
        $sql = "insert into determinacionmeta (idambito, estandardeter, inferiordeter, basedeter, superiordeter) values (?,?,?,?,?)";
        $consulta = $pdo->prepare($sql);
        try {
            $consulta->execute(array($idambito, $estandardeter, $inferiordeter, $basedeter, $superiordeter));
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

    public function getDeterminacionmeta($iddeterminacion) {
        $pdo = Database::connect();
        $sql = "select * from determinacionmeta where iddeterminacion=?";
        $consulta = $pdo->prepare($sql);
        $consulta->execute(array($iddeterminacion));
        $res = $consulta->fetch(PDO::FETCH_ASSOC);
        $determinacionmeta = new Determinacionmeta($res['iddeterminacion'], $res['idambito'], $res['estandardeter'], $res['inferiordeter'], $res['basedeter'], $res['superiordeter']);
        Database::disconnect();
        return $determinacionmeta;
    }

    public function actualizarDeterminacionmeta($iddeterminacion, $idambito, $estandardeter, $inferiordeter, $basedeter, $superiordeter) {
        $pdo = Database::connect();
        $sql = "update determinacionmeta set idambito=?, estandardeter=?, inferiordeter=?, basedeter=?, superiordeter=?,  where iddeterminacion=?";
        $consulta = $pdo->prepare($sql);
        try {
            $consulta->execute(array($idambito, $estandardeter, $inferiordeter, $basedeter, $superiordeter, $iddeterminacion));
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

    public function eliminarDeterminacionmeta($iddeterminacion) {
        $pdo = Database::connect();
        $sql = "delete from determinacionmeta where iddeterminacion=?";
        $consulta = $pdo->prepare($sql);
        try {
            $consulta->execute(array($iddeterminacion));
        } catch (Exception $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

    //METODOS CRUD TABLA DETESTRATEGIA
    public function getDetestrategias() {
        $pdo = Database::connect();
        $sql = "select * from detestrategia order by iddetestrategia";
        $resultado = $pdo->query($sql);
        $listado = array();
        foreach ($resultado as $res) {
            $detestrategia = new Detestrategia($res['iddetestrategia'], $res['idcabestrategia'], $res['accionesdet'], $res['primariadet'], $res['otrosdet'], $res['tipoactdet'], $res['enero'], $res['febrero'], $res['marzo'], $res['abril'], $res['mayo'], $res['junio'], $res['julio'], $res['agosto'], $res['septiembre'], $res['octubre'], $res['noviembre'], $res['diciembre'], $res['rrhhdet'], $res['rrmmdet'], $res['rrffdet'], $res['verificaciondet'], $res['escaladet']);
            array_push($listado, $detestrategia);
        }
        Database::disconnect();
        return $listado;
    }

    public function insertarDetestrategia($idcabestrategia, $accionesdet, $primariadet, $otrosdet, $tipoactdet, $enero, $febrero, $marzo, $abril, $mayo, $junio, $julio, $agosto, $septiembre, $octubre, $noviembre, $diciembre, $rrhhdet, $rrmmdet, $rrffdet, $verificaciondet, $escaladet) {
        $pdo = Database::connect();
        $sql = "insert into detestrategia(idcabestrategia, accionesdet, primariadet, otrosdet, tipoactdet, enero, febrero, marzo, abril, mayo, junio, julio, agosto, septiembre, octubre, noviembre, diciembre, rrhhdet, rrmmdet, rrffdet, verificaciondet, escaladet) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $consulta = $pdo->prepare($sql);
        try {
            $consulta->execute(array($idcabestrategia, $accionesdet, $primariadet, $otrosdet, $tipoactdet, $enero, $febrero, $marzo, $abril, $mayo, $junio, $julio, $agosto, $septiembre, $octubre, $noviembre, $diciembre, $rrhhdet, $rrmmdet, $rrffdet, $verificaciondet, $escaladet));
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

    public function getDetestrategia($iddetestrategia) {
        $pdo = Database::connect();
        $sql = "select * from detestrategia where iddetestrategia=?";
        $consulta = $pdo->prepare($sql);
        $consulta->execute(array($iddetestrategia));
        $res = $consulta->fetch(PDO::FETCH_ASSOC);
        $detestrategia = new Detestrategia($res['iddetestrategia'], $res['idcabestrategia'], $res['accionesdet'], $res['primariadet'], $res['otrosdet'], $res['tipoactdet'], $res['enero'], $res['febrero'], $res['marzo'], $res['abril'], $res['mayo'], $res['junio'], $res['julio'], $res['agosto'], $res['septiembre'], $res['octubre'], $res['noviembre'], $res['diciembre'], $res['rrhhdet'], $res['rrmmdet'], $res['rrffdet'], $res['verificaciondet'], $res['escaladet']);
        Database::disconnect();
        return $detestrategia;
    }

    public function getDetestrategiaE($idcabestrategia) {
        $pdo = Database::connect();
        $sql = "select * from detestrategia where idcabestrategia=?";
        $consulta = $pdo->prepare($sql);
        $consulta->execute(array($idcabestrategia));
        $listado = array();
        foreach ($consulta as $res) {
            $detestrategia = new Detestrategia($res['iddetestrategia'], $res['idcabestrategia'], $res['accionesdet'], $res['primariadet'], $res['otrosdet'], $res['tipoactdet'], $res['enero'], $res['febrero'], $res['marzo'], $res['abril'], $res['mayo'], $res['junio'], $res['julio'], $res['agosto'], $res['septiembre'], $res['octubre'], $res['noviembre'], $res['diciembre'], $res['rrhhdet'], $res['rrmmdet'], $res['rrffdet'], $res['verificaciondet'], $res['escaladet']);
            array_push($listado, $detestrategia);
        }
        Database::disconnect();
        return $listado;
    }
    
    
    public function actualizarDetestrategia($accionesdet, $primariadet, $otrosdet, $tipoactdet, $enero, $febrero, $marzo, $abril, $mayo, $junio, $julio, $agosto, $septiembre, $octubre, $noviembre, $diciembre, $rrhhdet, $rrmmdet, $rrffdet, $verificaciondet, $escaladet, $iddetestrategia) {
        $pdo = Database::connect();
        $sql = "update detestrategia set accionesdet=?,primariadet=?,otrosdet=?,tipoactdet=?,enero=?,febrero=?,marzo=?,abril=?,mayo=?,junio=?,julio=?,agosto=?,septiembre=?,octubre=?,noviembre=?,diciembre=?,rrhhdet=?,rrmmdet=?,rrffdet=?,verificaciondet=?,escaladet=? where iddetestrategia=?";
        $consulta = $pdo->prepare($sql);
        try {
            $consulta->execute(array($accionesdet, $primariadet, $otrosdet, $tipoactdet, $enero, $febrero, $marzo, $abril, $mayo, $junio, $julio, $agosto, $septiembre, $octubre, $noviembre, $diciembre, $rrhhdet, $rrmmdet, $rrffdet, $verificaciondet, $escaladet, $iddetestrategia));
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

    public function eliminarDetestrategia($iddetestrategia) {
        $pdo = Database::connect();
        $sql = "delete from detestrategia where iddetestrategia=?";
        $consulta = $pdo->prepare($sql);
        try {
            $consulta->execute(array($iddetestrategia));
        } catch (Exception $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

    //METODOS CRUD TABLA CABESTRATEGIA
    public function getCabestrategias() {
        $pdo = Database::connect();
        $sql = "select * from cabestrategia";
        $resultado = $pdo->query($sql);
        $listado = array();
        foreach ($resultado as $res) {
            $cabestrategia = new Cabestrategia($res['idcabestrategia'], $res['idestrategia'], $res['perspectivacab'], $res['objetivocab'], $res['finalidadcab'], $res['propositocab'], $res['iniciativacab'], $res['fechaicab']);
            array_push($listado, $cabestrategia);
        }
        Database::disconnect();
        return $listado;
    }

    public function getCabestrategiaE($idestrategia) {
        $pdo = Database::connect();
        $sql = "select * from cabestrategia where idestrategia=?";
        $consulta = $pdo->prepare($sql);
        $consulta->execute(array($idestrategia));
        $listado = array();
        foreach ($consulta as $res) {
            $cabestrategia = new Cabestrategia($res['idcabestrategia'], $res['idestrategia'], $res['perspectivacab'], $res['objetivocab'], $res['finalidadcab'], $res['propositocab'], $res['iniciativacab'], $res['fechaicab']);
            array_push($listado, $cabestrategia);
        }
        Database::disconnect();
        return $listado;
    }

    public function insertarCabestrategia($idestrategia, $perspectivacab, $objetivocab, $finalidadcab, $propositocab, $iniciativacab, $fechaicab) {
        $pdo = Database::connect();
        $sql = "insert into cabestrategia(idestrategia, perspectivacab, objetivocab, finalidadcab, propositocab, iniciativacab, fechaicab) values (?,?,?,?,?,?,?)";
        $consulta = $pdo->prepare($sql);
        try {
            $consulta->execute(array($idestrategia, $perspectivacab, $objetivocab, $finalidadcab, $propositocab, $iniciativacab, $fechaicab));
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

    public function getCabestrategia($idcabestrategia) {
        $pdo = Database::connect();
        $sql = "select * from cabestrategia where idcabestrategia=?";
        $consulta = $pdo->prepare($sql);
        $consulta->execute(array($idcabestrategia));
        $res = $consulta->fetch(PDO::FETCH_ASSOC);
        $cabestrategia = new Cabestrategia($res['idcabestrategia'], $res['idestrategia'], $res['perspectivacab'], $res['objetivocab'], $res['finalidadcab'], $res['propositocab'], $res['iniciativacab'], $res['fechaicab']);
        Database::disconnect();
        return $cabestrategia;
    }

    public function actualizarCabestrategia($idestrategia, $perspectivacab, $objetivocab, $finalidadcab, $propositocab, $iniciativacab, $fechaicab, $idcabestrategia) {
        $pdo = Database::connect();
        $sql = "update cabestrategia set idestrategia=?, perspectivacab=?, objetivocab=?, finalidadcab=?, propositocab=?, iniciativacab=?, fechaicab=? where idcabestrategia=?";
        $consulta = $pdo->prepare($sql);
        try {
            $consulta->execute(array($idestrategia, $perspectivacab, $objetivocab, $finalidadcab, $propositocab, $iniciativacab, $fechaicab, $idcabestrategia));
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

    public function eliminarCabestrategia($idcabestrategia) {
        $pdo = Database::connect();
        $sql = "delete from cabestrategia where idcabestrategia=?";
        $consulta = $pdo->prepare($sql);
        try {
            $consulta->execute(array($idcabestrategia));
        } catch (Exception $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

    //METODOS CRUD TABLA FINALIDADPROPOSITO
    public function getFinalidadpropositos() {
        $pdo = Database::connect();
        $sql = "select * from finalidadproposito";
        $resultado = $pdo->query($sql);
        $listado = array();
        foreach ($resultado as $res) {
            $finalidadproposito = new Finalidadproposito($res['idfp'], $res['idambito'], $res['finalidadfp'], $res['propositofp'], $res['coordinadorfp'], $res['ejecutorfp']);
            array_push($listado, $finalidadproposito);
        }
        Database::disconnect();
        return $listado;
    }

    public function insertarFinalidadproposito($idambito, $finalidadfp, $propositofp, $coordinadorfp, $ejecutorfp, $objetivo) {
        $pdo = Database::connect();
        $sql = "insert into finalidadproposito(idambito, finalidadfp, propositofp, coordinadorfp, ejecutorfp, objetivo) values (?,?,?,?,?,?)";
        $consulta = $pdo->prepare($sql);
        try {
            $consulta->execute(array($idambito, $finalidadfp, $propositofp, $coordinadorfp, $ejecutorfp, $objetivo));
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

    public function getFinalidadproposito($idfp) {
        $pdo = Database::connect();
        $sql = "select * from finalidadproposito where idfp=?";
        $consulta = $pdo->prepare($sql);
        $consulta->execute(array($idfp));
        $res = $consulta->fetch(PDO::FETCH_ASSOC);
        $finalidadproposito = new Finalidadproposito($res['idfp'], $res['idambito'], $res['finalidadfp'], $res['propositofp'], $res['coordinadorfp'], $res['ejecutorfp']);
        Database::disconnect();
        return $finalidadproposito;
    }

    public function actualizarFinalidadproposito($idambito, $finalidadfp, $propositofp, $coordinadorfp, $ejecutorfp, $idfp) {
        $pdo = Database::connect();
        $sql = "UPDATE finalidadproposito SET idambito=?, finalidadfp=?,propositofp=?,coordinadorfp=?,ejecutorfp=? WHERE idfp=?";
        $consulta = $pdo->prepare($sql);
        try {
            $consulta->execute(array($idambito, $finalidadfp, $propositofp, $coordinadorfp, $ejecutorfp, $idfp));
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

    public function eliminarFinalidadproposito($idfp) {
        $pdo = Database::connect();
        $sql = "delete from finalidadproposito where idfp=?";
        $consulta = $pdo->prepare($sql);
        try {
            $consulta->execute(array($idfp));
        } catch (Exception $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

    //METODOS CRUD TABLA PROYECTOSEST
    public function getProyectosests() {
        $pdo = Database::connect();
        $sql = "select * from proyectosest";
        $resultado = $pdo->query($sql);
        $listado = array();
        foreach ($resultado as $res) {
            $proyectosest = new Proyectosest($res['idproyectoest'], $res['proyectoest'], $res['descripcionest'], $res['viabilidadest']);
            array_push($listado, $proyectosest);
        }
        Database::disconnect();
        return $listado;
    }

    public function insertarProyectosest($proyectoest, $descripcionest, $viabilidadest) {
        $pdo = Database::connect();
        $sql = "insert into proyectosest (proyectoest, descripcionest, viabilidadest) values (?,?,?)";
        $consulta = $pdo->prepare($sql);
        try {
            $consulta->execute(array($proyectoest, $descripcionest, $viabilidadest));
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

    public function getProyectosest($idproyectoest) {
        $pdo = Database::connect();
        $sql = "select * from proyectosest where idproyectoest=?";
        $consulta = $pdo->prepare($sql);
        $consulta->execute(array($idproyectoest));
        $res = $consulta->fetch(PDO::FETCH_ASSOC);
        $proyectosest = new Proyectosest($res['idproyectoest'], $res['proyectoest'], $res['descripcionest'], $res['viabilidadest']);
        Database::disconnect();
        return $proyectosest;
    }

    public function actualizarProyectosest($idproyectoest, $proyectoest, $descripcionest, $viabilidadest) {
        $pdo = Database::connect();
        $sql = "update proyectosest set proyectoest=? ,descripcionest=?, viabilidadest=? where idproyectoest=?";
        $consulta = $pdo->prepare($sql);
        try {
            $consulta->execute(array($proyectoest, $descripcionest, $viabilidadest, $idproyectoest));
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

    public function eliminarProyectosest($idproyectoest) {
        $pdo = Database::connect();
        $sql = "delete from proyectosest where idproyectoest=?";
        $consulta = $pdo->prepare($sql);
        try {
            $consulta->execute(array($idproyectoest));
        } catch (Exception $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

    //METODOS CRUD TABLA PONDERACIONOBJ
    public function getPonderacionobjs() {
        $pdo = Database::connect();
        $sql = "select * from ponderacionobj";
        $resultado = $pdo->query($sql);
        $listado = array();
        foreach ($resultado as $res) {
            $ponderacionobj = new Ponderacionobj($res['idponderacionobj'], $res['perspectivaestpon'], $res['tipoobjpon'], $res['finalidadpon'], $res['propositopon'], $res['indicadorpripon'], $res['pesoporimppon']);
            array_push($listado, $ponderacionobj);
        }
        Database::disconnect();
        return $listado;
    }

    public function insertarPonderacionobj($perspectivaestpon, $tipoobjpon, $finalidadpon, $propositopon, $indicadorpripon, $pesoporimppon) {
        $pdo = Database::connect();
        $sql = "insert into ponderacionobj (perspectivaestpon, tipoobjpon, finalidadpon, propositopon,indicadorpripon, pesoporimppon) values (?,?,?,?,?,?)";
        $consulta = $pdo->prepare($sql);
        try {
            $consulta->execute(array($perspectivaestpon, $tipoobjpon, $finalidadpon, $propositopon, $indicadorpripon, $pesoporimppon));
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

    public function getPonderacionobj($idponderacionobj) {
        $pdo = Database::connect();
        $sql = "select * from ponderacionobj where idponderacionobj=?";
        $consulta = $pdo->prepare($sql);
        $consulta->execute(array($idponderacionobj));
        $res = $consulta->fetch(PDO::FETCH_ASSOC);
        $ponderacionobj = new Ponderacionobj($res['idponderacionobj'], $res['perspectivaestpon'], $res['tipoobjpon'], $res['finalidadpon'], $res['propositopon'], $res['indicadorpripon'], $res['pesoporimppon']);
        Database::disconnect();
        return $ponderacionobj;
    }

    public function actualizarPonderacionobj($idponderacionobj, $perspectivaestpon, $tipoobjpon, $finalidadpon, $propositopon, $indicadorpripon, $pesoporimppon) {
        $pdo = Database::connect();
        $sql = "update ponderacionobj set perspectivaestpon=? ,tipoobjpon=?, finalidadpon=?, propositopon=?, indicadorpripon=?, pesoporimppon=? where idponderacionobj=?";
        $consulta = $pdo->prepare($sql);
        try {
            $consulta->execute(array($perspectivaestpon, $tipoobjpon, $finalidadpon, $propositopon, $indicadorpripon, $pesoporimppon, $idponderacionobj));
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

    public function eliminarPonderacionobj($idponderacionobj) {
        $pdo = Database::connect();
        $sql = "delete from ponderacionobj where idponderacionobj=?";
        $consulta = $pdo->prepare($sql);
        try {
            $consulta->execute(array($idponderacionobj));
        } catch (Exception $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

    //METODOS CRUD TABLA INICIATIVASEST 
    public function getIniciativasests() {
        $pdo = Database::connect();
        $sql = "select * from iniciativasest";
        $resultado = $pdo->query($sql);
        $listado = array();
        foreach ($resultado as $res) {
            $iniciativaest = new Iniciativasest($res['idiniciativasest'], $res['idcuadroman'], $res['descripcionini']);
            array_push($listado, $iniciativaest);
        }
        Database::disconnect();
        return $listado;
    }

    public function insertarIniciativasest($idcuadroman, $descripcionini) {
        $pdo = Database::connect();
        $sql = "insert into iniciativasest (idcuadroman, descripcionini) values (?,?)";
        $consulta = $pdo->prepare($sql);
        try {
            $consulta->execute(array($idcuadroman, $descripcionini));
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

    public function getIniciativasest($idiniciativasest) {
        $pdo = Database::connect();
        $sql = "select * from iniciativasest where idiniciativasest=?";
        $consulta = $pdo->prepare($sql);
        $consulta->execute(array($idiniciativasest));
        $res = $consulta->fetch(PDO::FETCH_ASSOC);
        $iniciativaasest = new Iniciativasest($res['idiniciativasest'], $res['idcuadroman'], $res['descripcionini']);
        Database::disconnect();
        return $iniciativaasest;
    }

    public function actualizarIniciativasest($idiniciativasest, $idcuadroman, $descripcionini) {
        $pdo = Database::connect();
        $sql = "update iniciativasest set idcuadroman=? ,descripcionini=? where idiniciativasest=?";
        $consulta = $pdo->prepare($sql);
        try {
            $consulta->execute(array($idcuadroman, $descripcionini, $idiniciativasest));
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

    public function eliminarIniciativasest($idiniciativasest) {
        $pdo = Database::connect();
        $sql = "delete from iniciativasest where idiniciativasest=?";
        $consulta = $pdo->prepare($sql);
        try {
            $consulta->execute(array($idiniciativasest));
        } catch (Exception $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }
    
    //METODOS CRUD TABLA  FLOAS 
    public function getFloas() {
        $pdo = Database::connect();
        $sql = "select * from floas order by areafloas";
        $resultado = $pdo->query($sql);
        $listado = array();
        foreach ($resultado as $res) {
            $floas = new floas($res['idfloas'], $res['areafloas'], $res['detallefloas']);
            array_push($listado, $floas);
        }
        Database::disconnect();
        return $listado;
    }

    public function insertarFloa($areafloas, $detallefloas) {
        $pdo = Database::connect();
        $sql = "insert into floas (areafloas, detallefloas) values (?,?)";
        $consulta = $pdo->prepare($sql);
        try {
            $consulta->execute(array($areafloas, $detallefloas));
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

    public function getFloa($idfloas) {
        $pdo = Database::connect();
        $sql = "select * from floas where idfloas=?";
        $consulta = $pdo->prepare($sql);
        $consulta->execute(array($idfloas));
        $res = $consulta->fetch(PDO::FETCH_ASSOC);
        $floas = new floas($res['idfloas'], $res['areafloas'], $res['detallefloas']);
        Database::disconnect();
        return $floas;
    }

    public function actualizarFloa($idfloas, $areafloas, $detallefloas) {
        $pdo = Database::connect();
        $sql = "update floas set areafloas=? ,detallefloas=? where idfloas=?";
        $consulta = $pdo->prepare($sql);
        try {
            $consulta->execute(array($areafloas, $detallefloas, $idfloas));
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

    public function eliminarFloa($idfloas) {
        $pdo = Database::connect();
        $sql = "delete from floas where idfloas=?";
        $consulta = $pdo->prepare($sql);
        try {
            $consulta->execute(array($idfloas));
        } catch (Exception $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

    //REPORTES
    public function getFinalidadpropositoU($idambito) {
        $pdo = Database::connect();
        $sql = "select * from finalidadproposito where idambito=?";
        $consulta = $pdo->prepare($sql);
        $consulta->execute(array($idambito));
        $listado = array();
        foreach ($consulta as $res) {
            $finalidadproposito = new Finalidadproposito($res['idfp'], $res['idambito'], $res['finalidadfp'], $res['propositofp'], $res['coordinadorfp'], $res['ejecutorfp']);
            array_push($listado, $finalidadproposito);
        }
        Database::disconnect();
        return $listado;
    }

    public function getEstrategiaU($idambito) {
        $pdo = Database::connect();
        $sql = "select * from estrategia where idambito=?";
        $consulta = $pdo->prepare($sql);
        $consulta->execute(array($idambito));
        $listado = array();
        foreach ($consulta as $res) {
            $estrategia = new Estrategia($res['idestrategia'], $res['idambito'], $res['detalleestrategia']);
            array_push($listado, $estrategia);
        }
        Database::disconnect();
        return $listado;
    }

    public function getConstruccionicrU($idambito) {
        $pdo = Database::connect();
        $sql = "select * from construccionicr where idambito=?";
        $consulta = $pdo->prepare($sql);
        $consulta->execute(array($idambito));
        $listado = array();
        foreach ($consulta as $res) {
            $construccionicr = new Construccionicr($res['idicr'], $res['idambito'], $res['denominacionicr'], $res['descripcionicr'], $res['calculoicr'], $res['periodicidadicr'], $res['medidaicr'], $res['fuenteicr'], $res['tendenciaicr'], $res['otrosicr']);
            array_push($listado, $construccionicr);
        }
        Database::disconnect();
        return $listado;
    }

    public function getDeterminacionmetaU($idambito) {
        $pdo = Database::connect();
        $sql = "select * from determinacionmeta where idambito=?";
        $consulta = $pdo->prepare($sql);
        $consulta->execute(array($idambito));
        $listado = array();
        foreach ($consulta as $res) {
            $determinacionmeta = new Determinacionmeta($res['iddeterminacion'], $res['idambito'], $res['estandardeter'], $res['inferiordeter'], $res['basedeter'], $res['superiordeter']);
            array_push($listado, $determinacionmeta);
        }
        Database::disconnect();
        return $listado;
    }
    
    //reportes cuadro mando
    public function getCuadroMando1() {
         $pdo = Database::connect();
        $sql = "select distinct f.detallefinanciera as 'perspectiva', fp.objetivo as 'objetivo', fp.finalidadfp as 'finalidad', fp.propositofp as 'proposito', i.denominacionicr as 'indicador',d.inferiordeter as 'inferior', d.basedeter as 'base', d.superiordeter as 'superior', e.idambito as 'idambito'
from financiera f, finalidadproposito fp, ambito a, estrategia e, determinacionmeta d, construccionicr i
where f.idfinanciera=a.idfinanciera and a.idambito=e.idambito and fp.idambito=a.idambito and d.idambito=a.idambito and i.idambito=a.idambito";
        $resultado = $pdo->query($sql);
        $listado = array();
        foreach ($resultado as $res) {
            $cuadromando = new Cuadromando($res['perspectiva'], $res['objetivo'], $res['finalidad'], $res['proposito'], $res['indicador'], $res['inferior'], $res['base'], $res['superior'], $res['idambito']);
            array_push($listado, $cuadromando);
        }
        Database::disconnect();
        return $listado;
    }
}
