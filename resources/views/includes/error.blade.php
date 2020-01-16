@if ($errors->any())
<div class="alert alert-danger alert-dismissible fade show" role="alert" data-auto-dismiss="3000">
    <div class="alert-text">
        @foreach ($errors->all() as $error)
        {{$error}}
        @endforeach
    </div>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
@endif