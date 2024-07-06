@if(!empty(session('success')))
    <div class="text-danger mt-5" role="alert">
        {{ session('success') }}
    </div>
@endif

@if(!empty(session('error')))
    <div class="text-danger mt-5" role="alert">
        {{ session('error') }}
    </div>
@endif


