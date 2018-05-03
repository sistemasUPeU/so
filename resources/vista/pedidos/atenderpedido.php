<div class="modal fade" id="atenderpedido" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-notice">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="myModalLabel">Entregar pedido</h3>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          <i class="material-icons">close</i>
        </button>
      </div>
      <form action="clientecontroller.php" method="POST">
        <div class="modal-body">
          <div class="form-group">

            <div class="row">
              <div class="col-xs-4 col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Tipo de pago</label>
                  <input type="text" class="form-control" name="total" value="CREDITO" disabled>
                </div>
              </div>
              <div class="col-xs-4 col-md-6">
                <div class="form-group">
                 <label class="bmd-label-floating">Comprobante</label>
                 <input type="text" class="form-control" name="pendiente" value="Factura" disabled>
               </div>

             </div>

           </div>

           <div class="row">
            <div class="col-xs-4 col-md-6">
              <div class="form-group">
                <label class="bmd-label-floating">Numero</label>
                <input type="text" class="form-control" name="numero" value="FA-0001" disabled>
              </div>
            </div>
            <div class="col-xs-4 col-md-6">
              <div class="form-group">
                <label class="bmd-label-floating">Monto</label>
                <input type="text" class="form-control" name="total" value="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-4 col-md-6">
              <div class="form-group">
                <label class="bmd-label-floating">Subtotal</label>
                <input type="text" class="form-control" name="subtotal" value="15.00" disabled>
              </div>

            </div>
            <div class="col-xs-4 col-md-6">
              <div class="form-group">
                <label class="bmd-label-floating">IGV</label>
                <input type="number" class="form-control" name="numero" value="2.7" disabled>
              </div>
            </div>
            <div class="col-xs-4 col-md-6">
              <div class="form-group">
                <label class="bmd-label-floating">Total</label>
                <input type="number" class="form-control" name="numero" value="17.7" disabled>
              </div>
            </div>
          </div>

          <div class="clearfix"> Detalle </div>
          <div class="table-responsive">
            <table class="table">
              <thead class="text-primary">
                <th>Nro</th>
                <th>Articulo</th>
                <th>Codigo</th>
                <th>P. venta</th>
                <th>Cantidad</th>
                <th>Descuento</th>


              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Vino torontel</td>
                  <td>V-002</td>
                  <td>13.00</td>
                  <td>5</td>
                  <td>0.00</td>

                </tr>


                <tr>
                  <td>2</td>
                  <td>Vino italia</td>
                  <td>V-002</td>
                  <td>13.00</td>
                  <td>5</td>
                  <td>0.00</td>

                </tr>

              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="modal-footer justify-content-center">
        <input type="submit" name="submit" value="Registrar Venta" class="btn btn-info btn-round" data-dismiss="modal"/>
      </div>
    </form> 

  </div>
</div>
</div>