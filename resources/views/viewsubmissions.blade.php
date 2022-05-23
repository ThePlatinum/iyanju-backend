@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row header bg-light p-3">
    <h5>View Submission</h5>
  </div>

  <div class="flex-grow-1 py-3">
    <div>
      <div class="card card-body">
        <div class="row p-3">
          <div class="col-md-6">
            <img src="{{'/storage/'.$submission->image }}" alt="{{ $submission->displayname }}" class="img-fluid">
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <div>
              <div>
                <h6 class=" mb-1">{{ $submission->displayname }}</h6>
                <p class="p-0 mb-1">{{ $submission->country }} | {{ $submission->email }}</p>
              </div>
              <div>
                <p>Iyanju: <br> <b>{{ $submission->iyanju }}</b> </p>
              </div>
              <div>
                <a data-bs-toggle="modal" data-bs-target="#addschedules" class="btn btn-outline-primary"> Add to Schedule </a>
                <a data-bs-toggle="modal" data-bs-target="#reject" class="btn btn-danger"> Reject Submission </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Add to schedules -->
    <div class="modal fade" tabindex="-1" id="addschedules" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Add to Schedules</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="{{route('addschedule')}}" method="post">
              <p>
                A message will be sent to the user indicating that the <b>Iyanju</b> they submitted has been added to the schedule.
              </p>
              <div class="form-group">
                <label for="reason">Email</label>
                <input type="text" class="form-control" name="email" value="{{ $submission->email }}" readonly>
              </div>
              <div class="form-group py-3">
                <label for="date">Date Schedule</label>
                <input type="date" class="form-control" name="date" min={{now()}}>
              </div>
              <div class="form-group py-3">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Reject Submission -->
    <div class="modal fade" tabindex="-1" id="reject" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Reject Submission</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="" method="post">
              <p>
                Send a message to the user indicating why the <b>iyanju</b> they submitted is not acceptable.
              </p>
              <div class="form-group">
                <label for="reason">Email</label>
                <input type="text" class="form-control" name="email" value="{{ $submission->email }}" readonly>
              </div>
              <div class="form-group py-3">
                <label for="reason">Reason</label>
                <textarea name="reason" id="reason" rows="10" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Close</button>
                <button type="submit" class="btn btn-primary">Send Rejection</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection