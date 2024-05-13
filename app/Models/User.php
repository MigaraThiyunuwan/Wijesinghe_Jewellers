<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'address',
        'city',
        'country',
        'contact_no',
        'about',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function login($email, $password)
    {
        $user = $this->where('email', $email)->first(); 

        if ($user) {
            if (Hash::check($password, $user->password)) {
                return $user;
            }
        }

        return null;
    }
    
    public function editDetails($first_name, $last_name, $username, $email, $address, $city, $country, $contact_no, $about)
    {
        $olduser = session()->get('user');
        $olduser->first_name = $first_name;
        $olduser->last_name = $last_name;
        $olduser->username = $username;
        $olduser->email = $email;
        $olduser->address = $address;
        $olduser->city = $city;
        $olduser->country = $country;
        $olduser->contact_no = $contact_no;
        $olduser->about = $about;

        $olduser->save();
        
        return $olduser;
    }
    
}