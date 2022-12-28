<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imobiliario extends Model
{
    use HasFactory;
    protected $table = 'imobiliario';

    protected $fillable =[
        'categoria_id',
        'nome',
        'p_discricao',
        'disc',
        'local',
        'montante',
        'quartos',
        'numero',
        'casaBanho',
        'estado',
    ];

    public function categoria(){
        return $this->belongsTo(Categoria::class, 'categoria_id', 'id');
    }   

    public function imobiliarioImages(){
        return $this->hasMany(imobiliarioImagem::class, 'imobiliario_id','id');
    }
}
