<?php 

namespace App\Entidades;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model {
     protected $table = 'categorias';
     protected $primaryKey='idcategoria';
     public $timestamps=false;
     protected $fillable = [
          'nombre',
          'estado',
     ];

     protected $guarded =[

     ];

     public function productos (){
         return $this->hasMany(Producto::class, 'idcategoria');
     }


}

/*
Eloquent relacionará por defecto el modelo con una tabla que tenga su nombre en plural
en vez de singular, o agregando una S si no trabajamos en inglés, en este caso 'productos',
si queremos especificar una tabla manualmente, podemos hacerlo de este modo:
protected $table = 'articulos';
*/