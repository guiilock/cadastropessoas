<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelCadastro extends Model
{
    protected $table='cadastro';
    protected $fillable=['name', 'email', 'data_nascimento'];
}
