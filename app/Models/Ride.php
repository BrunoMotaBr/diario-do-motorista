<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ride extends Model
{
    protected $fillable = [
        'user_id',
        'platform_id',
        'valor',
        'data_corrida',
        'quantidade_km',
        'forma_pagamento',
        'tempo_online_minutos',
        'observacoes'
    ];
}
