<div class="modal fade" id="debt_payment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-notice">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="myModalLabel">Pago de deuda</h3>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          <i class="material-icons">close</i>
        </button>
      </div>
      <form action="clientecontroller.php" method="POST">
        <div class="modal-body">
          <div class="form-group">

            <div class="row">
              <div class="col-xs-6 col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Monto total</label>
                  <input type="text" class="form-control" name="total" value="20.00" disabled>
                </div>
              </div>
              <div class="col-xs-6 col-md-6">
                <div class="form-group">
                 <label class="bmd-label-floating">Monto pendiente</label>
                 <input type="text" class="form-control" name="pendiente" value="13.00" disabled>
               </div>

             </div>
             <div class="col-md-4">
              <div class="form-group">
                <label class="bmd-label-floating">Monto a pagar</label>
                <input type="number" class="form-control" name="pagar">
              </div>
            </div>
          </div>

          <div class="clearfix"></div>
          <div class="table-responsive">
            <table class="table">
              <thead class="text-primary">
                <th>Nro</th>
                <th>Fecha pago</th>
                <th>Monto</th>
            

              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>abr-29</td>
                  <td>2.00</td>

                </tr>


               <tr>
                  <td>2</td>
                  <td>may-01</td>
                  <td>5.00</td>

                </tr>

              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="modal-footer justify-content-center">
        <input type="submit" name="submit" value="Registrar" class="btn btn-info btn-round" data-dismiss="modal"/>
      </div>
    </form> 

  </div>
</div>
</div>