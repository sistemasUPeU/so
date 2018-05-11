<!doctype html>
<html lang="en">
<?php
include "../resources/partials/header.php";
?>
<body>
    <div class="wrapper">
        <?php
        include "../resources/partials/sidebar.php";
        ?>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> Pedidos </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="main.php">
                                    <i class="material-icons">dashboard</i>
                                    <p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Opciones</p>
                                </a>
                                <ul class="dropdown-menu">
                              
                                    <li>
                                        <a href="logout.php">Cerrar Sesión</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group  is-empty">
                                <input type="text" class="form-control" placeholder="Buscar ..">
                                <span class="material-input"></span>
                            </div>
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-nav-tabs">
                            <div class="card-header" data-background-color="orange">
                                <div class="nav-tabs-navigation">
                                    <div class="nav-tabs-wrapper">
                                        <ul class="nav nav-tabs" data-tabs="tabs">
                                            <li class="active">
                                                <a href="#summary" data-toggle="tab">
                                                    <i class="material-icons">bug_report</i> Resumen de Pedidos
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>

                                            <li class="">
                                                <a href="#requestwait" data-toggle="tab">
                                                    <i class="material-icons">cloud</i> Pedidos por atender
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#newrequest" data-toggle="tab">
                                                    <i class="material-icons">cloud</i> Nuevo Pedido
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card-content">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="summary">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="text-primary">
                                                    <th>Nro</th>
                                                    <th>Nombres</th>
                                                    <th>Razon social</th>
                                                    <th>RUC</th>
                                                    <th>Fecha</th>
                                                    <th>Fecha entrega</th>
                                                    <th>Estado</th>
                                                    <th>Operaciones</th>

                                                </thead>
                                                <tbody>
                                                    
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Dakota Rice</td>
                                                        <td>Niger</td>
                                                        <td>984998498</td>
                                                        <td>may-02</td>
                                                        <td>may-03</td>
                                                        <td>Atendido</td>
                                                        <td>
                                                            <button type="button" class="btn btn-primary"><i class="material-icons">receipt
                                                            </i></button>
                                                            <button type="button" class="btn btn-success"><i class="material-icons">add_shopping_cart
                                                            </i></button>
                                                            <button type="button" class="btn btn-danger"><i class="material-icons">close
                                                            </i></button>
                                                            

                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Minerva Hooper</td>
                                                        <td>Curaçao</td>
                                                        <td>984998498</td>
                                                        <td>may-02</td>
                                                        <td>***</td>
                                                        <td>Por atender</td>
                                                        <td> 
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">receipt
                                                                </i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close
                                                                </i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Sell" class="btn btn-success btn-simple btn-xs">
                                                                <i class="material-icons">add_shopping_cart
                                                                </i>
                                                            </button></td>

                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Sage Rodriguez</td>
                                                            <td>Netherlands</td>
                                                            <td>984998498</td>
                                                            <td>may-02</td>
                                                            <td>***</td>
                                                            <td>Por atender</td>
                                                            <td>
                                                                <button type="button" class="btn btn-primary"><i class="material-icons">receipt
                                                                </i></button>
                                                                <button type="button" class="btn btn-success"><i class="material-icons">add_shopping_cart
                                                                </i></button>
                                                                <button type="button" class="btn btn-danger"><i class="material-icons">close
                                                                </i></button>


                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>Philip Chaney</td>
                                                            <td>Korea, South</td>
                                                            <td>984998498</td>
                                                            <td>may-02</td>
                                                            <td>may-03</td>
                                                            <td>Atendido</td>
                                                            <td>
                                                                <button type="button" class="btn btn-primary"><i class="material-icons">receipt
                                                                </i></button>
                                                                <button type="button" class="btn btn-success"><i class="material-icons">add_shopping_cart
                                                                </i></button>
                                                                <button type="button" class="btn btn-danger"><i class="material-icons">close
                                                                </i></button>


                                                            </td>

                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>


                                        <!-- <div class="row">
                                          <?php
                                             include "../resources/vista/ventas/reporteprimero.php";
                                             ?>
                                         </div>
                                         <div class="tab-pane" id="messages">
                                            <div class="row">
                                                  <?php
                                                    include "../resources/vista/ventas/reportesegundo.php";
                                                  ?>
                                              </div>
                                          </div>

                                      </div> -->
                                  </div>
                                  
                                  <div class="tab-pane" id="requestwait">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-primary">
                                                <th>Nro</th>
                                                <th>Nombres</th>
                                                <th>Razon social</th>
                                                <th>RUC</th>
                                                <th>Fecha</th>
                                                <th>Fecha entrega</th>
                                                <th>Estado</th>
                                                <th>Operaciones</th>

                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>2</td>
                                                    <td>Minerva Hooper</td>
                                                    <td>Curaçao</td>
                                                    <td>984998498</td>
                                                    <td>may-02</td>
                                                    <td>***</td>
                                                    <td>Por atender</td>
                                                    <td> 
                                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                            <i class="material-icons">receipt
                                                            </i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                            <i class="material-icons">close
                                                            </i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Sell" class="btn btn-success btn-simple btn-xs" data-toggle="modal"
                                                        data-target="#atenderpedido">
                                                        <i class="material-icons">add_shopping_cart
                                                        </i>
                                                    </button></td>

                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Sage Rodriguez</td>
                                                    <td>Netherlands</td>
                                                    <td>984998498</td>
                                                    <td>may-02</td>
                                                    <td>***</td>
                                                    <td>Por atender</td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary"><i class="material-icons">receipt
                                                        </i></button>
                                                        <button type="button" class="btn btn-success" data-toggle="modal"
                                                        data-target="#atenderpedido"><i class="material-icons">add_shopping_cart
                                                        </i></button>
                                                        <button type="button" class="btn btn-danger"><i class="material-icons">close
                                                        </i></button>


                                                    </td>

                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <div class="tab-pane" id="newrequest">

                                    <div class="card">
                                        <div class="card-header" data-background-color="#018786">
                                            <h4 class="title">Operaciones</h4>
                                            <!-- <p class="category">Complete your profile</p> -->
                                        </div>
                                        <div class="card-content">
                                            <form>
                                                <div class="row">


                                                   

                                                    <div class="col-md-4">
                                                        <div class="form-group has-default label-floating">
                                                            <label class="control-label">Nombre</label>
                                                            <select class="form-control" title="Cliente" name="idcliente">
                                                               <!--  <?php
                                                                foreach ($cate as $c){
                                                                  echo "<option value='{$c->idcategoria}'>{$c->nombrecat}</option>";
                                                              }
                                                              ?> -->
                                                          </select>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-3">

                                                    <button type="button" class="btn btn-round btn-primary">Cliente nuevo <i class="material-icons">add
                                                    </i></button>

                                                </div>
                                                <div class="col-md-4">
                                                    <button type="button" class="btn btn-round btn-info" data-toggle="modal"
                                                    data-target="#productosearch">Agregar producto <i class="material-icons">add
                                                    </i></button>

                                                </div>
                                            </div>



                                        </form>
                                    </div>
                                </div>


                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>Nro</th>
                                            <th>Articulo</th>
                                            <th>P. venta</th>
                                            <th>Cantidad</th>
                                            <th>Descuento</th>
                                            <th>Operaciones</th>


                                        </thead>
                                        <tbody>
                                            
                                            <tr>
                                                <td>1</td>
                                                <td>Dakota Rice</td>
                                                <td>S/. 13.00</td>
                                                <td>3</td>
                                                <td>0.00</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary"><i class="material-icons">receipt
                                                    </i></button>
                                                    <button type="button" class="btn btn-success"><i class="material-icons">add_shopping_cart
                                                    </i></button>
                                                    <button type="button" class="btn btn-danger"><i class="material-icons">close
                                                    </i></button>


                                                </td>

                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Minerva Hooper</td>
                                                <td>S/. 5.00</td>
                                                <td>1</td>
                                                <td>0.00</td>

                                                <td> 
                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                        <i class="material-icons">receipt
                                                        </i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="material-icons">close
                                                        </i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Sell" class="btn btn-success btn-simple btn-xs">
                                                        <i class="material-icons">add_shopping_cart
                                                        </i>
                                                    </button></td>

                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                    <button type="submit" class="btn btn-primary pull-right">Guardar pedido</button>
                                    <button type="submit" class="btn btn-primary pull-right">Cancelar</button>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php

            include "../resources/vista/pedidos/modalpedidos.php";
            include "../resources/vista/pedidos/atenderpedido.php";
            ?>

        </body>
        <?php
        include "../resources/partials/scripts.php";
        ?>
        <script>
            var data = {
              labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
              series: [
              [5, 4, 3, 7, 5, 10, 3, 4, 8, 10, 6, 8],
              [3, 2, 9, 5, 4, 6, 4, 6, 7, 8, 7, 4]
              ]
          };

          var options = {
              seriesBarDistance: 15
          };

          var responsiveOptions = [
          ['screen and (min-width: 641px) and (max-width: 1024px)', {
            seriesBarDistance: 10,
            axisX: {
              labelInterpolationFnc: function (value) {
                return value;
            }
        }
    }],
    ['screen and (max-width: 640px)', {
        seriesBarDistance: 5,
        axisX: {
          labelInterpolationFnc: function (value) {
            return value[0];
        }
    }
}]
];

new Chartist.Bar('#myChart', data, options, responsiveOptions);
</script>
<script type="text/javascript">

    $(document).ready(function(){

      //init DateTimePickers
      md.initFormExtendedDatetimepickers();

  });

</script>
</html>