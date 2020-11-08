
@extends('layouts.header')

@section('content')
    <div class="container mt-3">
        {{-- {{dd($tweets[0]['tweet'])}} --}}
        @foreach ($tweets as $tweet)
        {{-- {{dd($tweet['tweet'])}} --}}
            <div class="mb-1">
                <strong>
                    {{ $tweet['name'] }}
                </strong> 
            </div>
            <div>
                {{ $tweet['created_at'] }}
            </div>
            
            <div class="pl-3">
                {{ $tweet['tweet'] }}
            </div>
                <hr>
        @endforeach
    </div>
@endsection