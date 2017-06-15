<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable = ['title','descricao','user_id','published', 'localizacao','linkFacebook','linkTwitter','dataInicio','dataFinal','image',];
}
