
<section style="height:100%; width:100%;">






<br /><hr />
<h3	align="center">Nueva Obra</h3>
<hr />
<fieldset>
<form class="form-horizontal" method="post" action="<?php  echo base_url() ?>index.php/agregarobra/insertarobra">
 <?php foreach ($registros as $fila) {                  ?>
  <?php   $id=$fila->ID_Profesionistas; ?>
  <?php }?>


<div class="container">
<div class="row">
      <div class='col-sm-6'>
  <div class="form-group">
    <label class="col-xs-3 control-label" for="nomobra">Nombre de la Obra</label>
    <div class="col-sm-6">
      <input id="nomobra" name="nomobra" type="text" placeholder="" class="form-control input-md" >
    </div>
  </div></div></div></div>
  
<div class="container">
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
             <label class="col-xs-3 control-label" for="nomobra">Fecha de inicio</label>
                <div class='input-group date' id='fechainicio'>
                    <input type='text' name="fechai" class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#fechainicio').datetimepicker();
            });
        </script>
    </div>
</div>
  
  
  
  
  
  <div class="container">
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
             <label class="col-xs-3 control-label" for="nomobra">Fecha de Termino</label>
                <div class='input-group date' id='fechafin'>
                    <input type='text' name="fechat" class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#fechafin').datetimepicker();
            });
        </script>
    </div>
</div>




<button name="agregar" type="submit" value="<?php echo $id ?>"class="btn btn-primary" style=" alignment-adjust:middle; margin:5px; width:200px" >Agregar</button>
</form></fieldset>

<a href="nuevo">
<button name="cerrar" class="btn btn-danger" style=" alignment-adjust:middle; width:200px; margin:4px;">Cancelar</button>
</a> 

</section>


