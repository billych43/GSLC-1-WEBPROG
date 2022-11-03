@extends('home')

@section('content')

    <div class="container text-center">
        <h1>Loop</h1>
    </div>

    @for ($i = 1; $i <= 5; $i++)
        <div class="text-center" >
            <h3> {{$i}} </h3>
        </div>
    @endfor

@endsection







