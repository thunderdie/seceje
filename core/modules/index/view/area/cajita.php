<?php
$team =  PeriodoData::getById($_GET["id_periodo"]);
$carpetas = PeriodoAreaData::getAllByTeamId($_GET["id_periodo"]);
?>
<?php if(isset($_SESSION["admin_id"]) && $_SESSION["admin_id"]!=""):?>
    <?php 
    $u=null;
    if($_SESSION["admin_id"]!=""){
    $u = UserData::getById($_SESSION["admin_id"]);
    }?>
<div class="content-wrapper">
    <section class="content-header">
      <h1> <i class="fa fa-cubes"></i> 
        PERIODO <?php echo $team->nombre; ?>
        <small> </small>
      </h1>
     <!--  <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="index.php?view=administrador">Administrador</a></li>
        <li class="active">Activo</li>
      </ol> -->
    </section>
    <?php if($u->admin):?>
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <?php
             if(isset($_SESSION["actualizar_datos"])):?>
              <p class="alert alert-info"><i class="fa fa-check"></i> Información actualizada correctamente</p>
            <?php 
            unset($_SESSION["actualizar_datos"]);
            endif; ?>
            <small>
              <div class="box-tools pull-left">
                <a href="index.php?view=nuevoarea&periodo_id=<?php echo $_GET["id_periodo"]; ?>" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Nueva Area/Oficina</a>
              </div>
            </small>
        </div>
        <div class="box-body">
          <?php

            if(count($carpetas)>0){
              // si hay usuarios
              ?>

              <table class="table table-bordered table-hover">
              <thead>
              <th>Nombre del Area / Oficina</th>
              <th>Detalle</th>
              <th><center><i class="fa fa-hourglass-start"></i> Acción</center></th>
              </thead>
              <?php
              foreach($carpetas as $ver){
                $car = $ver->getAreaOficina(); 
                ?>
                <tr>
                  <!-- index.php?action=seleccionarea&id_area_oficina=<?php echo $car->id_area_oficina;?> -->
                <td><i class="fa fa-gg"></i> <a href="./?view=carpetas&id_area_oficina=<?php echo $car->id_area_oficina;?>"> <?php echo $car->nombre; ?></a></td>
                <td><?php echo $car->detalle; ?></td>
                <td style="width:180px;">
                <a href="index.php?view=configuracionareaoficina&id_area_oficina=<?php echo $car->id_area_oficina;?>&tid=<?php echo $team->id_periodo;?>" class="btn btn-success btn-sm btn-flat"><i class='fa fa-cog'></i> Actualizar</a>
                <a href="index.php?action=eliminarareaoficina&id_area_oficina=<?php echo $car->id_area_oficina;?>&tid=<?php echo $team->id_periodo;?>" class="btn btn-danger btn-sm btn-flat"><i class="fa fa-trash-o"></i> Eliminar</a>
                </td>
                </tr>
                <?php

              }

        echo "</table>";

            }else{
              echo "<p class='alert alert-danger'>No hay Ninguna Area / Oficina Registrada</p>";
            }


            ?>
        </div>
      </div>
    </section>
    <?php endif;?>
    <?php if($u->jefe):?>
    <section class="content">
      <div class="box">
        <div class="box-body">
          <?php

            if(count($carpetas)>0){
              // si hay usuarios
              ?>

              <table class="table table-bordered table-hover">
              <thead>
              <th>Nombre del Area / Oficina</th>
              <!-- <th></th> -->
              </thead>
              <?php
              foreach($carpetas as $ver){
                $car = $ver->getAreaOficina();
                ?>
                <tr>
                  <!-- index.php?action=seleccionarea&id_area_oficina=<?php echo $car->id_area_oficina;?> -->
                <td><i class="fa fa-gg"></i> <a href="./?view=carpetas&id_area_oficina=<?php echo $car->id_area_oficina;?>"> <?php echo $car->nombre; ?></a></td>
                <!-- <td style="width:180px;">
                <a href="index.php?view=configuracionareaoficina&id_area_oficina=<?php echo $car->id_area_oficina;?>&tid=<?php echo $team->id_periodo;?>" class="btn btn-success btn-sm btn-flat"><i class='fa fa-cog'></i> Actualizar</a>
                <a href="index.php?action=eliminarareaoficina&id_area_oficina=<?php echo $car->id_area_oficina;?>&tid=<?php echo $team->id_periodo;?>" class="btn btn-danger btn-sm btn-flat"><i class="fa fa-trash-o"></i> Eliminar</a>
                </td> -->
                </tr>
                <?php

              }

        echo "</table>";

            }else{
              echo "<p class='alert alert-danger'>No hay Ninguna Are - Oficina Registrada</p>";
            }


            ?>
        </div>
      </div>
    </section>
    <?php endif;?>
     <?php if($u->encargado):?>
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <?php
             if(isset($_SESSION["actualizar_datos"])):?>
              <p class="alert alert-info"><i class="fa fa-check"></i> Información actualizada correctamente</p>
            <?php 
            unset($_SESSION["actualizar_datos"]);
            endif; ?>
        </div>
        <div class="box-body">
          <?php

            if(count($carpetas)>0){
              // si hay usuarios
              ?>

              <table class="table table-bordered table-hover">
              <thead>
              <th>Nombre del Area / Oficina</th>
              <th><center><i class="fa fa-hourglass-start"></i> Acción</center></th>
              </thead>
              <?php
              foreach($carpetas as $ver){
                $car = $ver->getAreaOficina();
                ?>
                <tr>
                  <!-- index.php?action=seleccionarea&id_area_oficina=<?php echo $car->id_area_oficina;?> -->
                <td><i class="fa fa-gg"></i> <a href="./?view=carpetas&id_area_oficina=<?php echo $car->id_area_oficina;?>"> <?php echo $car->nombre; ?></a></td>
                <td style="width:80px;">
                <a href="#" title="Usted se encuentra en modo Encargado y no puede Modificar" class="btn btn-success btn-sm btn-flat"><i class='fa fa-cog'></i> Actualizar</a>
                </td>
                </tr>
                <?php

              }

        echo "</table>";

            }else{
              echo "<p class='alert alert-danger'>No hay Ninguna Area / Oficina Registrada</p>";
            }


            ?>
        </div>
      </div>
    </section>
    <?php endif;?>
  </div>
  <?php else:?>
    <?php endif;?>