<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Platform;

class Ride extends Model
{
    protected $fillable = [
        'user_id',
        'platform_id',
        'valor',
        'data_corrida',
        'quantidade_km',
        'tempo_online_minutos',
        'observacoes'
    ];
    public function platform()
    {
        return $this->belongsTo(Platform::class);
    }
}
