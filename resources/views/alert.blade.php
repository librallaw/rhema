<div class="col-md-12">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div>
        @if(session('message'))

            <div class="alert alert-{{ session('type')}}" role="alert">
                    <strong>INFO:</strong> {{ session('message') }}
            </div>

        @endif
    </div>
</div>