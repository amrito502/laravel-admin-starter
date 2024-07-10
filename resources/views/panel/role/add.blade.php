@extends('panel.master')
@section('content')
    <section class="section" style="height: 85vh;">
       <div class="row">
        <div class="col-md-12">
            <div class="card">
                @include('_message')
                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title">Add Role</h5>
                    <div><a href="{{ url('/panel/role') }}" class="btn btn-success mt-3">Role List</a></div>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group mt-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" placeholder="name" id="name" class="form-control mt-2">
                        </div>

                        <div class="row mb-3 mt-5">
                            <h1><b>All Permission : </b></h1>
                            <hr class="mb-5">
                            @foreach ($getPermission as $value)
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-2" style="margin-top: 12px;"><b>{{ $value['name'] }}</b></div>
                                    <div class="col-md-10">
                                        @foreach ($value['group'] as $group)
                                        <div class="mb-3 mt-3">
                                            <label><input type="checkbox" value="{{ $group['id'] }}" name="permission_id[]" style="margin-right: 6px; cursor: pointer;"><span class="ml-2">{{ $group['name'] }}</span></label> <br>
                                        </div>
                                        @endforeach
                                    </div>
                                    </div>
                                </div>
                                <hr>
                            @endforeach
                        </div>

                        <button class="btn btn-success mt-3" type="submit">Submit</button>

                    </form>


                </div>
            </div>
        </div>
       </div>
    </section>
@endsection







{{--    --}}
