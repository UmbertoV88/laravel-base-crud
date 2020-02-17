<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{
    // proprietà passate alla funzione fill nel fruitcontroller (store)
    protected $fillable = ['name','peso','varieta'];
}
