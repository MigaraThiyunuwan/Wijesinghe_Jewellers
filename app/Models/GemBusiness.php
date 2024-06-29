<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GemBusiness extends Model
{
    use HasFactory;

    protected $fillable = [
        'market_name',
        'owner_name',
        'gem_asso_num',
        'business_num',
        'address',
        'verified',
        'contact_no',
        'email',
        'certificate_image',
        'time_from',
        'time_to',
        'password',
    ];

    public function register(Request $request)
    {
        $gemBusiness = new GemBusiness();
        $gemBusiness->market_name = $request->market_name;
        $gemBusiness->owner_name = $request->owner_name;
        $gemBusiness->gem_asso_num = $request->gem_asso_num;
        $gemBusiness->business_num = $request->business_num;
        $gemBusiness->address = $request->address;
        $gemBusiness->contact_no = $request->contact_no;
        $gemBusiness->email = $request->email;
        $gemBusiness->time_from = $request->time_from;
        $gemBusiness->time_to = $request->time_to;
        $gemBusiness->password = Hash::make($request->password);

        $gemBusiness->save();
        return $gemBusiness;
       
    }

    public function login($email, $password)
    {
        $gemBusiness = $this->where('email', $email)->first();

        if ($gemBusiness) {
            if (Hash::check($password, $gemBusiness->password)) {
                return $gemBusiness;
            }
        }

        return null;
    }

    public static function getUnverifiedBusinesses()
    {
        return self::where('verified', 'false')->get();
    }

    public function editDetails(Request $request)
    {
        $oldGemBusiness = session()->get('gemBusiness');
        $oldGemBusiness->owner_name = $request->owner_name;
        $oldGemBusiness->address = $request->address;
        $oldGemBusiness->contact_no = $request->contact_no;
        $oldGemBusiness->email = $request->email;
        $oldGemBusiness->time_from = $request->time_from;
        $oldGemBusiness->time_to = $request->time_to;
        $oldGemBusiness->save();
        return $oldGemBusiness;
    }

    public function changePassword($newPassword)
    {
        $oldGemBusiness = session()->get('gemBusiness');
        $oldGemBusiness->password = Hash::make($newPassword);
        $oldGemBusiness->save();
        return $oldGemBusiness;
    }

    public static function getUnVerifiedGemBusiness()
    {
        return self::where('verified', 'false')->count();
    }
}