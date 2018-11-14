@if ($errors->any())
    <div class="alert alert-danger alert-dismissible">
        Error !
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
