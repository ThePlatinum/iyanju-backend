<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Submissions;
use Illuminate\Http\Request;

class SchedulesController extends Controller
{

  public function allschedules()
  {
    $submissions = [];
    $schedules = Schedule::all();
    foreach ($schedules as $schedule) {
      $submissions[] = Submissions::where('id', $schedule->submission_id)->first();
    }
    return $submissions;
  }
  //
  public function schedule()
  {
    $submissions = $this->allschedules();
    return view('schedule', compact('submissions'));
  }

  public function addschedule(Request $request)
  {
    $request->validate([
      'submission_id' => 'required',
      'schedule_date' => 'required',
    ]);
    $new = Schedule::create([
      'submission_id' => $request->submission_id,
      'schedule_date' => $request->schedule_date,
    ]);
    if ($new) {
      return back()->with('success', 'Schedule Added');
    }
  }

  public function getsubmissions()
  {
    $submissions = $this->allschedules();
    return response()->json($submissions);
  }
}
