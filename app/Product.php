<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [ 'name', 'short', 'body'];
}



/****** DENTRO DEL ARRAY FILLABLE SE PONEN LOS CAMPOS QUE QUIERO QUE SE GUARDE INFORMACIÓN ***********/
