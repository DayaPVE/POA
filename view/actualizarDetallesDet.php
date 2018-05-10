<!DOCTYPE html>
<?php
session_start();
include_once '../model/Ambito.php';
include_once '../model/Cabestrategia.php';
include_once '../model/Construccionicr.php';
include_once '../model/Determinacionmeta.php';
include_once '../model/Detestrategia.php';
include_once '../model/Estrategia.php';
include_once '../model/Financiera.php';
include_once '../model/Finalidadproposito.php';
include_once '../model/PoaModel.php';

$estrategiaD = unserialize($_SESSION['estrategiaD']);
$ambito = unserialize($_SESSION['ambito']);

$nombre = unserialize($_SESSION['nombre']);
$idestrategia = unserialize($_SESSION['idestrategia']);


$codigocabecera = unserialize($_SESSION['codigocabecera']);


$detalleestrategia = unserialize($_SESSION['detalleestrategia']);
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
                <tr><td height="20" colspan="12"></td></tr>
                <tr>
                    <td align="center" colspan="12"><h3><font color="darkblue"><?php echo $estrategiaD; ?></font></h3></td>
                </tr>
                <tr><td height="20" colspan="12"></td></tr>
                <tr>
                    <td align="center" colspan="9"><h4><font color="darkblue"><?php echo $nombre; ?></font></h4></td>
                </tr>
                <tr><td height="20" colspan="12"></td></tr>
            </table>
            
            <table width="100%" >
            <tr>
                    <td width="10%"></td>
                    <td align="center"><h3><font color="darkblue">ACTUALIZAR DETALLE DEL PLAN DE ACCIÓN</font></h3></td>
                    <td width="10%"></td>
                </tr>
                <tr>
                    <td colspan="3" height="20"></td>
                </tr>
                <tr>
                    <td width="10%"></td>
                    <td>
                        <form action="../controller/controller1.php">
                            <input type="hidden" value="actualizardetestrategia" name="opcion">
                            <input type="hidden" value="<?php echo $detalleestrategia->getIddetestrategia(); ?>" name="iddetestrategia">
                            <input type="hidden" value="<?php echo $detalleestrategia->getIdcabestrategia(); ?>" name="idcabestrategia">
                            
                            <center>
                                <table width="100%">
                                    <tr>
                                        <td><b>Acciones:</b></td>
                                        <td width="10"></td>
                                        <td align =center><textarea name="accionesdet" rows="2" cols="30"  required><?php echo $detalleestrategia->getAccionesdet(); ?></textarea></td>                                                
                                        <td width="20"></td>
                                        <td><b>Primaria:</b></td>
                                        <td width="10"></td>
                                        <td align =center><textarea name="primariadet" rows="2" cols="30"  required><?php echo $detalleestrategia->getPrimariadet(); ?></textarea></td>                                                
                                        <td width="10"></td>
                                    </tr>
                                    <tr><td height="10"></td></tr>
                                    <tr>
                                        <td><b>Otros:</b></td>
                                        <td width="10"></td>
                                        <td align =center><textarea name="otrosdet" rows="2" cols="30"  required><?php echo $detalleestrategia->getOtrosdet(); ?></textarea></td>                                                
                                        <td width="20"></td>
                                        <td><b>Tipo de activo:</b></td>
                                        <td width="10"></td>
                                        <td align =center><textarea name="tipoactdet" rows="2" cols="30"  required><?php echo $detalleestrategia->getTipoactdet(); ?></textarea></td>                                                
                                        <td width="10"></td>
                                    </tr>
                                    <tr><td height="10"></td></tr>
                                    <tr>
                                        <td><b>Día de inicio en enero:</b></td>
                                        <td width="10"></td>
                                        <td><input type="number" name="enero" value="<?php echo $detalleestrategia->getEnero(); ?>" required/></td>                                                
                                        <td width="20"></td>
                                        <td><b>Día de inicio en febrero:</b></td>
                                        <td width="10"></td>
                                        <td><input type="number" name="febrero" value="<?php echo $detalleestrategia->getFebrero(); ?>" required/></td>                                                
                                        <td width="20"></td>
                                    </tr>
                                    <tr><td height="10"></td></tr>
                                    <tr>
                                        <td><b>Día de inicio en marzo:</b></td>
                                        <td width="10"></td>
                                        <td><input type="number" name="marzo" value="<?php echo $detalleestrategia->getMarzo(); ?>" required/></td>                                                
                                        <td width="20"></td>
                                        <td><b>Día de inicio en abril:</b></td>
                                        <td width="10"></td>
                                        <td><input type="number" name="abril" value="<?php echo $detalleestrategia->getAbril(); ?>" required/></td>                                                
                                        <td width="20"></td>
                                    </tr>
                                    <tr><td height="10"></td></tr>
                                    <tr>
                                        <td><b>Día de inicio en mayo:</b></td>
                                        <td width="10"></td>
                                        <td><input type="number" name="mayo" value="<?php echo $detalleestrategia->getMayo(); ?>" required/></td>                                                
                                        <td width="20"></td>
                                        <td><b>Día de inicio en junio:</b></td>
                                        <td width="10"></td>
                                        <td><input type="number" name="junio" value="<?php echo $detalleestrategia->getJunio(); ?>" required/></td>                                                
                                        <td width="20"></td>
                                    </tr>
                                    <tr><td height="10"></td></tr>
                                    <tr>
                                        <td><b>Día de inicio en julio:</b></td>
                                        <td width="10"></td>
                                        <td><input type="number" name="julio" value="<?php echo $detalleestrategia->getJulio(); ?>" required/></td>                                                
                                        <td width="20"></td>
                                        <td><b>Día de inicio en agosto:</b></td>
                                        <td width="10"></td>
                                        <td><input type="number" name="agosto" value="<?php echo $detalleestrategia->getAgosto(); ?>" required/></td>                                                
                                        <td width="20"></td>
                                    </tr>
                                    <tr><td height="10"></td></tr>
                                    <tr>
                                        <td><b>Día de inicio en septiembre:</b></td>
                                        <td width="10"></td>
                                        <td><input type="number" name="septiembre" value="<?php echo $detalleestrategia->getSeptiembre(); ?>" required/></td>                                                
                                        <td width="20"></td>
                                        <td><b>Día de inicio en octubre:</b></td>
                                        <td width="10"></td>
                                        <td><input type="number" name="octubre" value="<?php echo $detalleestrategia->getOctubre(); ?>" required/></td>                                                
                                        <td width="20"></td>
                                    </tr>
                                    <tr><td height="10"></td></tr>
                                    <tr>
                                        <td><b>Día de inicio en noviembre:</b></td>
                                        <td width="10"></td>
                                        <td><input type="number" name="noviembre" value="<?php echo $detalleestrategia->getNoviembre(); ?>" required/></td>                                                
                                        <td width="20"></td>
                                        <td><b>Día de inicio en diciembre:</b></td>
                                        <td width="10"></td>
                                        <td><input type="number" name="diciembre"  value="<?php echo $detalleestrategia->getDiciembre(); ?>" required/></td>                                                
                                        <td width="20"></td>
                                    </tr>
                                    <tr><td height="10"></td></tr>
                                    <tr>
                                        <td><b>Recursos humanos:</b></td>
                                        <td width="10"></td>
                                        <td align =center><textarea name="rrhhdet" rows="2" cols="30"  required><?php echo $detalleestrategia->getRrhhdet(); ?></textarea></td>                                                
                                        <td width="20"></td>
                                        <td><b>Recursos materiales:</b></td>
                                        <td width="10"></td>
                                        <td align =center><textarea name="rrmmdet" rows="2" cols="30"  required><?php echo $detalleestrategia->getRrmmdet(); ?></textarea></td>                                                
                                        <td width="10"></td>
                                    </tr>
                                    <tr><td height="10"></td></tr>
                                    <tr>
                                        <td><b>Recursos financieros:</b></td>
                                        <td width="10"></td>
                                        <td align =center><textarea name="rrffdet" rows="2" cols="30"  required><?php echo $detalleestrategia->getRrffdet(); ?></textarea></td>                                                
                                        <td width="20"></td>
                                        <td><b>Medio de verificación:</b></td>
                                        <td width="10"></td>
                                        <td align =center><textarea name="verificaciondet" rows="2" cols="30"  required><?php echo $detalleestrategia->getVerificaciondet(); ?></textarea></td>                                                
                                        <td width="10"></td>
                                    </tr>
                                    <tr><td height="10"></td></tr>
                                    <tr>
                                        <td><b>Escala de cumplimiento:</b></td>
                                        <td width="10"></td>
                                        <td>
                                            <select name="escaladet">
                                                <option>Elegir avance</option>
                                                    <?php
                                                    if ($detalleestrategia->getEscaladet() == "1") {
                                                        echo "<option selected=true>1</option>";
                                                    } else {
                                                        echo "<option>1</option>";
                                                    }
                                                    if ($detalleestrategia->getEscaladet() == "2") {
                                                        echo "<option selected=true>2</option>";
                                                    } else {
                                                        echo "<option>2</option>";
                                                    }
                                                    if ($detalleestrategia->getEscaladet() == "3") {
                                                        echo "<option selected=true>3</option>";
                                                    } else {
                                                        echo "<option>3</option>";
                                                    }
                                                    ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="20" colspan="8"></td>
                                    </tr>
                                </table>
                            </center>
                            <center><input type="submit" value="Actualizar Detalle del Plan de acción" ></center>
                        </form>
                    </td>
                    <td width="10%"></td>
                </tr>
                <tr>
                    <td colspan="3" height="20"></td>
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