<div class="modal fade" id="productosearch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-notice">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="myModalLabel">Agregar producto</h3>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          <i class="material-icons">close</i>
        </button>
      </div>
      <form action="clientecontroller.php" method="POST">
        <div class="modal-body">
          <div class="form-group">

            <div class="row">
              <div class="col-xs-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Tipo</label>
                  <input type="text" class="form-control" name="rs">
                </div>
              </div>
              <div class="col-xs-4">
                <div class="form-group">
                 <label class="bmd-label-floating">Subtipo</label>
                 <input type="text" class="form-control" name="ruc">
               </div>

             </div>
             <div class="col-xs-4">
              <div class="form-group">
                <label class="bmd-label-floating">Volumen</label>
                <input type="number" class="form-control" name="dni">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-4">
             <div class="form-group">
              <label class="bmd-label-floating">Cantidad</label>
              <input type="number" class="form-control" name="dni">
            </div>
          </div>
          <div class="col-xs-4">
            <select class="selectpicker" data-live-search="true">
              <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
              <option data-tokens="mustard">Burger, Shake and a Smile</option>
              <option data-tokens="frosting">Sugar, Spice and all things nice</option>
            </select>

          </div>
          <div class="col-xs-4">
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="normaloption" value="normal"> Normal
                  <input type="checkbox" name="freeoption"> Gratis
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="modal-footer justify-content-center">
      <input type="submit" name="submit" value="Agregar" class="btn btn-info btn-round" data-dismiss="modal"/>
   
      <input type="button" name="submit" value="Cancelar" class="btn btn-danger btn-round" data-dismiss="modal"/>

    </div>
  </form> 

</div>
</div>
</div>