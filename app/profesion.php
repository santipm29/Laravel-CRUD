<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profesion extends Model
{
    //nombre de la tabla en la base de datos (se coloca por si crea problema al tirar el comando por cmd)
    protected $table = 'profesion';

    /*sino se quiere que laravel suba las columnas de información fechas se coloca esta linea de codigo */
    /*--> public $timestamps = false*/
    
    /*Para resolver un error de http , se colocan los nombres de los atributos dentro del arreglo*/ 
    protected $fillable = ['name'];

    /**/
    public function users(){
        return $this->hasMany(User::class);
    }
}
