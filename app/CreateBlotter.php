<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreateBlotter extends Model
{
    protected $table = 'create_blotters';
    protected $fillable = ['id','controlno', 'accused', 'complainant','caseofincident','datetime','detail','status'];
}
