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