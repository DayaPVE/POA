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

$nombre = unserialize($_SESSION['nombre']);
$idestrategia = unserialize($_SESSION['idestrategia']);

$codigocabecera = unserialize($_SESSION['codigocabecera']);

//$idcabestrategia1 = unserialize($_SESSION['idcabestrategia1']);
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
            
            <table width="100%" >
                <tr><td height="20" colspan="3"></td></tr>
                <tr>
                    <td align="center" colspan="3"><h2><font color="darkblue"><?php echo $estrategiaD; ?></font></h2></td>
                </tr>
                <tr><td height="10" colspan="3"></td></tr>
                <tr>
                    <td align="center" colspan="2"><h4><font color="darkblue"><?php echo $nombre; ?></font></h4></td>
                </tr>
                </tr>
                <tr><td height="5" colspan="3"></td></tr>
                <tr>
                    <td width="200" align="left" colspan="3"> <a href="indexInsertarDetallesCab.php">Insertar detalles</a> </td>
                </tr>
                 <tr><td height="5" colspan="3"></td></tr>
                <tr>
                    <td width="200" align="left" colspan="3"> <a href="indexInsertarDetallesDet.php">Insertar actividades del cronográma</a> </td>
                </tr>
                <tr><td height="20" colspan="3"></td></tr>
                <tr>
                    <td>
                        <table>
                            <tr>
                                <td></td>
                                <td colspan="3" height="20" align="left"><a href="indexFinancieroUno.php">   Regresar</a></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>

            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr align="center">
                        <th colspan="2"><font color="darkblue">PLAN DE ACTIVIDADES<FONT></th>                     
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($_SESSION['listadoCabE'])) {
                        $listadoCabE = unserialize($_SESSION['listadoCabE']);
                        foreach ($listadoCabE as $fp) {
                            echo "<tr>";
                            echo "<td><b><b>Perspectiva Estratégica</b></td>";
                            echo "<td>" . $fp->getPerspectivacab() . "</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td><b>Tipo objetivo</b></td>";
                            echo "<td>" . $fp->getObjetivocab() . "</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td><b>Finalidad</b> (¿Qué se va hacer?)</td>";
                            echo "<td>" . $fp->getFinalidadcab() . "</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td><b>Propósito</b> (¿Para qué se va hacer?)</td>";
                            echo "<td>" . $fp->getPropositocab() . "</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td><b>Iniciativa</b> (¿Cómo se va hacer?)</td>";
                            echo "<td>" . $fp->getIniciativacab() . "</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td><b>Fecha de inicio del PAC</b></td>";
                            echo "<td>" . $fp->getFechaicab() . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "No se han cargado datos.";
                    }
                    ?>
                </tbody>
            </table>
            <table WIDTH="100%" >
                <tr><td height="20" colspan="2"></td></tr>
                <tr align="center" ><td colspan="2"><B><font color="darkblue">DETALLE DEL PLAN DE ACTIVIDADES<FONT></b></td></tr>
                <tr align="left">
                    <td width="5" height="20"</td>
                    <td width="300">
                        <?php
                        echo "<a href = '../controller/controller1.php?opcion=vercronograma&idcabestrategia=" . $codigocabecera . "'>Ver actividades</a>";
                        ?>
                    </td>
                </tr>
            </table>
            <table class="table-bordered" width="100%" cellspacing="0" >
                <thead >
                    <tr align="center">
                        <th rowspan="2">ACCIONES</th>  
                        <th colspan=3>RESPONSABILIDAD</th> 
                        <th colspan="12">CRONOGRAMA</th> 
                        <th colspan="3">RECURSOS</th> 
                        <th colspan="2">FACTORES DE CUMPLIMIENTO</th>           
                        <th colspan="2" rowspan="2">OPCIONES</th>                  
                    </tr>
                    <tr align="center"> 
                        <th><font size="1">PRIMARIA</font></th>
                        <th><font size="1">OTROS</font></th>
                        <th><font size="1">TIPO ACT.</font></th>
                        <th><font size="1">ENE</font></th>
                        <th><font size="1">FEB</font></th>
                        <th><font size="1">MAR</font></th>
                        <th><font size="1">ABR</font></th>
                        <th><font size="1">MAY</font></th>
                        <th><font size="1">JUN</font></th>
                        <th><font size="1">JUL</font></th>
                        <th><font size="1">AGO</font></th>
                        <th><font size="1">SEP</font></th>
                        <th><font size="1">OCT</font></th>
                        <th><font size="1">NOV</font></th>
                        <th><font size="1">DIC</font></th>
                        <th><font size="1">HUMANOS</font></th>
                        <th><font size="1">MATERIALES</font></th>
                        <th><font size="1">FINANCIEROS</font></th>
                        <th><font size="1">MEDIO DE VERIFICACIÓN</font></th>  
                        <th><font size="1">ESCALA DE CUMPLIMIENTO</font></th>            
                    </tr>
                </thead>

                <tbody>
                    <?php
                    if (isset($_SESSION['listadoDetE'])) {
                        $listadoDetE = unserialize($_SESSION['listadoDetE']);

                        foreach ($listadoDetE as $est) {
                            echo "<tr align='center'>";
                            echo "<td>" . $est->getAccionesdet() . "</td>";
                            echo "<td>" . $est->getPrimariadet() . "</td>";
                            echo "<td>" . $est->getOtrosdet() . "</td>";
                            echo "<td>" . $est->getTipoactdet() . "</td>";
                            if ($est->getEnero() != 0) {
                                echo "<td bgcolor='orange'>" . $est->getEnero() . "</td>";
                            } else {
                                echo "<td>" . $est->getEnero() . "</td>";
                            }
                            if ($est->getFebrero() != 0) {
                                echo "<td bgcolor='orange'>" . $est->getFebrero() . "</td>";
                            } else {
                                echo "<td>" . $est->getFebrero() . "</td>";
                            }
                            if ($est->getMarzo() != 0) {
                                echo "<td bgcolor='orange'>" . $est->getMarzo() . "</td>";
                            } else {
                                echo "<td>" . $est->getMarzo() . "</td>";
                            }
                            if ($est->getAbril() != 0) {
                                echo "<td bgcolor='orange'>" . $est->getAbril() . "</td>";
                            } else {
                                echo "<td>" . $est->getAbril() . "</td>";
                            }
                            if ($est->getMayo() != 0) {
                                echo "<td bgcolor='orange'>" . $est->getMayo() . "</td>";
                            } else {
                                echo "<td>" . $est->getMayo() . "</td>";
                            }
                            if ($est->getJunio() != 0) {
                                echo "<td bgcolor='orange'>" . $est->getJunio() . "</td>";
                            } else {
                                echo "<td>" . $est->getJunio() . "</td>";
                            }
                            if ($est->getJulio() != 0) {
                                echo "<td bgcolor='orange'>" . $est->getJulio() . "</td>";
                            } else {
                                echo "<td>" . $est->getJulio() . "</td>";
                            }
                            if ($est->getAgosto() != 0) {
                                echo "<td bgcolor='orange'>" . $est->getAgosto() . "</td>";
                            } else {
                                echo "<td>" . $est->getAgosto() . "</td>";
                            }
                            if ($est->getSeptiembre() != 0) {
                                echo "<td bgcolor='orange'>" . $est->getSeptiembre() . "</td>";
                            } else {
                                echo "<td>" . $est->getSeptiembre() . "</td>";
                            }
                            if ($est->getOctubre() != 0) {
                                echo "<td bgcolor='orange'>" . $est->getOctubre() . "</td>";
                            } else {
                                echo "<td>" . $est->getOctubre() . "</td>";
                            }
                            if ($est->getNoviembre() != 0) {
                                echo "<td bgcolor='orange'>" . $est->getNoviembre() . "</td>";
                            } else {
                                echo "<td>" . $est->getNoviembre() . "</td>";
                            }
                            if ($est->getDiciembre() != 0) {
                                echo "<td bgcolor='orange'>" . $est->getDiciembre() . "</td>";
                            } else {
                                echo "<td>" . $est->getDiciembre() . "</td>";
                            }
                            echo "<td>" . $est->getRrhhdet() . "</td>";
                            echo "<td>" . $est->getRrmmdet() . "</td>";
                            echo "<td>" . $est->getRrffdet() . "</td>";
                            echo "<td>" . $est->getVerificaciondet() . "</td>";
                            if ($est->getEscaladet() == 1) {
                                echo "<td bgcolor='red'>" . $est->getEscaladet() . "</td>";
                            } else if ($est->getEscaladet() == 2) {
                                echo "<td bgcolor='yellow'>" . $est->getEscaladet() . "</td>";
                            } else if ($est->getEscaladet() == 3) {
                                echo "<td bgcolor='green'>" . $est->getEscaladet() . "</td>";
                            }
                            echo "<td><a href='../controller/controller1.php?opcion=cargarDetestrategia&iddetestrategia=" . $est->getIddetestrategia() . "&idcabestrategia=" . $codigocabecera . "'><font size=1>actualizar</font></a></td>";
                            echo "<td><a href='../controller/controller1.php?opcion=eliminarDetestrategia&iddetestrategia=" . $est->getIddetestrategia() . "&idcabestrategia=" . $codigocabecera . "'><font size=1>eliminar</font></a></td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </tbody>
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
