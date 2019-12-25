<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proprietario extends Model
{
    use SoftDeletes;
    protected $table = 'proprietarios';
}
