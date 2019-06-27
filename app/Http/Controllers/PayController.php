<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayController extends Controller
{
    public function pay(Request $request)
    {
        $request->validate([
            'mobile_number'=>'required|max:11|min:11',
            'chargeMount' => 'required'
        ]);
        dd($request->all());
        return back();
    }

}
