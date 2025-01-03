<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
     //tabela náo precisa passar por array, somente o que dentro dela.
    protected $table = 'tb_users';

    protected $fillable = ['UserName' ,'UserLogin' ,'Id','hasPhp','idhash','nivel','tipoUser','Ativo','data_cadastro'];
}
