<?php 

namespace App\Entidades;
use Illuminate\Database\Eloquent\Model;

class oferta extends Model {
     protected $table = 'ofertas';
     protected $primaryKey='idoferta';
     public $timestamps=false;
     protected $fillable = [
          'tipo',
          'cantidad',
          'porcentaje',
     ];

     protected $guarded =[

     ];

     public function required (){
        return $this->belongsTo(ofertareque::class, 'idoferta');         
     }

}

/*
Eloquent relacionará por defecto el modelo con una tabla que tenga su nombre en plural
en vez de singular, o agregando una S si no trabajamos en inglés, en este caso 'productos',
si queremos especificar una tabla manualmente, podemos hacerlo de este modo:
protected $table = 'articulos';
*/