
@if (session()->has('errors'))
    <div class="alert alert-dismissable alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>
            @foreach ($errors->all() as $error)
                <li><strong>{!! $error !!}</strong></li>
            @endforeach
        </strong>
    </div>
@endif