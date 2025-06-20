<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = 'libro';

    protected $keyType = 'int';

    protected $fillable = ['titolo'];

    public $titolo;
}
