
<main class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
              <div class="card-header card-title">
                <div class="d-flex align-items-center">
                  <h2 class="mb-0">All Tasks</h2>
                  <div class="ml-auto">
                    <a href="{{ route('tasks.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New</a>
                  </div>
                </div>
              </div>
            <div class="card-body">
             <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Task name</th>
                    <th scope="col">Created by</th>
                    <th scope="col">Assigned to</th>
                    <th scope="col">Status</th>
                    <th scope="col">Description</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">{{ $tasks->firstItem() + $index }}</th>
                    <td>{{ $task->name }}</td>
                    <td>{{ $task->user->name }}</td>
                    <td>{{ $task->user->name }}</td>
                    <td>{{ $task->status }}</td>
                <td width="150">
                <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" onsubmit="return confirm('Are you sure?')" style="display: inline">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-sm btn-circle btn-outline-danger" title="Delete"><i class="fa fa-times"></i></button>
                </form>
                </td>
                    </tr>
                </tbody>
              </table>

             
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
