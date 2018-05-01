<?php 

namespace App\Entidades;
use Illuminate\Database\Eloquent\Model;

class empleado extends Model {
    protected $table = 'empleados';
    protected $primaryKey='idempleado';
    public $timestamps=false;
    protected $fillable = [
         'idpersona',
         'puesto',
    ];

    public function clientemp(){
     return $this->belongsTo(persona::class, 'idpersona'); 
    }
}