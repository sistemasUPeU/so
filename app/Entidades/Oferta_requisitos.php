<?php 

namespace App\Entidades;
use Illuminate\Database\Eloquent\Model;

class ofertareque extends Model {
     protected $table = 'oferta_requisitos';
     protected $primaryKey='idoferta_req';
     public $timestamps=false;
     protected $fillable = [
          'idoferta',
          'idrequisitos',
          'fecha_inicio',
          'fecha_fin',
     ];

     protected $guarded =[

     ];

}

/*
Eloquent relacionará por defecto el modelo con una tabla que tenga su nombre en plural
en vez de singular, o agregando una S si no trabajamos en inglés, en este caso 'productos',
si queremos especificar una tabla manualmente, podemos hacerlo de este modo:
protected $table = 'articulos';
*/