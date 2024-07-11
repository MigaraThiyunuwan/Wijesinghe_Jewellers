<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Leader extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'address',
        'nic',
        'contact_no',
        'email',
        'password',
    ];

    public function Register(Request $request)
    {
        $leader = new Leader();
        $leader->first_name = $request->first_name;
        $leader->last_name = $request->last_name;
        $leader->address = $request->address;
        $leader->nic = $request->nic;
        $leader->contact_no = $request->contact_no;
        $leader->email = $request->email;
        $leader->password = Hash::make($request->password);

        $leader->save();

        return true;
    }

    public static function getLeaderCount()
    {
        return Leader::count();
    }

    public static function getAllLeaders()
    {
        return Leader::all();
    }

    public function deleteLeader($id)
    {
        $leader = Leader::find($id);
        $leader->delete();
        return true;
    }

    public function login($email, $password)
    {
        $leader = Leader::where('email', $email)->first();
        if ($leader) {
            if (Hash::check($password, $leader->password)) {
                return $leader;
            }
        }
        return false;
    }

    public function editDetails($first_name, $last_name, $email, $address, $contact_no)
    {
        $oldLeader = session()->get('leader');
        $oldLeader->first_name = $first_name;
        $oldLeader->last_name = $last_name;
        $oldLeader->email = $email;
        $oldLeader->address = $address;
        $oldLeader->contact_no = $contact_no;
        
        $oldLeader->save();
        
        return $oldLeader;
    }

    public function changePassword($new_password)
    {
        $oldLeader = session()->get('leader');
        $oldLeader->password = Hash::make($new_password);
        $oldLeader->save();

        return $oldLeader;
    }
    
}