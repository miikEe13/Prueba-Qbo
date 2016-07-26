
<div class="col-lg-12">
    <br>
    <br>
    <h1 class=" text-center text-primary">Realizar pago</h1>
    <div class="row container-fluid" >
        <form  id="form-create-tarjeta" role="form" accept-charset="utf-8" class="form-horizontal" 
               method="POST" action="<?php echo base_url(); ?>Tarjeta/guardar" >

            <div class="panel panel-info">
                <div class="panel-heading center-block">
                    <h3 class="panel-title text-center">Registar los datos en el siguiente formulario</h3>  

                </div>
                <div class="panel-body">
                    <div style="" class="col-lg-6">

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Numero de tarjeta</label>
                            <div class="col-sm-8">
                                <input type="TEXT" class="form-control" name="numero_tarjeta" pattern="[0-9]{16}" title="Introduzca los 16 digitos numericos de su tarjeta" placeholder="Introduzca los 16 dgitos de su Tarjeta" aria-describedby="sizing-addon2" value="" required >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"name="Fecha" >Fecha Vencimiento </label> 
                            <div class="col-sm-4">
                                <select class="form-control" name="mes_vencimiento" required>
                                    <option selected="TRUE" value="" disabled="true">--Seleccione el mes --</option>
                                    <?php
                                    for ($i = 1; $i <= 12; $i++) {
                                        echo "<option value='" . $i . "'>" . $i . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <select class="form-control" name="year_vencimiento" required >
                                    <option selected="true" disabled="true"  value="" >--Seleccione el año --</option>
                                    <?php
                                    for ($i = 2016; $i <= 2030; $i++) {
                                        echo "<option value='" . $i . "'>" . $i . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Codigo segurida</label>
                            <div class="col-sm-8">
                                <input type="text" size="3" class="form-control" title="Ultimos tres digitos numericos alreverso de su tarjeta" pattern="[0-9]{3}" placeholder="Ultimos tres digitos alreverso de su tarjeta" id="telefono" name="codigo_seguridad" value="" required>
                            </div>
                        </div>
                    </div>
                    <div style="" class="col-lg-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Subtotal</label>
                            <div class="col-sm-8">
                                <input type="text"  class="form-control" id="subtotal" name="subtotal" placeholder="Ingreso" value="500" minlength="1" readonly="" maxlength="10"  required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Total</label>
                            <div class="col-sm-8">
                                <input type="text"  class="form-control" id="total" name="total" placeholder="Total" minlength="1" maxlength="10" value="700" readonly required >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2 col-md-offset-7">
                                <button  class="btn btn-primary" type="submit" 
                                         value="" <span class="glyphicon glyphicon-floppy-disk"></span> Guardar Datos</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </form>
    </div>
    <div class="row">
        <div class="col-sm-12" >
            <h1 class=" text-center text-primary">Tarjetas</h1>
            <table class="table table-responsive table-striped  table-hover table-condensed" style="text-align: center"> 
                <thead class="" style="text-align: center"> 
                    <tr class='info' > 
                        <th style="text-align: center">#</th>                
                        <th style="text-align: center">Número de tarjeta</th>
                        <th style="text-align: center">Eliminar</th> 
                    </tr> 
                </thead> 
                <tbody class="table-responsive" id="sizing-addon3">  
                    <?php
                    foreach ($query as $row) {

                        echo " <tr class=''> ";
                        echo " <th scope='row' style='text-align: center' class=''>$row->id</th> ";
                        echo "<th style='text-align: center'> <a href='" . site_url('Tarjeta/detalle/' . $row->id) . "'><input type='radio' name='tarjeta' value='$row->id'>" . "  " . substr("$row->numero_tarjeta", -4) ."</a>";
//                        echo "<td> <a href='" . site_url('pacientes/EditarAnalisisOclusal/' . $row->id) . "'><button  type='button' class='btn btn-primary'><span class='glyphicon glyphicon glyphicon-refresh'></span></button></a>  </td> ";
                        echo "<td> <a onclick='if(confirma() == false) return false'  href='" . site_url('Tarjeta/eliminarTarjeta/' . $row->id) . "'><button  type='button' class='btn btn-danger'><span class='glyphicon glyphicon glyphicon-trash'></span></button></a>  </td> ";
                        echo " </tr> ";
                    }
                    ?>
                </tbody> 
            </table>
        </div>
    </div>

</div>

<script type="text/javascript">
    function confirma() {
        if (confirm("¿Está seguro que desea eliminar esta tarjeta?")) {
            alert("El registro ha sido eliminado.")
        }
        else {
            return false
        }
    }
</script>