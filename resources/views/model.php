
  <div class="modal fade" tabindex="-1" id="addshedules" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add to shedules</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="post">
            <div class="form-group">
              <label for="">Display Name</label>
              <input type="text" class="form-control" name="displayname" value="{{ $submission->displayname }}" readonly>
            </div>
            <div class="form-group">
              <label for="">Country</label>
              <input type="text" class="form-control" name="country" value="{{ $submission->country }}" readonly>
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="text" class="form-control" name="email" value="{{ $submission->email }}" readonly>
            </div>
            <div class="form-group">
              <label for="">Iyanju</label>
              <input type="text" class="form-control" name="iyanju" value="{{ $submission->iyanju }}" readonly>
            </div>
            <div class="form-group">
              <label for="">Image</label>
              <input type="text" class="form-control" name="image" value="{{ $submission->image }}" readonly>
            </div>
            <div class="form-group">
              <label for="">Schedule</label>
              <select class="form-control" name="schedule">
                <option value="">Select Schedule</option>
                @foreach ($schedules as $schedule)
                  <option value="{{ $schedule->id }}">{{ $schedule->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Add to Schedule</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>