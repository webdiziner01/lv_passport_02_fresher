@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Timeline</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Auth::user()->token)

                        @if($tweets->count())
                            @foreach($tweets as $tweet)

                                    <div class="media mb-3">
                                        <img class="mr-3" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABABAMAAABYR2ztAAAAIVBMVEXMzMyWlpbFxcWjo6O+vr63t7ecnJyqqqqbm5uxsbGampoKZyAaAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAAU0lEQVRIiWNgGAWjYBQMd8Bk7KCITGMAZqeAQgZ2zwAwjQ2wmYU6ArVDaGyA0aWTkYHBFEpjM0FpoaABUzGExqaAJdmBkYFdNQBMj4JRMAoGOwAAPNIL2qWeApgAAAAASUVORK5CYII=" alt="User Avatar">
                                        <div class="media-body">
                                            <h5 class="mt-0">{{ $tweet->user->name }}</h5>
                                            {{$tweet->body}}
                                        </div>
                                    </div>

                            @endforeach
                        @endif

                    @else
                        <p>Please <a href="{{url('/auth/twitter')}}">authorize with twitter</a></p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
