<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    use HasFactory;
    protected $table ='keluargas';

    public function jemaat(){
        return $this->belongsTo((jemaat::class));
    }
}
