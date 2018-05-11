<?php

namespace App\Entidades;
use Illuminate\Database\Eloquent\Model;

class salida extends Model {
    protected $table = 'detallesalida';
    protected $primaryKey='iddetalle_salidas';
    public $timestamps=false;
    protected $fillable = [
         'idsalidas',
         'idproducto',
         'precioventa',
         'cantidad',

    ];

    protected $guarded =[

    ];

   public function salida() 
     {
     return $this->belongsTo(salida::class, 'idsalidas'); 
     } 
   public function producto() 
     {
     return $this->belongsTo(producto::class, 'idproducto'); 
     } 


}

/*
Eloquent relacionará por defecto el modelo con una tabla que tenga su nombre en plural
en vez de singular, o agregando una S si no trabajamos en inglés, en este caso 'productos',
si queremos especificar una tabla manualmente, podemos hacerlo de este modo:
protected $table = 'articulos';
*/