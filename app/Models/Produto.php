<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    use softDeletes;
    protected $fillable = ['codigo', 'descricao'];
}
