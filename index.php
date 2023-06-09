<?php

session_start();

// Ver el rol
if(isset($_SESSION["login"])){
  $rol = $_SESSION["rol"];
  $login = $_SESSION["login"];
  $imagenusuario = $_SESSION['imagenusuario'];
  $btnTop = "";
}else{
  $rol = "";
  $login = false;
  $imagenusuario = 'default_profile_avatar.svg';
  $btnTop = "bottom: 110px;";
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Q' Tal Chamba</title>
  <link rel="shortcut icon" href="dist/img/trabaja.png" type="image/x-icon">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">

  <!-- Sweetalert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">

  <!-- Ion Slider -->
  <link rel="stylesheet" href="plugins/ion-rangeslider/css/ion.rangeSlider.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="./plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="./plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.css">
  <link rel="stylesheet" href="dist/css/themes.css">
  <link rel="stylesheet" href="dist/css/switch-dark-mode.css">
  <link rel="stylesheet" href="dist/css/loader.css">

  <!--Estilos de los modales y formularios-->
  <link rel="stylesheet" href="dist/css/pages/modal-forms.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed sidebar-collapse">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <i class='nav-icon fab fa-qq ml-4' style='font-size: 58px;'></i>
      <h4 class="mt-2">Cargando...</h4>
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-light text-sm">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <!-- Collapse Menu -->
        <li class='nav-item'>
          <a class='nav-link' data-widget='pushmenu' href='#' role='button'><i class='fas fa-bars'></i></a>
        </li>

        <!-- Switch -->
        <li class="nav-item item-switch-darkmode">
          <div class="theme-switch-wrapper nav-link dropdown-toggle">
            <label class="theme-switch" for="checkbox-theme">
              <input type="checkbox" id="checkbox-theme" />
              <span class="slider round">
                <i class="fa fa-solid fa-sun"></i>
                <i class="fa fa-solid fa-moon"></i>
              </span>
            </label>
          </div>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">

        <!-- User Account: style can be found in dropdown.less -->
        <?php
        if($login){
        echo "
          <li class='nav-item dropdown user user-menu'>
            <a href='#' class='nav-link' data-toggle='dropdown'>
              <img src='dist/img/user/{$imagenusuario}' class='user-image user-image-top' alt='User Image' id='userImageIndexNav'>
              <span class='hidden-xs'id='nameUserIndex'></span>
            </a>
  
            <ul class='dropdown-menu dropdown-menu-lg dropdown-menu-right user-menu'>
              <!-- User image -->
              <li class='user-header'>
                <img src='dist/img/user/{$imagenusuario}' class='img-circle' alt='User Image' id='userImageIndexNav1'>
  
                <p>
                   <h6 id='nameUserIndex2'>NOMBRE Y APELLIDO COMPLETO</h6>
                </p>
              </li>

              <!-- Menu Footer-->
              <li class='user-footer row-flex'>
                <div class='pull-left'>
                  <a href='index.php?view=profile-view' class='btn btn-default btn-flat btn-profile-index'>Perfil</a>
                </div>
  
                <div class='pull-right'>
                  <a class='btn btn-default btn-flat' id='btn-logout-user' href='controllers/user.controller.php?op=logout'>Cerrar sesión</a>
                </div>
              </li>
            </ul>
          </li>
          ";
        }
        ?>

        <?php
        
        if(!$login){
          echo 
          "
          <!--Login Form-->
          <li class='nav-item dropdown login-form'>
            <a href='#' class='nav-link' data-toggle='dropdown'>Iniciar de sesión</a>
            <div class='dropdown-menu dropdown-menu-lg dropdown-menu-right'>
              <div class='login-tittle'>
                <label>Inicio Sesión</label>
              </div>
              <form autocomplete='off'>

                <div class='form-group'>
                  <label>Correo electronico:</label>
                  <input type='email' placeholder='Correo electronico' class='form-control form-control-border' required id='emailInpt'>
                </div>

                <div class='form-group'>
                  <label>Contraseña:</label>
                  <input type='password' placeholder='Contraseña' class='form-control form-control-border' required id='passwordInpt'>
                </div>

                <div class='form-check'>
                  <input type='checkbox' class='form-check-input' id='rememberUser'>
                  <label class='form-check-label'>Recordar cuenta</label>
                </div>

                <div>
                  <button type='button' class='btn btn-primary btn-block' id='btnLogin'>Acceder</button>
                </div>

              </form>
              <div class='login-password-lnk'>
                <a href='#' data-toggle='modal' data-target='#modal-res-contra1'>¿Olvidaste tu contraseña?</a>
              </div>
            </div>
          </li>

          <!--Register modal-->
          <li class='nav-item'>
            <a href='#' id='btnOpenModalRegisterIN' class='nav-link'>Registrarse</a>
          </li>
          ";
        }
        ?>
        <!-- Config -->
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class='main-sidebar sidebar-dark-primary elevation-4'>
      <!-- Brand Logo -->
      <a href='index.php' class='brand-link'>
        <i class='nav-icon fab fa-qq ml-4' style='font-size: 24px;'></i>
        <span class='brand-text font-weight-bold'> Q' Tal Chamba</span>
      </a>

      <!-- Sidebar -->
      <div class='sidebar'>

        <!-- Sidebar Menu -->
        <nav class='mt-2'>
          <ul class='nav nav-pills nav-sidebar text-sm flex-column nav-child-indent nav-collapse-hide-child' data-widget='treeview' role='menu' data-accordion='false'>
            
            <li class='nav-item'>
              <a href='index.php?view=main-view' class='nav-link'>
                <i class='nav-icon fas fa-home'></i>
                <p>
                  Inicio
                </p>
              </a>
            </li>
            <?php
              if($login ){
                echo
                "
                <li class='nav-header'>MENU</li>
    
                <li class='nav-item'>
                  <a href='index.php?view=profile-view' class='nav-link btn-profile-index'>
                    <i class='nav-icon fas fa-user'></i>
                    <p>
                      Mi perfil
                    </p>
                  </a>                  
                </li>";

                if($rol == "A"){
                  echo "
                  <li class='nav-item'>
                    <a href='#' class='nav-link'>
                      <i class='fas fa-user-cog nav-icon'></i>
                      <p>
                        Rol administrador
                        <i class='right fas fa-angle-left'></i>
                      </p>
                    </a>
                    <ul class='nav nav-treeview'>
                      <li class='nav-item'>
                        <a href='index.php?view=admin-permissions-view' class='nav-link'>
                          <i class='far fa-circle nav-icon'></i>
                          <p>Permisos de admin</p>
                        </a>
                      </li>
                      <li class='nav-item'>
                        <a href='index.php?view=report-history-view' class='nav-link'>
                          <i class='far fa-circle nav-icon'></i>
                          <p>Historial de reportes</p>
                        </a>
                      </li>
                      <li class='nav-item'>
                        <a href='index.php?view=graphics-view' class='nav-link'>
                          <i class='far fa-circle nav-icon'></i>
                          <p>Gráficos</p>
                        </a>
                      </li>
                    </ul>
                  </li>                  
                  ";
                }


                echo "<li class='nav-header'>FUNCIONES</li>
                <li class='nav-item'>
                  <a href='index.php?view=calendar-view' class='nav-link'>
                    <i class='nav-icon fas fa-calendar-alt'></i>
                    <p>
                      Calendario
                    </p>
                  </a>
                </li>
                <li class='nav-item'>
                  <a href='index.php?view=geolocalizacion-view' class='nav-link' id='btn-gps'>
                    <i class='nav-icon fas fa-map-marked-alt'></i>
                    <p>
                      Ubicaciones
                    </p>
                  </a>
                </li>
                ";
              }
            ?>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper text-sm" id="content-body">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">    
        
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid" id="content-data">
          <!-- Aqui se cargan los datos dinamicos -->
        </div>
        <!--/. container-fluid -->
      </section>
      <!-- /.content -->

      <!-- Subir al inicio -->
      <a id="back-to-top" href="#content-body" style="<?php echo $btnTop ?>" class="btn btn-dark back-to-top d-none" role="button" aria-label="Scroll to top">
        <i class="fas fa-chevron-up"></i>
      </a>
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark" style="overflow: hidden;">
      <!-- Control sidebar content goes here -->
      <div class="p-3 control-sidebar-content text-sm" style="height: fit-content;">
        <h5>Configuración</h5>
        <hr class="mb-2" />

        <h6>Barra lateral izquierdo</h6>

        <div class="mb-1">
          <input type="checkbox" class="mr-1" checked id="cbox-sidebar-mini">
          <span>Reducido</span>
        </div>
        <div class="mb-1">
          <input type="checkbox" class="mr-1" id="cbox-sidebar-flat-style">
          <span>Estilo flat</span>
        </div>
        <div class="mb-4">
          <input type="checkbox" class="mr-1" id="cbox-sidebar-disable-focus">
          <span>Deshabilitar autoexpansión</span>
        </div>

        <h6>Reducir el tamaño del texto</h6>

        <div class="mb-1">
          <input type="checkbox" class="mr-1" checked id="cbox-small-text-content-wrapper">
          <span>Contenido</span>
        </div>
        <div class="mb-4">
          <input type="checkbox" class="mr-1" id="cbox-small-text-sidebar" checked>
          <span>Barra lateral (Izq, Der)</span>
        </div>

      <?php
      if($login){
        echo
        "
          <h6>Opción de seguridad</h6>
          <div class='mb-1'>
            <input type='checkbox' class='mr-1' id='questionLoginHab'>
            <span>Pregunta de seguridad</span>
          </div>
        ";
      }
      ?>

      </div>
    </aside>
  
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer text-sm">
      <strong>Copyright &copy; 2022-2023 <a href="#">Q" Tal Chamba</a>.</strong>
      Todos los derechos reservados.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 0.1
      </div>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!--Modal de registro-->
  <div class="modal fade" id="modalRegister" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title font-weight-bold">Creación de cuenta</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form autocomplete="off">
            <div class="form-group row">
              <div class="col-sm-6">
                <label for="inApellidos">Apellidos:</label>
                <input type="text" class="form-control form-control-border" id="inApellidos" placeholder="Apellidos" onpaste="return false" >
              </div>
              <div class="col-sm-6">
                <label for="inNombres">Nombres:</label>
                <input type="text" class="form-control form-control-border" id="inNombres" placeholder="Nombres" onpaste="return false" >
              </div>
            </div>
            <div class=" form-group row">
              <div class="col-sm-6">
                <label for="inFechaNac">Fecha de nacimiento:</label>
                <?php 
                $fechamodificada = strtotime( date('Y-m-d')."- 18 years");
                $fecharango = date("Y-m-d", $fechamodificada);
                ?>
                <input type="date" class="form-control form-control-border" id="inFechaNac" max="<?php echo $fecharango;?>">
              </div>
              <div class="col-sm-6">
                <label for="inTelef">Telefono:</label>
                <input type="tel" class="form-control form-control-border" id="inTelef" placeholder="Telefono" maxlength="9" onpaste="return false" >
              </div>
            </div>
            <div class="form-group row">
              <div div class="col-sm-4">
                <label for="slcDepartReg">Departamento:</label>
                <select id="slcDepartReg" class="custom-select form-control-border">
                </select>
                <!-- <input type="text" class="form-control"> -->
              </div>
              <div class="col-sm-4">
                <label for="slcProvinReg">Provincia:</label>
                <select id="slcProvinReg" class="custom-select form-control-border">
                  <option value='' disabled selected hidden >Seleccionar</option>
                </select>
              </div>
              <div class="col-sm-4">
                <label for="slcDistrReg">Distrito:</label>
                <select id="slcDistrReg" class="custom-select form-control-border">
                  <option value='' disabled selected hidden >Seleccionar</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-12">
                <label>Dirección:</label>
                <div class="form-group row">
                  <div class="col-md-2">
                    <Select class="custom-select form-control-border" id="inTipoC">
                      <option value="AV">AV</option>
                      <option value="CA">CA</option>
                      <option value="JR">JR</option>
                      <option value="PJ">PJ</option>
                      <option value="UR">UR</option>
                      <option value="LT">LT</option>
                    </Select>
                  </div>
                  <div class="col-md-6">
                    <input type="text" placeholder="Nombre de calle" class="form-control form-control-border" id="inNCalle" onpaste="return false" >
                  </div>
                  <div class="col-md-2">
                    <input type="number" class="form-control form-control-border" placeholder="N°" id="inNC" maxlength="5" min="1" max="99999" onpaste="return false">
                  </div>
                  <div class="col-md-2">
                    <input type="number" class="form-control form-control-border" placeholder="Piso" id="inPiso" maxlength="5" min="1" max="99999" onpaste="return false" >
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <label for="inCorreoE">Correo Electrónico:</label>
                <div class="form-group row">
                  <div class="col-sm-8">
                    <input type="email" class="form-control form-control-border" id="inCorreoE" placeholder="Correo Electronico" onpaste="return false">
                  </div>
                  <div class="col-sm-4">
                    <select class="custom-select form-control-border" id="inTipEmail">
                      <option value="@hotmail.com">@hotmail.com</option>
                      <option value="@gmail.com">@gmail.com</option>
                      <option value="@senati.pe">@senati.pe</option>
                      <option value="@outlook.com">@outlook.com</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <label for="inPass1">Contraseña:</label>
                <input type="password" class="form-control form-control-border" id="inPass1" placeholder="Contraseña">
              </div>
              <div class="col-sm-6">
                <label for="inPass2">Repetir contraseña:</label>
                <input type="password" class="form-control form-control-border" id="inPass2" placeholder="Repetir Contraseña">
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary" data-toggle="modal" id="btn-regist-opn">Registrarse</button>
        </div>
      </div>
    </div>
  </div>
  <!--./Modal de registro-->

  <!--Modal de foto de perfil-->
  <div class="modal fade" id="modal-perfil-img-new" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered md-perfil" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center m-ft-pf">
          <h2>TE DAMOS LA BIENVENIDA...!!</h2>
          <p>Seleccione su foto de perfil </p>
          <div class="ft-pf">
            <img src="dist/img/user2-160x160.jpg" class="img-circle" id='File-imgUserNew' width="50%">
            <div class="btn-file-up">
              <button class="btn-upload" id="btnUserFileNew"><i class="fas fa-upload"></i></button>
              <input class="inpt-file" type="file" id='newUserFile' accept=".jpg, .png, .gif" >
            </div>
          </div>
          <div class="btn-omitir">
            <button type="button" class="btn btn-secondary" id="btn-omt-prf">Omitir</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--./Modal de foto de perfil-->

  <!--Modal de preguntas de seguridad -->
  <div class="modal fade" id="modal-question" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body quest-md">
          <div>
            <img src="./dist/img/user1-128x128.jpg" class="img-circle" id='imgQuestI' width="50%">
          </div>
          <label class="md-quest-lb" id='questNameI'>@USERNAME</label>
          <p>Para verificar que realmente eres tú, responde la siguiente pregunta</p>
          <form >
            <div class="form-group row">
              <select class="form-control col-sm-6" id='slcQuestAl'>
                
              </select>
              <div class="col-sm-6">
                <input type="text" class="form-control" id='answerSlc'>
              </div>
            </div>
          </form>
          <div class="form-group">
            <button class="btn btn-primary" id='checkQuestion'>INGRESAR</button>
          </div>
          <a href="" data-dismiss="modal">Este no soy yo, cambiar de cuenta</a>
        </div>
      </div>
    </div>
  </div>
  <!--./Modal de preguntas de seguridad -->


  <!-- Modal de restablecimiento -->
  <div class="modal fade" id="modal-res-contra1" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body m-res" id="m-res-lod">

        </div>
      </div>
    </div>
  </div>
  <!--./Modal de restablecimiento-->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>

  <!-- jQuery UI -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>

  <!-- Bootstrap -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Ion Slider -->
  <script src="plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
  
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>

  <!-- PAGE PLUGINS -->
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Cargar pagina incrustada -->
  <script src="dist/js/loadweb.js"></script>

  <!-- plugins - Datatable -->
  <!-- <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script> -->
  <script src="./plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="./plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="./plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="./plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="./plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <!-- /. plugins - Datatable -->

  <!-- Select2 -->
  <script src="plugins/select2/js/select2.full.min.js"></script>

  <!-- Moment -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/moment/locale/es.js"></script>

  <!-- Config theme -->
  <script src="dist/js/config.js"></script>

  <!-- Sweetalert2 -->
  <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>
  <script src="dist/js/sweet-alert-2.js"></script>

  <!-- Animación de carga -->
  <script src="dist/js/loader.js"></script>

  <!--Cargar datos de la galeria-->
  <script src="dist/js/pages/galeria.js"></script>

  <!--Cargar datos de la galeria-->
  <script src="dist/js/pages/index.js"></script>

  <!-- utilities -->
  <script src="dist/js/utility.js"></script>

  <!-- websocket - rachet -->
  <script src="dist/js/cliente.js"></script>

  <script>
    $(document).ready(function() {

      var view = getParam("view");
      
      // Cambio de contenido dinámico
      if (view != false){
        $("#content-data").load(`views/${view}.php`);
      }else{
        $("#content-data").load(`views/main-view.php`);
      }  

      // Almacenando el id del usuario en una variable del navegador
      localStorage.setItem("idusuarioSession", <?php echo isset($_SESSION['idusuario']) ? $_SESSION['idusuario']: -2; ?>);

      // Click en perfil de usuario
      $(".btn-profile-index").click(function(){
        localStorage.removeItem("idusuarioActivo");
      });

      $("#btn-gps").click(function(){
        localStorage.removeItem('serviciobuscado'); // Eliminado
      });

      // CHATBOT
      <?php if(!$login){
        echo '
        window.watsonAssistantChatOptions = {
        integrationID: "d8400372-d71b-449f-b672-ae70ca3571c1", 
        region: "us-east", 
        serviceInstanceID: "7ae322c6-47a1-4784-b02b-ddc8d9b2ad72", 
        onLoad: function(instance) { instance.render(); }
        };
        setTimeout(function(){
        const t=document.createElement("script");
        t.src="https://web-chat.global.assistant.watson.appdomain.cloud/versions/" + (window.watsonAssistantChatOptions.clientVersion || "latest") + "/WatsonAssistantChatEntry.js"
        document.head.appendChild(t);
        });      
        
        ';
      } ?>
    
    });

  </script>
</body>
</html>