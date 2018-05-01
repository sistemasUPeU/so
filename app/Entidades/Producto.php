<?php 

namespace App\Entidades;
use Illuminate\Database\Eloquent\Model;

class producto extends Model {
    protected $table = 'productos';
    protected $primaryKey='idproducto';
    public $timestamps=false;
    protected $fillable = [
         'idcategoria',
         'idmedida',
         'codigo',
         'nombre',
         'stock_actual',
         'descripcion',
         'volumen',
         'preciov_actual',
    ];

    protected $guarded =[

    ];

    public function category() 
    {
     return $this->belongsTo(categoria::class, 'idcategoria'); 
    } 

    
}