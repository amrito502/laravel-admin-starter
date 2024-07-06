@extends('panel.master')
@section('content')
<section class="section" style="height: 85vh;">
    <div class="card">
        @include('_message')
        <div class="card-header d-flex justify-content-between">
            <h5 class="card-title">Role List</h5>

                <div><a href="{{ url('/panel/role/add') }}" class="btn btn-success mt-3">Add Role</a></div>

        </div>
        <div class="card-body">
          <!-- Bordered Table -->
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($getRecord as $key=>$value)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->created_at }}</td>
                        <td>
                            <a href="{{ url('panel/role/edit/'.$value->id) }}" class="btn btn-info">Edit</a>
                            <a href="{{ url('panel/role/delete/'.$value->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
          <!-- End Bordered Table -->


        </div>
      </div>
</section>




@endsection







{{--    --}}
