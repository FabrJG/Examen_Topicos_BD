<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listado extends Model
{
    protected $table = 'listado';
    protected $fillable = ['nombre','curso','nota_1','nota_2','promedio','condicion'];
    use HasFactory;
}
