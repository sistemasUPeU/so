
<div class="sidebar" data-color="blue" data-image="../resources/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
        <a href="" class="simple-text">
            D' Vinita Yviso
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
        <?php 
        session_start();
        $rol = $_SESSION['c_rol'];
        if ($rol == 1){
        ?>
            <li class="active">
                <a href="../public/main.php">
                    <i class="material-icons">dashboard</i>
                    <p>Inicio</p>
                </a>
            </li>
            <li>
                <a href="../public/ventaindex.php">
                    <i class="material-icons">person</i>
                    <p>Ventas</p>
                </a>
            </li>
            <li>
                <a href="../public/articuloindex.php">
                    <i class="material-icons">content_paste</i>
                    <p>Articulos</p>
                </a>
            </li>
            <li>
                <a href="../public/empleados.php">
                    <i class="material-icons">library_books</i>
                    <p>Empleados</p>
                </a>
            </li>
            <li>
                <a href="../public/clienteindex.php">
                    <i class="material-icons">bubble_chart</i>
                    <p>Clientes</p>
                </a>
            </li>
            <?php 
        };
        ?>

         <?php 
             $rol = $_SESSION['c_rol'];
             if ($rol == 2){
         ?>
            <li>
                <a href="../public/pedidoindex.php">
                    <i class="material-icons">hourglass_full</i>
                    <p>Pedidos</p>
                </a>
            </li>
            <li>
                <a href="../public/vendedorindex.php">
                    <i class="material-icons">add_shopping_cart
                    l</i>
                    <p>Vendedor</p>
                </a>
            </li>
            <?php 
             };
            ?>
            <li class="active-pro">
                <a href="upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Configuración</p>
                </a>
            </li>
        </ul>
    </div>
</div>