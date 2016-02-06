<?php

namespace Artesaos;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{

    public $timestamps = false;

    protected $fillable = ['nome', 'capital', 'uf'];

    public function cidades()
    {
        return $this->hasMany(Cidade::class);
    }

}

