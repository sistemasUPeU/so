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