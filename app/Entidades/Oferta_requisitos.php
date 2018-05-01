<?php 

namespace App\Entidades;
use Illuminate\Database\Eloquent\Model;

class ofertareque extends Model {
     protected $table = 'oferta_requisitos';
     protected $primaryKey='idoferta_req';
     public $timestamps=false;
     protected $fillable = [
          'idoferta',
          'idrequisitos',
          'fecha_inicio',
          'fecha_fin',
     ];

     protected $guarded =[

     ];

}