<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormsModel extends Model
{
    protected $table = 'forms';
    protected $fillable = ['gendertitle','name','street','civil','purpose','dateissued','reason1','reason2','age'];
}
