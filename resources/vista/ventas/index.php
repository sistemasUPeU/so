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
                        <a class="navbar-brand" href="#"> Ventas </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
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
                                        <a href="#">Editar Usuario</a>
                                    </li>
                                    <li>
                                        <a href="logout.php">Cerrar Sesión</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                         
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
                                                    <a href="#profile" data-toggle="tab">
                                                        <i class="material-icons">bug_report</i> Resumen de Ventas
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#messages" data-toggle="tab">
                                                        <i class="material-icons">code</i> Ventas por Articulo
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#settings" data-toggle="tab">
                                                        <i class="material-icons">cloud</i> Ventas por Categoria
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#settings" data-toggle="tab">
                                                        <i class="material-icons">cloud</i> Ventas por Empleado
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#settings" data-toggle="tab">
                                                        <i class="material-icons">cloud</i> Creditos
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="profile">
                                        <div class="row">
                                               
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
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
</body>
<?php
  include "../resources/partials/scripts.php";
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<script>
    $(document).ready(function(){
        $.ajax({
            url: "ventaController.php",
            type: "GET",
            success : function (data){
                console.log(data);

                var score = {
                    monto_favor: [],
                    fecha: []
                };
                var len = data.length;

                for (var i; i < len; i++){
                    if (data[i].idcliente = 1){
                        score.monto_favor.push(data[i].score);
                    }
                    else if (data[i].idusuario = 1){
                        score.fecha.push(data[i].score);
                    }
                }
                console.log(score);

                var ctx = $("#myChart");
                var data = {labels: [],
                 datasets : [{
                     label: "Monto",
                     data: score.monto_favor,
                     backgroundColor: "blue",
                     fills: false,
                     lineTension: 0,
                     pointRadius : 5
                 },{
						label : "IG",
						data : score.fecha,
						backgroundColor : "green",
						borderColor : "lightgreen",
						fill : false,
						lineTension : 0,
						pointRadius : 5
					}
                
                ]
                };
                var chart = new Chart(ctx,{
                   type: "line",
                   data: data,
                   options: {} 
                });
            },
            error : function (data) {
                console.log(data);

            }
        });
    })
</script>
 
</html>