<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = ['nome', 'descricao'];

    public function modulos() {
        return $this->hasMany(Modulo::class);
    }
    
    use HasFactory;
}
