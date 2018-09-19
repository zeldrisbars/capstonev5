<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangayClearanceModel extends Model
{
   	protected $table = 'barangayclearance';
    protected $fillable = ['gender','name', 'street', 'civil','purpose','dateissued'];
}
