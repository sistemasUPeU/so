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