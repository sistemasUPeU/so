<?php 

namespace App\Entidades;
use Illuminate\Database\Eloquent\Model;

class requisito extends Model {
    protected $table = 'requisitos';
    protected $primaryKey='idrequisitos';
    public $timestamps=false;
    protected $fillable = [
         'idproducto_requisito',
         'cantidad_minima',

     ];

     protected $guarded =[

     ];

     public function userclient () 
     {
     return $this->belongsTo(persona::class, 'idpersona'); 
     } 
}

/*
Eloquent relacionará por defecto el modelo con una tabla que tenga su nombre en plural
en vez de singular, o agregando una S si no trabajamos en inglés, en este caso 'productos',
si queremos especificar una tabla manualmente, podemos hacerlo de este modo:
protected $table = 'articulos';
*/