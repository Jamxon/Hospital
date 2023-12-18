@if(session()->has('error'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dissimis="alert">
            x
        </button>
        {{ session()->get('error') }}
    </div>
@endif

@if(session()->has('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dissimis="alert">
            x
        </button>
        {{ session()->get('success') }}
    </div>
@endif


