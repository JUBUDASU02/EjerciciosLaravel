<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

<<<<<<< Updated upstream
class ModelRol extends Model
=======
<<<<<<< HEAD
class Rol extends Model
=======
class ModelRol extends Model
>>>>>>> e363dc4 (tu)
>>>>>>> Stashed changes
{
    protected $table = 'roles';
    protected $primaryKey = 'cod_rol';
    protected $fillable = ['nombre_rol', 'descripcion'];
    
    public function usuarios()
    {
        return $this->hasMany(User::class, 'cod_rol', 'cod_rol');
    }
<<<<<<< Updated upstream
}
=======
<<<<<<< HEAD
}
=======
}
>>>>>>> e363dc4 (tu)
>>>>>>> Stashed changes
