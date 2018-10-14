<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;
use Illuminate\Support\Facades\Hash;


class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','email','username', 'password','role', 'lastname','firstname','middlename','email','image','gender','civil','age','birthdate','votersno','yearsres','street','barangay','cityprovince','province','zipcode','sitio','mlast','mfirst','mmiddle','flast','ffirst','fmiddle','citizenship','religion','hno','hrel','sib',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     * Checks if user is a super admin
     *
     * @return boolean
     */
    public function isSuperAdmin() : bool
    {
        return (bool) $this->is_super_admin;
    }
    /**
     * Create admin.
     *
     * @param array $details
     * @return array
     */
    public function createSuperAdmin(array $details) : self
    {
        $user = new self($details);
        if (! $this->superAdminExists()) {
            $user->is_super_admin = 1;
        }
        $user->password = Hash::make($details['password']);
        $user->save();
        return $user;
    }
    /**
     * Checks if super admin exists
     *
     * @return integer
     */
    public function superAdminExists() : int
    {
        return self::where('is_super_admin', 1)->count();
    }
}

