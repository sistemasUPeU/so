<?php 

namespace App\Entidades;
use Illuminate\Database\Eloquent\Model;

class oferta extends Model {
     protected $table = 'ofertas';
     protected $primaryKey='idoferta';
     public $timestamps=false;
     protected $fillable = [
          'tipo',
          'cantidad',
          'porcentaje',
     ];

     protected $guarded =[

     ];

     public function required (){
        return $this->belongsTo(ofertareque::class, 'idoferta');         
     }

}