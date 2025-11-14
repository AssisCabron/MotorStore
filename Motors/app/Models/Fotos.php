<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fotos extends Model
{
    use HasFactory;

    protected $table = 'fotos';

    public $timestamps = false;
    
    protected $fillable = [
        'carro_id',
        'link_foto'
    ];

    public function carro()
    {
        return $this->belongsTo(Carro::class, 'carro_id', 'id');
    }
}
