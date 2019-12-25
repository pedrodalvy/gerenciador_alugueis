<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inquilino extends Model
{
    use SoftDeletes;
    protected $table = 'inquilinos';
}
