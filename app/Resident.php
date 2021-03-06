<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    protected $table = 'resident';
    protected $fillable = ['id','lastname','firstname','middlename','email','image','gender','civil','age','birthdate','votersno','yearsres','street','barangay','cityprovince','province','zipcode','sitio','mlast','mfirst','mmiddle','flast','ffirst','fmiddle','citizenship','religion','hno','hrel','sib'];
}
