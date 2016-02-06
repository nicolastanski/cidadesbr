<?php

namespace Artesaos;

use Illuminate\Database\Eloquent\Model;


class Cidade extends Model
{

    public $timestamps = false;

    protected $fillable = ['estado_id', 'nome'];

    public function scopeGetByEstado($query, $uf)
    {
        return $query->whereHas('estado', function ($query) use ($uf) {
            return $query->where('uf', $uf)->orderBy('nome');
        });
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }
}

