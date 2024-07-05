<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Advertisement extends Model
{
    use HasFactory;

    public function gembusiness()
    {
        return $this->belongsTo(gembusiness::class);
    }

    public function addAdvertisement(Request $request)
    {
        $advertisement = new Advertisement();
        $advertisement->gem_businesses_id = $request->gem_business_id;
        $advertisement->title = $request->title;
        $advertisement->description = $request->description;
        $advertisement->price = $request->price;
        $advertisement->shape = $request->shape;
        $advertisement->carat = $request->carat;
        $advertisement->width = $request->width;
        $advertisement->length = $request->length;
        $advertisement->contact_no = $request->contact_no;

        $advertisement->save();
        return $advertisement;
    }

    public function getAdvertisementList()
    {
        return Advertisement::all();
    }

    public function getAddDetail($id)
    {
        return Advertisement::where('id', $id)->first();
    }
}