<div class="col-md-7">
    <div class="card">
        <div class="card-header card-header-icon card-header-info">
            <div class="card-icon">
                <i class="material-icons">timeline</i>
            </div>
            <h4 class="card-title">Comportamiento
                <small> - Ventas</small>
            </h4>
        </div>
        <div class="card-body">
            <div class="form-group"><canvas id="grafico" class="responsive"></canvas></div>
        </div>
    </div>
</div>
<div class="col-md-5">
    <div class="card card-chart">
        <div class="card-header card-header-icon card-header-danger">
            <div class="card-icon">
                <i class="material-icons">pie_chart</i>
            </div>
            <h4 class="card-title">Opciones</h4>
        </div>
        <div class="card-body">
            <br>
            <div class="col-lg-5 col-md-6 col-sm-3">
                <h6 class="title">Resumen</h6>
                <select class="form-control" onChange="mostrarResultados(this.value);">
                    <?php
                        for($i=2018;$i<2030;$i++){
                            if($i == 2018){
                                echo '<option value="'.$i.'" selected>'.$i.'</option>';
                            }else{
                                echo '<option value="'.$i.'">'.$i.'</option>';
                            }
                        }
                    ?>
                </select>
            </div>

            <div class="btn-group col-md-8">
                <h6 class="title">Exportar</h6>
                <button type="button" class="btn btn-info">Excel</button>
                <button type="button" class="btn btn-info">PDF</button>

            </div>
        </div>
    </div>
</div>
</div>