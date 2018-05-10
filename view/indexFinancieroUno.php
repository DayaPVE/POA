<!DOCTYPE html>
<?php
session_start();
include_once '../model/Ambito.php';
include_once '../model/Cabestrategia.php';
include_once '../model/Construccionicr.php';
include_once '../model/Determinacionmeta.php';
include_once '../model/Detestrategia.php';
include_once '../model/Estrategia.php';
include_once '../model/Finalidadproposito.php';
include_once '../model/PoaModel.php';

$estrategiaD = unserialize($_SESSION['estrategiaD']);
$ambito = unserialize($_SESSION['ambito']);
?>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>POA-COAC</title>
        <!-- Bootstrap core CSS-->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Page level plugin CSS-->
        <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="css/sb-admin.css" rel="stylesheet">
    </head>

    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <a class="navbar-brand" href="index.php">COOPERATIVA DE AHORRO Y CRÉDITO "SAN ANTONIO LTDA." - IMBABURA</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">                    
                    <li title='Cooperativa de Ahorro y Crédito "San Antonio Ltda." - Imbabura"'>
                        <a class="nav-link" href="index.php">
                            <center><img src="../view/images/logo.png" height="75" width="75"></center>
                            <center>INICIO</center>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Visión">
                        <a class="nav-link" href="vision.php">
                            <i class="fa fa-fw fa-area-chart"></i>
                            <span class="nav-link-text">Visión</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Misión">
                        <a class="nav-link" href="mision.php">
                            <i class="fa fa-fw fa-medium"></i>
                            <span class="nav-link-text">Misión</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                        <a class="nav-link" href="valores.php">
                            <i class="fa fa-fw fa-vimeo"></i>
                            <span class="nav-link-text">Valores</span>
                        </a>
                    </li>        
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="FLOAs">
                        <a class="nav-link" href="floas.php">
                            <i class="fa fa-fw fa-th-large"></i>
                            <span class="nav-link-text">FLOAs</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Proyectos Estratégicos">
                        <a class="nav-link" href="proyectosestrategicos.php">
                            <i class="fa fa-fw fa-product-hunt"></i>
                            <span class="nav-link-text">Proyectos Estratégicos</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Ponderación de Objetivos">
                        <a class="nav-link" href="ponderaciondeobjetivos.php">
                            <i class="fa fa-fw fa-object-ungroup"></i>
                            <span class="nav-link-text">Ponderación de Objetivos</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Cuadro de Mando">
                        <a class="nav-link" href="cuadrodemando.php">
                            <i class="fa fa-fw fa-table"></i>
                            <span class="nav-link-text">Cuadro de Mando</span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav sidenav-toggler">
                    <li class="nav-item">
                        <a class="nav-link text-center" id="sidenavToggler">
                            <i class="fa fa-fw fa-angle-left"></i>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link"  href="../controller/controller1.php?opcion=cerrarsesion" data-target="#exampleModal">
                            <i class="fa fa-fw fa-sign-out"></i>Salir del Sistema</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="content-wrapper">
            <div class="container-fluid">

                <table width="100%">
                    <tr><td height="20" colspan="3"></td></tr>
                    <tr>
                        <td height="20"></td>
                        <td align="center"><h2><font color="darkblue"><?php echo $estrategiaD; ?></font></h2></td>
                        <td height="20"</td>
                    </tr>
                    <tr><td height="5" colspan="3"></td></tr>
                    <tr>
                        <td width="200" align="left" colspan="3"> <a href="indexInsertar.php">Insertar detalles</a> </td>
                    </tr>
                    <tr><td height="20" colspan="3"></td></tr>
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td width="5"></td>
                                    <td colspan="3" height="20" align="left"><a href="index.php">   Regresar</a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>

                <table width="100%" >
                    <tr><td height="20" colspan="9"></td></tr>
                    <tr>
                        <td align="center" colspan="9"><h5><font color="darkblue">ATRIBUTOS DEL OBJETIVO</font></h5></td>
                    </tr>
                    <tr><td height="20" colspan="9"></td></tr>
                </table>




                <table class="table table-bordered"  width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>PERSPECTIVA ESTRATÉGICA</th>
                            <th>DETALLES</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        if (isset($_SESSION['listadoFP'])) {
                            $listadoFP = unserialize($_SESSION['listadoFP']);
                            foreach ($listadoFP as $fp) {
                                echo "<tr>";
                                echo "<td><b>Finalidad</b> (¿Qué se va hacer?)</td>";
                                echo "<td>" . $fp->getFinalidadfp() . "</td>";
                                echo "</tr>";
                                echo "<tr>";
                                echo "<td><b>Propósito</b> (¿Para qué se va hacer?)</td>";
                                echo "<td>" . $fp->getPropositofp() . "</td>";
                                echo "</tr>";
                                echo "<tr>";
                                echo "<td><b>Coordinador del Objetivo</b></td>";
                                echo "<td>" . $fp->getCoordinadorfp() . "</td>";
                                echo "</tr>";
                                echo "<tr>";
                                echo "<td><b>Ejecutor del Objetivo</b></td>";
                                echo "<td>" . $fp->getEjecutorfp() . "</td>";
                                echo "</tr>";
                                echo "<a href='../controller/controller1.php?opcion=cargarFP&idfp=" . $fp->getIdfp() . "'>Actualizar</a>";
                            }
                        } else {
                            echo "No se han cargado datos.";
                        }
                        ?>
                    </tbody>

                </table>


                <table width="100%" >
                    <tr><td height="20" colspan="9"></td></tr>
                    <tr>
                        <td align="center" colspan="9"><h5><font color="darkblue">INICIATIVAS ESTRATÉGICAS</font></h5></td>
                    </tr>
                    <tr><td height="20" colspan="9"></td></tr>
                </table>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ÁMBITO</th>
                            <th>INICIATIVA</th>
                            <th>NAVEGACIÓN</th>
                            <th>OPCIONES</th>
                            <th>OPCIONES</th>                            
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $poaModel = new PoaModel();
                        $listadoAmbito = $poaModel->getAmbitos();
                        if (isset($_SESSION['listadoEstrategia'])) {
                            $listadoEstrategia = unserialize($_SESSION['listadoEstrategia']);
                            foreach ($listadoEstrategia as $est) {
                                $ambito = "";
                                foreach ($listadoAmbito as $amb) {
                                    if ($est->getIdambito() == $amb->getIdambito()) {
                                        $ambito = $amb->getDetalleambito();
                                    }
                                }
                                echo "<tr>";
                                echo "<td>" . $ambito . "</td>";
                                echo "<td>" . $est->getDetalleestrategia() . "</td>";
                                echo "<td><a href='../controller/controller1.php?opcion=verdetalles&idestrategia=" . $est->getIdestrategia() . "'>ver detalles</a></td>";
                                echo "<td><a href='../controller/controller1.php?opcion=cargarEstrategia&idestrategia=" . $est->getIdestrategia() . "'>actualizar</a></td>";
                                echo "<td><a href='../controller/controller1.php?opcion=eliminarEstrategia&idestrategia=" . $est->getIdestrategia() . "'>eliminar</a></td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "No se han cargado datos.";
                        }
                        ?>
                    </tbody>
                </table>


                <table width="100%" >
                    <tr><td height="20" colspan="9"></td></tr>
                    <tr>
                        <td align="center" colspan="9"><h5><font color="darkblue">CONSTRUCCIÓN DEL ICR</font></h5></td>
                    </tr>
                    <tr><td height="20" colspan="9"></td></tr>
                </table>

                <table class="table table-bordered"  width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>PERFIL</th>
                            <th>INDICADOR PRIMARIO</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        if (isset($_SESSION['listadoICR'])) {
                            $listadoICR = unserialize($_SESSION['listadoICR']);
                            foreach ($listadoICR as $icr) {
                                echo "<tr>";
                                echo "<td><b>Denominación</b></td>";
                                echo "<td>" . $icr->getDenominacionicr() . "</td>";
                                echo "</tr>";
                                echo "<tr>";
                                echo "<td><b>Descripción</b></td>";
                                echo "<td>" . $icr->getDescripcionicr() . "</td>";
                                echo "</tr>";
                                echo "<tr>";
                                echo "<td><b>Forma de cálculo</b></td>";
                                echo "<td>" . $icr->getCalculoicr() . "</td>";
                                echo "</tr>";
                                echo "<tr>";
                                echo "<td><b>Periodicidad y medición de seguimiento</b></td>";
                                echo "<td>" . $icr->getPeriodicidadicr() . "</td>";
                                echo "</tr>";
                                echo "<tr>";
                                echo "<td><b>Unidad de medida</b></td>";
                                echo "<td>" . $icr->getMedidaicr() . "</td>";
                                echo "</tr>";
                                echo "<tr>";
                                echo "<td><b>Fuente de recolección de datos</b></td>";
                                echo "<td>" . $icr->getFuenteicr() . "</td>";
                                echo "</tr>";
                                echo "<tr>";
                                echo "<td><b>Tendencia de mejoramiento</b></td>";
                                echo "<td>" . $icr->getTendenciaicr() . "</td>";
                                echo "</tr>";
                                echo "<tr>";
                                echo "<td><b>Otras observaciones</b></td>";
                                echo "<td>" . $icr->getOtrosicr() . "</td>";
                                echo "</tr>";
                                echo "<a href='../controller/controller1.php?opcion=cargarICR&idicr=" . $icr->getIdicr() . "'>Actualizar</a>";
                            }
                        } else {
                            echo "No se han cargado datos.";
                        }
                        ?>
                    </tbody>
                </table>


                <table width="100%" >
                    <tr><td height="20" colspan="9"></td></tr>
                    <tr>
                        <td align="center" colspan="9"><h5><font color="darkblue">DETERMINACIÓN DE BANDA DE META</font></h5></td>
                    </tr>
                    <tr><td height="20" colspan="9"></td></tr>
                </table>

                <table class="table table-bordered"  width="100%" cellspacing="0">
                    <thead>
                    <tbody>
                        <?php
                        if (isset($_SESSION['listadoDM'])) {
                            $listadoDM = unserialize($_SESSION['listadoDM']);
                            foreach ($listadoDM as $icr) {
                                echo "<tr>";
                                echo "<td><b>Estándar de la Industria</b></td>";
                                echo "<td>" . $icr->getEstandardeter() . "</td>";
                                echo "</tr>";
                                echo "<tr>";
                                echo "<td><b>Límite inferior</b></td>";
                                echo "<td>" . $icr->getInferiordeter() . "</td>";
                                echo "</tr>";
                                echo "<tr>";
                                echo "<td><b>Línea Base</b></td>";
                                echo "<td>" . $icr->getBasedeter() . "</td>";
                                echo "</tr>";
                                echo "<tr>";
                                echo "<td><b>Límite superior</b></td>";
                                echo "<td>" . $icr->getSuperiordeter() . "</td>";
                                echo "</tr>";
                                echo "<a href='../controller/controller1.php?opcion=cargarDM&iddeterminacion=" . $icr->getIddeterminacion() . "'>Actualizar</a>";
                            }
                        } else {
                            echo "No se han cargado datos.";
                        }
                        ?>
                    </tbody>
                </table>
                <table>
                    <tr>
                        <td width="5"></td>
                        <td colspan="3" height="20" align="left"><a href="index.php">   Regresar</a></td>
                    </tr>
                </table>
            </div>
            <!-- /.container-fluid-->
            <!-- /.content-wrapper-->
            <footer class="sticky-footer">
                <div class="container">
                    <div class="text-center">
                        <small>COAC "San Antonio Ltda." - Imbabura - Ibarra</small>
                    </div>
                </div>
            </footer>
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fa fa-angle-up"></i>
            </a>
            <!-- Logout Modal-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="login.html">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
            <!-- Page level plugin JavaScript-->
            <script src="vendor/chart.js/Chart.min.js"></script>
            <script src="vendor/datatables/jquery.dataTables.js"></script>
            <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin.min.js"></script>
            <!-- Custom scripts for this page-->
            <script src="js/sb-admin-datatables.min.js"></script>
            <script src="js/sb-admin-charts.min.js"></script>
        </div>
    </body>

</html>
