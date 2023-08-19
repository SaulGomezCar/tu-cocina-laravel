<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{

    protected $fillable = [
        'titulo', 'preparacion', 'ingredientes', 'imagen', 'categoria_id'
    ];

    // obtiene la categoria de la receta via fk
    public function categoria()
    {
        return $this->belongsTo(CategoriaReceta::class);
    }

    // obtiene la información del usuario via FK
    public function autor()
    {
        return $this->belongsTo(User::class, 'user_id'); // FK
    }

    // likes que ha recibido una receta
    public function likes()
    {
        return $this->belongsToMany(User::class, 'likes_receta');
    }
}
