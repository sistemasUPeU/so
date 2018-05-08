<?php 

namespace App\Entidades;
use Illuminate\Database\Eloquent\Model;

class medida extends Model {
     protected $table = 'medidas';
     protected $primaryKey='idmedida';
     public $timestamps=false;
     protected $fillable = [
          'nombremedida',
          'estado',
     ];

     protected $guarded =[

     ];

     public function medida (){
         return $this->hasMany(Producto::class, 'idmedida');
     }


}

/*
Eloquent relacionará por defecto el modelo con una tabla que tenga su nombre en plural
en vez de singular, o agregando una S si no trabajamos en inglés, en este caso 'productos',
si queremos especificar una tabla manualmente, podemos hacerlo de este modo:
protected $table = 'articulos';
*/