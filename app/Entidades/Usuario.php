<?php 

namespace App\Entidades;
use Illuminate\Auth\Authenticatable as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model {
    protected $table = 'usuarios';
    protected $primaryKey='idusuario';
    protected $fillable = [
         'idpersona',
         'nomuser',
         'clave',
         'created_at',
         'updated_at',

     ];

     protected $hidden =[
         'clave','remember_token'
     ];


}