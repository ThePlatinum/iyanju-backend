<?php

namespace App\Http\Controllers;

use App\Models\Submissions;
use Illuminate\Http\Request;

class SubmissionsController extends Controller
{
    //
    public function submissions()
    {
      $submissions = Submissions::all();
      return view('submissions', compact('submissions'));
    }

    public function view($id) {
      $submission = Submissions::find($id);
      return view('viewsubmissions', compact('submission'));
    }

    public function submit(Request $request){
      if ($request->hasfile('image')) {
        $file = $request->file('image');
        $file->storeAs('public/files',$file->getClientOriginalName());
        $image = 'files/'.$file->getClientOriginalName();

        $succes = Submissions::create([
          'displayname' => $request->displayname,
          'country' => $request->country,
          'email' => $request->email,
          'iyanju' => $request->iyanju,
          'image' => $image
        ]);

        if ($succes)
          return response('Submitted successfully', 200);
        else
          return response('Error', 500);
      }
      else {
        return response('No image selected', 400);
      }
    }
}
