<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'carro';

    protected $fillable = [
        'marca',
        'descricao',
        'Ano_fabricacao',
        'cor',
        'preco',
        'kmRodado'
    ];

    public function fotos()
    {
        return $this->hasMany(Fotos::class, 'carro_id', 'id');
    }
}
