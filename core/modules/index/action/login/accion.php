<?php
if(isset($_SESSION["admin_id"]) && $_SESSION["admin_id"]!=""){
    print "<script>window.location='index.php?view=index';</script>";
}
?>
<body class="hold-transition login-page">
    <div class="login-box">
      <div style="color:#00a65a" class="login-logo">
        <b>REPOSITORIO DE ARCHIVOS</b>
        <!-- <center><img  src="storage/institucion/logo2.png" width="115" class="img-responsive" alt="User Image"></center> -->
        <center><img  src="storage/institucion/seceje-logo.png" width="170" class="img-responsive" alt="User Image"></center>
      </div>
      <div class="box box-success">
      <div class="login-box-body">
        <p class="login-box-msg"><i class="fa fa-user icon-title"></i> Por favor Inicie Sesión</p>
        <form action="index.php?action=procesologin" method="POST">
          <div class="form-group has-feedback has-success">
           <input type="text" class="form-control" name="email" placeholder="Ingrese su Usuario o Correo Electronico" required autofocus="autofocus" autocomplete="off">
            <span class="fa fa-user-secret form-control-feedback" id="exampleInputEmail1"></span>
          </div>
          <div class="form-group has-feedback has-success">
            <input type="password" class="form-control" name="password" placeholder="Ingrese su Password" required="">
            <span class="fa fa-expeditedssl form-control-feedback"></span>
          </div>
          <br/>
          <div class="row">
            <div class="col-xs-12">
              <input type="submit" class="btn btn-success btn-lg btn-block btn-flat" name="login" value="Ingresar" id="hablar" />
            </div><!-- /.col -->
            <script src="script.js"></script>
          </div>
        </form>
      </div>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
  </body>


  <!-- LOGIN DE OTRO MODELO -->
<!--   <?php

if(isset($_SESSION["admin_id"]) && $_SESSION["admin_id"]!=""){
    print "<script>window.location='index.php?view=index';</script>";
}

?>
<body class="login-page bg-login">
    <div class="login-box">
      <div style="color:#3c8dbc" class="login-logo">
        <b>C C O C H A C C A S A</b>
        <div>
          <center><img  src="storage/institucion/logo2.png" width="115" class="img-responsive" alt="User Image"></center>
        </div>
      </div>
      <div class="box box-danger">
        <div class="login-box-body">
          <p class="login-box-msg"><i class="fa fa-user icon-title"></i> Por favor Inicie Sesión</p>
          <br/>
          <form action="index.php?action=procesologin" method="POST">
            <div class="form-group has-feedback">
              <input type="text" class="form-control" name="email" placeholder="Usuario" autocomplete="off" required id="texto">
              <span class="fa fa-user-secret form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
              <input type="password" class="form-control" name="password" placeholder="Password" required>
              <span class="fa fa-expeditedssl form-control-feedback"></span>
            </div>
            <br/>
            <div class="row">
              <div class="col-xs-12">
                <input type="submit" class="btn btn-primary btn-lg btn-block btn-flat" name="login" value="Ingresar" id="hablar" />
              </div>
              <script src="script.js"></script>
            </div>
          </form>
        </div>
      </div>
    </div>
  

  </body> -->