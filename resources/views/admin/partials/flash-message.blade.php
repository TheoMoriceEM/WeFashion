<div class="row">
    <div class="col-12">
        @if(Session::has('message'))
            <div class="alert alert-success" role="alert">
                <p>{{ Session::get('message') }}</p>
            </div>
        @elseif(Session::has('error'))
            <div class="alert alert-danger" role="alert">
                <p>{{ Session::get('error') }}</p>
            </div>
        @endif
    </div>
</div>
