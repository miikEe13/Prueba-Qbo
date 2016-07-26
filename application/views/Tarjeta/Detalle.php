<div class="col-lg-12" style="alignment-adjust: central">
    <br>
    <br>
    <h1 class=" text-center text-primary">Detalle de tarjeta</h1>
    <div class="row container-fluid" >
        <form  id="form-create-tarjeta" role="form" accept-charset="utf-8" class="form-horizontal" 
               method="POST" action="" >

            <div class="panel panel-info">
                <div class="panel-heading center-block">
                    <h3 class="panel-title text-center">Información de la tarjeta</h3>  

                </div>
                <div class="panel-body">
                    <div style="alignment-adjust: central" class="col-lg-12">

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Numero de tarjeta</label>
                            <div class="col-sm-4">
                                <input type="TEXT" readonly="" class="form-control" name="numero_tarjeta" pattern="[0-9]{16}" title="Introduzca los 16 digitos numericos de su tarjeta" placeholder="Introduzca los 16 dgitos de su Tarjeta" aria-describedby="sizing-addon2" value="<?php echo $r->numero_tarjeta ?>" required >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label"name="Fecha" >Fecha Vencimiento </label> 
                            <div class="col-sm-4">
                                <input type="TEXT" readonly class="form-control" name="mes_vencimiento" pattern="[0-9]{16}" title="Introduzca los 16 digitos numericos de su tarjeta" placeholder="Introduzca los 16 dgitos de su Tarjeta" aria-describedby="sizing-addon2" value="<?php echo $r->fecha_expiracion ?>" required >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Codigo segurida</label>
                            <div class="col-sm-4">
                                <input type="text" readonly size="3" class="form-control" title="Ultimos tres digitos numericos alreverso de su tarjeta" pattern="[0-9]{3}" placeholder="Ultimos tres digitos alreverso de su tarjeta"  name="codigo_seguridad" value="<?php echo$r->codigo_seguridad ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Pago realizado </label>
                            <div class="col-sm-4">
                                <input type="text" readonly size="3" class="form-control" title="Ultimos tres digitos numericos alreverso de su tarjeta" pattern="[0-9]{3}" placeholder="Ultimos tres digitos alreverso de su tarjeta"  name="codigo_seguridad" value="<?php echo$r->total ?>" required>
                            </div>
                        </div>
                    </div>

                </div>
            </div> 
        </form>
    </div> 
</div>


