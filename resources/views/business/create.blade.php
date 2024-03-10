@extends('layouts.theme_home')

@section('content')
    <div class="container-fluid ">
        <div class="row">
            <div class="col-12">
                @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <form method="POST" action="{{ url('/business') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    @include ('business.form', ['formMode' => 'create'])

                </form>
            </div>
        </div>
    </div>
@endsection
