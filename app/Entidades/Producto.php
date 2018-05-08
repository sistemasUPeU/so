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

/*
Eloquent relacionará por defecto el modelo con una tabla que tenga su nombre en plural
en vez de singular, o agregando una S si no trabajamos en inglés, en este caso 'productos',
si queremos especificar una tabla manualmente, podemos hacerlo de este modo:
protected $table = 'articulos';
*/