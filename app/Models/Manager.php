<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Manager extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'address',
        'nic',
        'contact_no',
        'email',
        'password',
    ];

    public function login($email, $password)
    {
        $manager = $this->where('email', $email)->first(); 

        if ($manager) {
            if (Hash::check($password, $manager->password)) {
                return $manager;
            }
        }

        return null;
    }

    public function editDetails($first_name, $last_name, $username, $email, $address, $contact_no)
    {
        $oldManager = session()->get('manager');
        $oldManager->first_name = $first_name;
        $oldManager->last_name = $last_name;
        $oldManager->username = $username;
        $oldManager->email = $email;
        $oldManager->address = $address;
        $oldManager->contact_no = $contact_no;
        

        $oldManager->save();
        
        return $oldManager;
    }

    public function changePassword($new_password)
    {
        $oldManager = session()->get('manager');
        $oldManager->password = Hash::make($new_password);
        $oldManager->save();

        return $oldManager;
    }
}