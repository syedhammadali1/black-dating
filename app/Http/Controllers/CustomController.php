<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomController extends Controller
{
    public function dobRequest(Request $request)
    {
        $dob = $request->year.'-'.$request->month.'-'.$request->day;
        return redirect()->route('user.sign_up', 'dob='.$dob );
    }
}
