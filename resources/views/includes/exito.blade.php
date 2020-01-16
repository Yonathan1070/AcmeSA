@if (session('mensaje'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" data-auto-dismiss="3000">
        <div>
            {{session('mensaje')}}
        </div>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif