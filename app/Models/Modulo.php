<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    protected $fillable = ['curso_id', 'titulo', 'conteudo', 'ordem'];

    public function curso() {
        return $this->belongsTo(Curso::class);
    }
    use HasFactory;
}
