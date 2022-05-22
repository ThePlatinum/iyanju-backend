<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubmissionsController extends Controller
{
    //
    public function submissions()
    {
        return view('submissions');
    }

    public function submit(Request $request){
      return response('Submitted', 200);
    }
}
