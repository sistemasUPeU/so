<?php 

namespace App\Entidades;
use Illuminate\Database\Eloquent\Model;

class persona extends Model {
    protected $table = 'personas';
    protected $primaryKey='idpersona';
    public $timestamps=false;
    protected $fillable = [
         'nombre',
         'apellido',
         'dni',
         'telefono',
         'direccion',
    ];

    protected $guarded =[

    ];

    public function client() 
   {
     return $this->hasMany(cliente::class); 
   } 
}

/*
Eloquent relacionará por defecto el modelo con una tabla que tenga su nombre en plural
en vez de singular, o agregando una S si no trabajamos en inglés, en este caso 'productos',
si queremos especificar una tabla manualmente, podemos hacerlo de este modo:
protected $table = 'articulos';
*/