<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cadastrarUsuarioModel extends Model
{
    use HasFactory;
 //QND O MSM NOME DA TABELA DO BANCO DE DADOS E A CLASSE MODEL SÃO IGUAIS ELAS SE CONVERSAM

  //falando que a tabela usuario pretence a esta model
 protected $table = 'usuario';

}//fim da classe
