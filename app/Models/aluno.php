<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model; 

class aluno extends Model
{
   protected $fillable =['id','nome', 'diciplina', 'data_matricula', 'nota'];
}
