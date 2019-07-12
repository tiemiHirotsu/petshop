<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $table = 'servicos';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id','nome','foto','definicao','preco'
    ];
}
