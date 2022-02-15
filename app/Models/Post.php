<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    protected $guarded=[]; //dentro se establecen los parámetros que quiero excluir, en este caso nada
    //otra opcion es la siguiente, donde dentro de los paréntesis expreso las variables que quiero guardar
    //y por lo tanto mostrar al usuario.
    
    //protected $fillable=['title','excerpt','body','id']

    protected $with=['category','author'];



    public function category()
    {
        // tiene uno, tiene varios, pertenece a uno, pertenece a varios
        return $this -> belongsTo(category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
