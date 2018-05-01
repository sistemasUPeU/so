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