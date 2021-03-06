<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    public function single($id)
    {
        $property = Property::findOrFail($id);

        return view('property.single', [
            'property' => $property
        ]);
    }
}
