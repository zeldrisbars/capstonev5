<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NonResident extends Model
{
    protected $table = 'nonresident';
    protected $fillable = ['id','lastname','firstname','middlename','email','image','gender','civil','age','birthdate','votersno','yearsres','street','barangay','cityprovince','province','zipcode','sitio','mlast','mfirst','mmiddle','flast','ffirst','fmiddle','citizenship','religion','hno','hrel','sib'];
}
