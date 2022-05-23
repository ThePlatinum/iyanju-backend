@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row header bg-light p-3">
    <h5>Schedules</h5>
  </div>

  <div class="flex-grow-1 py-3">
    <div>
      Showing {{ sizeof($submissions) }} submissions
    </div>
    <div class="row p-2">
      @forelse ($submissions as $submission)
      <div class="col-md-6">
      <div class="card card-body">
        <div class="row">
          <div class="col col-2">
            <img src="{{ url('/storage/').'/'.$submission->image }}" alt="{{ $submission->displayname }}" width='90'>
          </div>
          <div class="col px-3">
            <div class="d-flex fle-column align-items-center h-100">
              <div class="col">
                <h6 class=" mb-1">{{ $submission->displayname }}</h6>
                <p class="p-0 mb-1">{{ $submission->country }} | {{ $submission->email }}</p>
                <p>Iyanju: <br> <b>{{ $submission->iyanju }}</b> </p>
                <a href="{{ url('/viewsubmissions/').'/'.$submission->id }}" class="btn btn-sm btn-danger"> View </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      @empty
        <div class="col-12 text-center">
          No schedules yet
        </div>
      @endforelse
    </div>
  </div>

</div>
@endsection