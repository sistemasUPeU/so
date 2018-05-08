<?php

namespace App\Entidades;
use Illuminate\Database\Eloquent\Model;

class salida extends Model {
    protected $table = 'salidas';
    protected $primaryKey='idsalidas';
    public $timestamps=false;
    protected $fillable = [
         'idofer_req',
         'idusuario',
         'idcliente',
         'igv',
         'fecha',
         'estado',
         'monto_deuda',
         'monto_favor',
    ];

    protected $guarded =[

    ];

   public function salesclient() 
     {
     return $this->belongsTo(cliente::class, 'idcliente'); 
     } 
}

/*
Eloquent relacionará por defecto el modelo con una tabla que tenga su nombre en plural
en vez de singular, o agregando una S si no trabajamos en inglés, en este caso 'productos',
si queremos especificar una tabla manualmente, podemos hacerlo de este modo:
protected $table = 'articulos';
*/