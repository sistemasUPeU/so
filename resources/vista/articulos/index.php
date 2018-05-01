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
                        <a class="navbar-brand" href="#"> Articulos </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">dashboard</i>
                                    <p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="hidden-lg hidden-md">Notifications</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Mike John responded to your email</a>
                                    </li>
                                    <li>
                                        <a href="#">You have 5 new tasks</a>
                                    </li>
                                    <li>
                                        <a href="#">You're now friend with Andrew</a>
                                    </li>
                                    <li>
                                        <a href="#">Another Notification</a>
                                    </li>
                                    <li>
                                        <a href="#">Another One</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group  is-empty">
                                <input type="text" class="form-control" placeholder="Buscar">
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
                                                    <a href="#articulos" data-toggle="tab">
                                                        <i class="material-icons">bug_report</i> Articulos
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#categorias" data-toggle="tab">
                                                        <i class="material-icons">code</i> Categorias
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#oferta" data-toggle="tab">
                                                        <i class="material-icons">code</i> Descuentos/Ofertas
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="articulos">
                                              <?php
                                                include "../resources/vista/articulos/producto.php";
                                              ?>
                                        </div>
                                        <div class="tab-pane" id="categorias">
                                              <?php
                                                include "../resources/vista/articulos/categoria.php";
                                              ?>
                                        </div>
                                        <div class="tab-pane" id="oferta">
                                                <?php
                                                include "../resources/vista/articulos/oferta.php";
                                              ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
</body>

<?php
  include "../resources/partials/scripts.php";
?>



</html>
<script type="text/javascript">

    $(document).ready(function() {
        $('#artitables').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Buscar...",
            }
    
        });
    
    
        var table = $('#datatables').DataTable();
    
        // Edit record
        table.on('click', '.edit', function() {
            $tr = $(this).closest('tr');
    
            var data = table.row($tr).data();
            alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
        });
    
        // Delete a record
        table.on('click', '.remove', function(e) {
            $tr = $(this).closest('tr');
            table.row($tr).remove().draw();
            e.preventDefault();
        });
    
        //Like record
        table.on('click', '.like', function() {
            alert('You clicked on Like button');
        });
    
        $('.card .material-datatables label').addClass('form-group');
    });
    
    </script>
    <script>
         $('#datatables2').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [5, 25, 50, -1],
                [5, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Buscar...",
            },
            "bProcessing": true,
            "bServerSide": true,
            "searching": true,
            "bInfo": true,
                "ajax":{"url":"categoriaController.php","dataSrc":""},
                "type":"POST",
                "columns": [
                    { "data": "idcategoria" },
                    { "data": "nombrecat" },
                    { "data": "estado" },
                ]

               
            }
            
        );
    </script>