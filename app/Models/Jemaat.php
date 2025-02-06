<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jemaat extends Model
{
    use HasFactory;
    protected $table = "jemaats";
    // Di dalam model Jemaat.php
    public function keluarga(){
        return $this->belongsTo((keluarga::class));
    }
// Di dalam model Jemaat.php


}

