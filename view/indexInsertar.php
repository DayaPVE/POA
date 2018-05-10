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
$codigoD = unserialize($_SESSION['codigoD']);
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




            <table  width="100%" >

                <tr><td height="20" colspan="3"></td></tr>
                <tr>
                    <td align="center" colspan="9"><h3><font color="darkblue"><?php echo $estrategiaD; ?></font></h3></td>
                <tr>
                    <td height="20"></td>
                </tr>
                <tr>
                    <td width="20%"></td>
                    <td align="center"><h3><font color="darkblue">PERSPECTIVA DE LA ESTRATEGIA</font></h3></td>
                    <td width="20%"></td>
                </tr>
                <tr>
                    <td>
                        <table>
                            <tr>
                                <td width="30"></td>
                                <td colspan="3" height="20" align="left"><a href="indexFinancieroUno.php">   Regresar</a></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" height="20"></td>
                </tr>
                <tr>
                    <td width="20%"></td>
                    <td>
                        <form action="../controller/controller1.php">
                            <input type="hidden" value="guardarfinalidadproposito" name="opcion">
                            <center>
                                <table>
                                    <tr>
                                        <td colspan="3"><b>Ámbito de la Estrategia:</b></td>
                                    </tr>
                                    <tr>
                                        <td valign="top"  colspan="3">
                                            <?php echo $estrategiaD; ?>
                                            <input type="hidden" value="<?php echo $codigoD; ?>" name="idambito">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="10" colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td><b>Tipo de objetivo:</b></td>
                                        <td width="30"></td>
                                        <td><b>Finalidad:</b></td>
                                    <tr>  
                                        <td><textarea name="objetivo" rows="5" cols="40" style="width: 300px;" required></textarea></td> 
                                        <td width="30"></td>
                                        <td><textarea name="finalidadfp" rows="5" cols="40" style="width: 300px;" required></textarea></td>
                                    </tr>
                                    <tr>
                                        <td height="5"></td>
                                    </tr>
                                    <tr>
                                        <td><b>Propósito:</b></td>
                                        <td width="30"></td>
                                        <td><b>Coordinador:</b></td>
                                    </tr>
                                    <tr>
                                        <td><textarea name="propositofp" rows="5" cols="40" style="width: 300px;" required></textarea></td> 
                                        <td width="30"></td>
                                        <td valign="top">
                                            <input type="text" name="coordinadorfp" style="width: 300px;" required/>
                                            <br><br><b>Ejecutor:</b>
                                            <br><input type="text" name="ejecutorfp" style="width: 300px;" required/>
                                        </td>     
                                    </tr>
                                    <tr>
                                        <td height="15" colspan="3"></td>
                                    </tr>
                                </table>
                            </center>
                            
                            
                            <div class="alert alert-warning alert-dismissable">
                                <button type="button" class="close" data-dismiss="warming">&times;</button>
                                <strong>¡Importante!</strong> Una vez presionada la opción <b>Agregar Perspectiva de la Estrategia</b> ya no se ingresarán más datos.
                            </div>
                            <center><input type="submit" onclick="alert('Ya no podrá realizar más ingresos en esta sección')" value="Agregar Perspectiva de la Estrategia"></center>
                        </form>
                    </td>
                    <td width="20%"></td>
                </tr>
                <tr>
                    <td colspan="3" height="20"></td>
                </tr>
                <tr>
                    <td width="20%"></td>
                    <td align="center"><h3><font color="darkblue">INICIATIVAS ESTRATÉGICAS</font></h3></td>
                    <td width="20%"></td>
                </tr>
                <tr>
                    <td colspan="3" height="20"></td>
                </tr>
                <tr>
                    <td width="20%"></td>
                    <td>
                        <form action="../controller/controller1.php">
                            <input type="hidden" value="guardarestrategia" name="opcion">
                            <center>
                                <table>
                                    <tr >
                                        <td><b>Ámbito de la Estrategia:</b></td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <?php echo $estrategiaD; ?>
                                            <input type="hidden" value="<?php echo $codigoD; ?>" name="idambito">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="5"></td>
                                    </tr>
                                    <tr>
                                        <td><b>Ingrese iniciativa estratégica:</b></td>
                                    </tr>
                                    <tr>
                                        <td align =center><textarea name="detalleestrategia" rows="5" cols="60" required></textarea></td>
                                    </tr>
                                    <tr>
                                        <td height="20" colspan="8"></td>
                                    </tr>
                                </table>
                            </center>
                            <center><input type="submit" value="Agregar Iniciativas Estrategia" ></center>
                        </form>
                    </td>
                    <td width="20%"></td>
                </tr>
                <tr>
                    <td colspan="3" height="20"></td>
                </tr>
                <tr>
                    <td width="20%"></td>
                    <td align="center"><h3><font color="darkblue">CONSTRUCCION ICR</font></h3></td>
                    <td width="20%"></td>
                </tr>
                <tr>
                    <td colspan="3" height="20"></td>
                </tr>
                <tr>
                    <td width="20%"></td>
                    <td>
                        <form action="../controller/controller1.php">
                            <input type="hidden" value="guardarconstruccionicr" name="opcion">
                            <center>
                                <table>
                                    <tr>
                                        <td colspan="3"><b>Ámbito de la Estrategia:</b></td>
                                    </tr>
                                    <tr>
                                        <td valign="top" colspan="3">
                                            <?php echo $estrategiaD; ?>
                                            <input type="hidden" value="<?php echo $codigoD; ?>" name="idambito">
                                        </td>
                                    </tr>
                                    <tr><td height="10" olspan="3"></td></tr>
                                    <tr>
                                        <td><b>Denominación:</b></td>
                                        <td width="30"></td>
                                        <td><b>Descripción:</b></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="denominacionicr" style="width: 300px;" required/></td>
                                        <td width="30"></td>
                                        <td><input type="text" name="descripcionicr" style="width: 300px;" required/></td>
                                    </tr>
                                    <tr><td height="10" olspan="3"></td></tr>
                                    <tr>
                                        <td><b>Forma de Cálculo:</b></td>
                                        <td width="30"></td>
                                        <td><b>Periodicidad y medición:</b></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="calculoicr" style="width: 300px;" required/></td>     
                                        <td width="30"></td>
                                        <td><input type="text" name="periodicidadicr" style="width: 300px;" required/></td> 
                                    </tr>
                                    <tr><td height="10" olspan="3"></td></tr>
                                    <tr>
                                        <td><b>Unidad de medida:</b></td>
                                        <td width="30"></td>
                                        <td><b>Fuente de recolección de datos:</b></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="medidaicr" style="width: 300px;" required/></td>   
                                        <td width="30"></td>
                                        <td><input type="text" name="fuenteicr" style="width: 300px;" required/></td> 
                                    </tr>
                                    <tr><td height="10" olspan="3"></td></tr>
                                    <tr>
                                        <td><b>Tendencia de mejoramiento:</b></td>
                                        <td width="30"></td>
                                        <td><b>Otras observaciones al indicador:</b></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select name="tendenciaicr" style="width: 300px;">
                                                <option>Elegir tendencia</option>
                                                <option>Alza</option>
                                                <option>Se mantiene</option>
                                                <option>Baja</option>
                                            </select>
                                        </td>
                                        <td width="30"></td>
                                        <td><input type="text" name="otrosicr" style="width: 300px;" required/></td> 
                                    </tr>
                                    <tr><td height="10" colspan="3"></td></tr>
                                    <tr>
                                </table>
                            </center>
                            <div class="alert alert-warning alert-dismissable">
                                <button type="button" class="close" data-dismiss="warming">&times;</button>
                                <strong>¡Importante!</strong> Una vez presionada la opción <b>Agregar Constructor ICR</b> ya no se ingresarán más datos.
                            </div>
                            <center><input type="submit" onclick="alert('Ya no podrá realizar más ingresos en esta sección')" value="Agregar Constructor ICR" ></center>
                            </div>
                        </form>
                    </td>
                    <td width="20%"></td>
                </tr>

                <tr>
                    <td colspan="3" height="20"></td>
                </tr>
                <tr>
                    <td width="20%"></td>
                    <td align="center"><h3><font color="darkblue">DETERMINACIÓN DE BANDA DE METAS</font></h3></td>
                    <td width="20%"></td>
                </tr>
                <tr>
                    <td colspan="3" height="20"></td>
                </tr>
                <tr>
                    <td width="20%"></td>
                    <td>
                        <form action="../controller/controller1.php">

                            <input type="hidden" value="guardardeterminacionmeta" name="opcion">
                            <center>
                                <table>
                                    <tr>
                                        <td colspan="3"><b>Ámbito de la Estrategia:</b></td>
                                    </tr>
                                    <tr>
                                        <td valign="top" colspan="3">
                                            <?php echo $estrategiaD; ?>
                                            <input type="hidden" value="<?php echo $codigoD; ?>" name="idambito">
                                        </td>
                                    </tr>
                                    <tr><td height="10" olspan="3"></td></tr>
                                    <tr>
                                        <td><b>Estandar de la industria:</b></td>
                                        <td width="30"></td>
                                        <td><b>Límite Inferior:</b></td>
                                     </tr>
                                    <tr>
                                        <td><input type="number" name="estandardeter" style="width: 300px;" required/></td>      
                                        <td width="30"></td>
                                        <td><input type="number" name="inferiordeter" style="width: 300px;" required/></td> 
                                     </tr>
                                    <tr><td height="10" olspan="3"></td></tr>
                                    <tr>
                                        <td><b>Línea Base:</b></td>
                                        <td width="30"></td>
                                        <td><b>Límite Superior:</b></td>
                                     </tr>
                                    <tr>
                                        <td><input type="number" name="basedeter" style="width: 300px;" required/></td>
                                        <td width="30"></td>
                                        <td><input type="number" name="superiordeter" style="width: 300px;" required/></td> 
                                     </tr>
                                    <tr><td height="10" olspan="3"></td></tr>
                                </table>
                            </center>
                            <div class="alert alert-warning alert-dismissable">
                                <button type="button" class="close" data-dismiss="warming">&times;</button>
                                <strong>¡Importante!</strong> Una vez presionada la opción <b>Agregar Perspectiva de la Estrategia</b> ya no se ingresarán más datos.
                            </div>
                            <center><input type="submit" onclick="alert('Ya no podrá realizar más ingresos en esta sección')" value="Agregar Determinación de Banda de la Meta" ></center>
                        </form>
                    </td>
                    <td width="20%"></td>
                </tr>
                <tr><td height="20"></td></tr>
                <tr>
                    <td>
                        <table>
                            <tr>
                                <td width="30"></td>
                                <td colspan="3" height="20" align="left"><a href="indexFinancieroUno.php">   Regresar</a></td>
                            </tr>
                        </table>
                    </td>
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