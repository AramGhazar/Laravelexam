<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<main class="py-5">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-title">
              <strong>Add New Task</strong>
            </div>
            <div class="card-body">
              <form action="{{ route('tasks.store') }}" method="POST">
                @csrf
                <div class="row">
                <div class="col-md-12">
                    <div class="form-group row">
                    <label for="name" class="col-md-3 col-form-label">Task Name</label>
                    <div class="col-md-9">
                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror">
                        @error('fname')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="created_by" class="col-md-3 col-form-label">Created by</label>
                    <div class="col-md-9">
                        <input type="text" name="created_by" id="created-by" value="{{ Auth::user()->name }}" class="form-control @error('created_by') is-invalid @enderror">
                        @error('created')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="assigned_to" class="col-md-3 col-form-label">Assigned to</label>
                    <div class="col-md-9">
                        <input type="text" name="assigned_to" id="assigned_to" value="{{ Auth::user()->name }} " class="form-control @error('email') is-invalid @enderror">
                        @error('assigned_to')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="status" class="col-md-3 col-form-label">Status</label>
                    <div class="col-md-9">
                    <select class="form-control" name="role">
			        <option selected=""> Select task status</option>
			        <option value="created">Created</option>
			        <option value="assigned">Assigned</option>
                    <option value="in-progress">In-progress</option>
                    <option value="done">Done</option>
		            </select>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="description" class="col-md-3 col-form-label">Description</label>
                    <div class="col-md-9">
                        <textarea name="description" id="description" rows="3" class="form-control @error('address') is-invalid @enderror">{{ old('address') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    </div>
                    <hr>
                    <div class="form-group row mb-0">
                    <div class="col-md-9 offset-md-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ route('tasks.index') }}" class="btn btn-outline-secondary">Cancel</a>
                    </div>
                    </div>
                </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>