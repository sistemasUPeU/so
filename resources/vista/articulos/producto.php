<div class="container-fluid">
                                                <div class="row">
                          <div class="col-md-12">
                              <div class="card">
                                <div class="card-header card-header-primary card-header-icon">
                                  <div class="card-icon">
                                  <button class="btn btn-round btn-primary" data-toggle="modal"
                    data-target="#productModal"><i class="material-icons">assignment</i></button>
                                  </div>
                                  <h4 class="card-title">Lista de Articulos</h4>
                                </div>
                                <?php
                                 include "../resources/vista/articulos/crearproducto.php";
                                ?>
                                  <div class="card-body">
                                      <div class="toolbar">
                                          <!--        Here you can write extra buttons/actions for the toolbar              -->
                                      </div>
                                      <div class="material-datatables">
                    
                                      <table id="artitables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                          <thead>
                                              <tr>
                                                <th>Codigo</th>
                                                <th>Nombre</th>
                                                <th>Cantidad</th>
                                                <th>Precio</th>
                                                <th>Importe</th>
                                                <th>Categoria</th>
                                                <th>Medida</th>
                                                <th>Acción</th>
                                              </tr>
                                          </thead>
                                          <tfoot>
                                              <tr>
                                                  <th>Codigo</th>
                                                  <th>Nombre</th>
                                                  <th>Cantidad</th>
                                                  <th>Precio</th>
                                                  <th>Importe</th>
                                                  <th>Categoria</th>
                                                  <th>Medida</th>
                                                  <th>Acción</th>
                                              </tr>
                                          </tfoot>
                                          <tbody>
                                              <tr>
                                                  <td>Tiger Nixon</td>
                                                  <td>System Architect</td>
                                                  <td>Edinburgh</td>
                                                  <td>61</td>
                                                  <td>2011/04/25</td>
                                                  <td class="text-right">
                                                      <a href="#" class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">favorite</i></a>
                                                      <a href="#" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">dvr</i></a>
                                                      <a href="#" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
                                                  </td>
                                              </tr>
                                          </tbody>
                                      </table>
                                      </div>
                                  </div><!-- end content-->
                              </div><!--  end card  -->
                          </div> <!-- end col-md-12 -->
                      </div> <!-- end row -->
                    
                                          </div>

                                          