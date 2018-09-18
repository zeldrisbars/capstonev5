<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    protected $table = 'resident';
    protected $fillable = ['id','lastname','firstname','middlename','gender','civil','age','birthdate','votersno','yearsres','street','barangay','cityprovince','province','zipcode','mlast','mfirst','mmiddle','flast','ffirst','fmiddle'];
}
