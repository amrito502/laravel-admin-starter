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
                            <input type="text" name="name" value="{{ $getRecord->name }}" id="name" class="form-control mt-2">
                        </div>

                        <div class="form-group mt-3">
                            <label for="name" class=""><b>Permission</b></label>
                            <hr class="pb-2">

                                <div class="row">
                                    <div class="col-md-4">
                                        <p>jiiu</p>
                                        <hr>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="row ">

                                        </div>
                                        <hr>
                                    </div>
                                </div>

                        </div>

                        <button class="btn btn-success mt-3" type="submit">Update</button>

                    </form>


                </div>
            </div>
        </div>
       </div>
    </section>
@endsection







{{--    --}}
