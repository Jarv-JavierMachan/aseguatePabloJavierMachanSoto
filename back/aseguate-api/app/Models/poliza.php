<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class poliza extends Model
{
    use HasFactory;
    protected $fillable = ['numero','fecha_inicio', 'fecha_fin', 'estado'];
}
