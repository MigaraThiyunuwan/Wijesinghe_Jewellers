<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
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

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    
    public function register(Request $request)
    {
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->username = $request->username;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->country = $request->country;
        $user->contact_no = $request->contact_no;
        $user->about = $request->about;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        // Save the user
        $user->save();

        return $user;
    }

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

    public function changePassword($new_password)
    {
        $olduser = session()->get('user');
        $olduser->password = Hash::make($new_password);
        $olduser->save();

        return $olduser;
    }
}