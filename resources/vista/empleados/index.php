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
                        <a class="navbar-brand" href="#"> Empleados </a>
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
                                                    <a href="#profile" data-toggle="tab">
                                                        <i class="material-icons">bug_report</i> Relación
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
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header card-header-rose card-header-icon">
                                                      <div class="card-icon">
                                                        <i class="material-icons">assignment</i>
                                                      </div>
                                                      <h4 class="card-title">Lista de Empleados</h4>
                                      
                                                    </div>
                                                    <div class="btn-group" style="left: 68%; position: relative;">
                    <button type="button" class="btn btn-round btn-primary" data-toggle="modal"
                    data-target="#regModal">Crear Empleado</button>
                    <?php
                    include "../resources/vista/empleados/crearempleado.php";
                    ?>
                    <button type="button" class="btn btn-round btn-info" ><a href="pdf.php">Exportar</a></button>
                </div>  
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-center">#</th>
                                                                        <th>Name</th>
                                                                        <th>Job Position</th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                            foreach ($employee as $y){
                                            echo "<tr>";
                                                echo "<td class='text-center'>{$y->idempleado}</td>";
                                                echo "<td>{$y->clientemp->apellido}, {$y->clientemp->nombre}</td>";
                                                echo "<td>{$y->puesto}</td>";
                                            echo "</tr>";
                                        }
                                        ?>              
                                                                </tbody>
                                                              
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
            <?php
            include "../resources/partials/footer.php";
            ?>
        </div>
    </div>
</body>
            <?php
            include "../resources/partials/scripts.php";
            ?>
</html>