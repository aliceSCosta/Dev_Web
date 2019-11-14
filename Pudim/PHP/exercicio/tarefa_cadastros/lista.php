<?php
include('selectlista.php');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | General Form Elements</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://adminlte.io/themes/dev/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://adminlte.io/themes/dev/AdminLTE/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <style>
    .sidebar-mini.sidebar-collapse .content-wrapper, .sidebar-mini.sidebar-collapse .main-footer, .sidebar-mini.sidebar-collapse .main-header{
      margin-left: 0 !important;
    }
  </style>
</head>
<body class="sidebar-mini layout-fixed sidebar-collapse">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pessoas cadastradas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pessoas cadastradas</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Pessoas cadastradas</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>                  
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Nome</th>
                          <th>Email</th>
                          <th style="width: 100px">Foto</th>
                        </tr>
                        
                        

                      </thead>
                      <tbody>
                          <?php
                           include('linhas.php');
                          ?>
                        <tr>
                          <td>1.</td>
                          <td>Gilberto Gil</td>
                          <td>
                            gil@gmail.com
                          </td>
                          <td><img class="img-fluid" src="https://media.ceert.org.br/portal-3/img/noticias/originais/20190626-gilberto-gil-tornou-sua-musica-baiana-universal.jpg" alt=""></td>
                        </tr>
                        <tr>
                          <td>2.</td>
                          <td>Elis Regina</td>
                          <td>
                            elis@gmail.com
                          </td>
                          <td><img class="img-fluid" src="https://eurio.com.br/imagens/620x349/posts/2019/01/4678_15-elis-regina-620x350-jpeg.jpeg" alt=""></td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Chico Buarque</td>
                            <td>
                                chico@gmail.com
                            </td>
                            <td><img class="img-fluid" src="https://pitayacultural.com.br/wp-content/uploads/2019/06/45855313_1961938643885186_5104865095708573696_n.jpg" alt=""></td>
                        </tr>
                        <tr>
                          <td>4.</td>
                          <td>Dona Ivone Lara</td>
                          <td>
                            donaivone@gmail.com
                          </td>
                          <td><img class="img-fluid" src="https://immub.org/imagens/artista/media_artista_4268.jpg" alt=""></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  
                </div>
               
              </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>UC</b> 12
    </div>
    <strong>Técnico em informática - Senac São Carlos</strong> 
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="https://adminlte.io/themes/dev/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="https://adminlte.io/themes/dev/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="https://adminlte.io/themes/dev/AdminLTE/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="https://adminlte.io/themes/dev/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="https://adminlte.io/themes/dev/AdminLTE/dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
