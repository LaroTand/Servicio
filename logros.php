<?php
    include("./php/cn.php");
    $logros = "SELECT * FROM logros";
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Logros</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <!-- DataTables -->
    <link rel="stylesheet" href="./plugins/datatables-bs4/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="./plugins/datatables-responsive/css/responsive.bootstrap4.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="./dist/css/adminlte.min.css" />
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <div class="brand-link bg-dark">
                <img src="https://i.ibb.co/dDH2LDC/logo.png" alt="logo" alt="AdminLTE Logo" class="brand-image img-circle elevation-2" style="opacity: 0.8" />
                <span class="brand-text font-weight-light" style="
                            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                            font-style: oblique;
                            padding-left: 1rem;
                        ">Promoci&oacute;n Digital</span>
            </div>

            <!--ELEMENTOS PARA NAVEGAR-->

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="https://i.ibb.co/0jtVXJG/user-ico.png" alt="user-ico" class="img-circle elevation-2" alt="User Image" />
                    </div>
                    <div class="info">
                        <span class="d-block" id="nombreDocente" style="color: white; font-family:-apple-system,BlinkMacSystemFont," Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";"> Usuario
                            <!-- </span> -->
                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" role="menu">
                        <li class="nav-item" id="link1">
                            <a href="./dashboard.html" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <li class="nav-item" id="link1">
                            <a href="./eventos.html" class="nav-link">
                                <i class="nav-icon fa fa-chalkboard-teacher"></i>
                                <p>Eventos Acad&eacute;micos</p>
                            </a>
                        </li>

                        <li class="nav-item" id="link2">
                            <a href="./egresados.html" class="nav-link">
                                <i class="nav-icon fas fa-graduation-cap"></i>
                                <p>Egresados</p>
                            </a>
                        </li>

                        <li class="nav-item" id="link3">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-award"></i>
                                <p>Logros</p>
                            </a>
                        </li>

                        <li class="nav-item" id="link4">
                            <a href="./practicas.html" class="nav-link">
                                <i class="nav-icon fas fa-laptop-code"></i>
                                <p>Pr&aacute;cticas y Visitas</p>
                            </a>
                        </li>

                        <li class="nav-item" id="link4">
                            <a href="./tt2.html" class="nav-link">
                                <i class="nav-icon fas fa-project-diagram"></i>
                                <p>TT2, ET o PT</p>
                            </a>
                        </li>

                        <li class="nav-item" id="link2">
                            <a href="./investigacion.html" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>Investigaci&oacute;n</p>
                            </a>
                        </li>

                        <li class="nav-item" id="link2">
                            <a href="./movilidad.html" class="nav-link">
                                <i class="nav-icon fas fa-shuttle-van"></i>
                                <p>Movilidad</p>
                            </a>
                        </li>

                        <li class="nav-item" id="link2">
                            <a href="./generaciones.html" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Generaciones</p>
                            </a>
                        </li>

                        <li class="nav-item" id="link2">
                            <a href="./laboratorios.html" class="nav-link">
                                <i class="nav-icon fas fa-flask"></i>
                                <p>Laboratorios</p>
                            </a>
                        </li>

                        <li class="nav-item" id="link2">
                            <a href="./convivencia.html" class="nav-link">
                                <i class="nav-icon fas fa-people-arrows"></i>
                                <p>Convivencia estudiantil</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="./login.html" class="nav-link" onclick="log_Out();">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>Salir</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->

            <!--ELEMENTOS PARA NAVEGAR-->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Logros</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Logros</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- /.card -->

                            <div class="card">
                                <div class="card-header container-fluid">
                                    <div class="row">
                                        <div class="col">
                                            <h3 class="card-title pt-2">Alta de logros acad&eacute;micos</h3>
                                        </div>

                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalRegistrarLogro">Nuevo Logro</button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="tabla" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Programa Acad&eacute;mico</th>
                                                <th>Logro</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>

                                        <!-- Tabla de los datos -->
                                        <tbody>
                                            <!-- Codigo php -->
                                            <?php                                            
                                            $resultadoLogros = mysqli_query($con, $logros);

                                            while($row=mysqli_fetch_assoc($resultadoLogros)){ 
                                                # Se llama al query y se guarda el unico valor en la variable
                                                $resultadoPrograma = mysqli_query($con, "SELECT descripcion FROM programa WHERE id=".$row['programa_id'])->fetch_object()->descripcion;
                                                ?>

                                                <tr>
                                                    <td><?php echo $resultadoPrograma ?></td>
                                                    <td><?php echo $row["titulo"]; ?></td>
                                                    <td>
                                                        <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#modalRegistrarLogro'>
                                                            <i class='nav-icon fas fa-pen'></i>
                                                        </button>
    
                                                        <button type='button' class='btn btn-danger' data-toggle='modal' data-target='#modalDelete'>
                                                            <i class='nav-icon fas fa-trash'></i>
                                                        </button>
                                                    </td>
                                                </tr>

                                            <?php } 
                                            mysqli_free_result($resultadoLogros);?>
                                            <!-- echo "<tr>
                                                    <td>$programa</td>
                                                    <td>$titulo</td>
                                                    <td>
                                                        <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#modalRegistrarLogro'>
                                                            <i class='nav-icon fas fa-pen'></i>
                                                        </button>
    
                                                        <button type='button' class='btn btn-danger' data-toggle='modal' data-target='#modalDelete'>
                                                            <i class='nav-icon fas fa-trash'></i>
                                                        </button>
                                                    </td>
                                                </tr>"; -->

                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block"><b>Version</b> 3.0.5</div>
            <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- ModalCrear -->
    <div class="modal fade" id="modalRegistrarLogro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Actualizar logro acad&eacute;mico</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form action="php/insertar.php" method="POST" id="registrarLogro">
                        <div class="form-row">
                            <div class="form-group col-4">
                                <label for="programaControlSelect">Programa Acad&eacute;mico</label>
                                <select name="programaAc" class="form-control" required id="programaControlSelect">
                                    <option value="" selected disabled hidden>Seleccione</option>
                                    <option value="1">Sistemas Computacionales</option>
                                    <option value="2">Alimentos</option>
                                    <option value="3">Ambiental</option>
                                    <option value="4">Metalurgica</option>
                                    <option value="5">Mecatronica</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="projectNameInput">T&iacute;tulo</label>
                                <input name="titulo" type="text" class="form-control" required placeholder="T&iacute;tulo logro" />
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="exampleFormControlTextarea1">Descripci&oacute;n</label>
                                <textarea name="descripcion" class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Descripci&oacute;n" required></textarea>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-6">
                                <label for="logroImageFile">Imagen</label>
                                <figure>
                                    <img id="studentImage" src="https://www.sinergiamarketingturistico.com/wp-content/uploads/2016/02/no-photo-available.png" alt="" width="100%" />
                                </figure>
                                <div class="custom-file">
                                    <input name="imagen" type="file" class="custom-file-input" id="logroImageFile" />
                                    <label class="custom-file-label" for="logroImageFile">Seleccionar archivo</label>
                                </div>
                            </div>
                        </div>

                        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" form="registrarLogro" class="btn btn-success">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /ModalCrear -->

    <!-- ModalDelete -->
    <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar logro acad&eacute;mico</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">¿Est&aacute; seguro de eliminar el logro acad&eacute;mico?</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger">Eliminar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /ModalDelete -->

    <!-- jQuery -->
    <script src="./plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="./plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="./plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="./plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="./plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="./dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="./dist/js/demo.js"></script>
    <!-- page script -->

    <!-- <script>
            $(function () {
                $("#example1").DataTable({
                    responsive: true,
                    autoWidth: false,
                });
                $("#example2").DataTable({
                    paging: true,
                    lengthChange: false,
                    searching: false,
                    ordering: true,
                    info: true,
                    autoWidth: false,
                    responsive: true,
                });
            });
        </script> -->

    <!-- Script para mostrar previsualizacion de imagen-->
    <script>
        $(document).on("change", "#logroImageFile", function() {
            console.log(this.files);
            var files = this.files;

            var imgCodified = URL.createObjectURL(files[0]);
            $("#studentImage").attr("src", imgCodified);
        });
    </script>

    <!-- Script para cambiar el idioma al DataTable-->
    <script>
        $(document).ready(function() {
            $("#tabla").DataTable({
                language: {
                    lengthMenu: "Mostrar _MENU_ registros",
                    zeroRecords: "No se encontraron los resultados",
                    info: "Mostrando página _PAGE_ de _PAGES_",
                    infoEmpty: "No hay registros disponibles",
                    infoFiltered: "(filtrado de _MAX_ total registros)",
                    search: "Buscar:",
                    paginate: {
                        first: "Primero",
                        last: "Ultimo",
                        next: "Siguiente",
                        previous: "Anterior",
                    },
                },
            });
        });
    </script>
</body>

</html>