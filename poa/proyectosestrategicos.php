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
include_once '../model/Proyectosest.php';
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
            <a class="navbar-brand" href="index.php">Cooperativa de Ahorro y Crédito "San Antonio Ltda." - Imbabura</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">                    
                    <li title='Cooperativa de Ahorro y Crédito "San Antonio Ltda." - Imbabura"'>
                        <a class="nav-link" href="index.php">
                            <center><img src="../view/images/logo.png" height="75" width="75"></center>
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
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Users">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-users"></i>
                            <span class="nav-link-text">Usuarios</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapseExamplePages">
                            <li>
                                <a href="login.html">Página de Inicio de Sesión</a>
                            </li>
                            <li>
                                <a href="register.html">Registrarse</a>
                            </li>
                            <li>
                                <a href="forgot-password.html">Restablecer Contraseña</a>
                            </li>
                        </ul>
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
                        <form class="form-inline my-2 my-lg-0 mr-lg-2">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="content-wrapper">
            <table  width="100%">

                <tr>
                    <td width="15%"></td>
                    <td align="center"><h4><font color="darkblue">PROYECTOS ESTRATEGICOS</font></h4></td>
                    <td width="15%"></td>
                </tr>
                <tr>
                    <td colspan="3" height="30"></td>
                </tr>
            </table>

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                <thead>
                    <tr>
                        <th>Proyecto estratégico</th>
                        <th>Breve descripción</th>
                        <th>Umbral de viabilidad</th>
                        <th>Opciones</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Proyecto estratégico</th>
                        <th>Breve descripción</th>
                        <th>Umbral de viabilidad</th>
                        <th>Opciones</th>
                        <th>Opciones</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $poaModel = new PoaModel();
                    $listadoProest = $poaModel->getProyectosests();
                    foreach ($listadoProest as $est) {
                        echo "<tr>";
                        echo "<td>" . $est->getProyectoest() . "</td>";
                        echo "<td>" . $est->getDescripcionest() . "</td>";
                        echo "<td>" . $est->getViabilidadest() . "</td>";
                        echo "<td><a href='../controller/controller1.php?opcion=cargarProyectoest&idproyectoest=" . $est->getIdproyectoest() . "'>actualizar</a></td>";
                        echo "<td><a href='../controller/controller1.php?opcion=eliminarProyectoest&idproyectoest=" . $est->getIdproyectoest() . "'>eliminar</a></td>";

                        echo "</tr>";
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
                    <small>Copyright © Your Website 2017</small>
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