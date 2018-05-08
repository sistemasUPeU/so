<?php 

namespace App\Entidades;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model {
     protected $table = 'clientes';
     protected $primaryKey='idcliente';
     public $timestamps=false;
     protected $fillable = [
          'idpersona',
          'rs',
          'ruc',
     ];

     protected $guarded =[

     ];

     public function person() 
     {
     return $this->belongsTo(persona::class, 'idpersona'); 
     } 

     public function clientsalida () 
     {
       return $this->hasMany(salida::class); 
     } 


}

/*
Eloquent relacionará por defecto el modelo con una tabla que tenga su nombre en plural
en vez de singular, o agregando una S si no trabajamos en inglés, en este caso 'productos',
si queremos especificar una tabla manualmente, podemos hacerlo de este modo:
protected $table = 'articulos';
*/