<?php
require '../vendor/autoload.php';
require '../config/database.php';
use Illuminate\Database\Capsule\Manager as DB;
use App\Entidades\producto as producto;

        $article= DB::table('productos as p')
        ->join('categorias as c','c.idcategoria','=','p.idcategoria')
        ->join('medidas as m','m.idmedida','=','p.idmedida')
        ->select ('p.codigo','p.nombre','p.stock_actual','p.descripcion','p.volumen','p.preciov_actual',
        'c.nombrecat','m.nombremedida')->get()->toArray();
        //No Olvidar Para los Datatables
        echo json_encode($article);

     

