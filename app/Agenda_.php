<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda_ extends Model
{
    protected $table = 'agenda';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id','nome','telefone','email','data','horario','servico_id'
    ];

    //
    
}
