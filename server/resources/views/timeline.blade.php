@extends('layouts.header')

@section('content')
    <div class="container mt-3">
        {!! Form::open(['route' => 'timeline', 'method' => 'POST']) !!}
            {{ csrf_field() }}
            <h1>投稿フォーム</h1>
            <div class="row mb-4">
                @guest

                    <div class="mx-auto">
                        <a class="btn btn-primary" href="{{ route('login') }}">ログインしてツイートする</a>
                        <a class="btn btn-primary" href="{{ route('register') }}">新規登録してツイートする</a>
                    </div>
                @else
                    <select name="topic"  >
                        <option value='0'>全件取得</option>
                        <option value='1'>スパルタ</option>
                        <option value='2'>キャンプ</option>
                        <option value='3'>食事</option>
                    </select>
                    <a href="/timeline"></a>
                    {{ Form::text('tweet', null, ['class' => 'form-control col-9 mr-auto']) }}
                    {{ Form::submit('とぅいーと', ['class' => 'btn btn-primary col-2']) }}
                @endguest
            </div>

            {{-- エラー表示 ここから --}}
            @if ($errors->has('tweet'))
                <p class="alert alert-danger">{{ $errors->first('tweet') }}</p>
            @endif
            {{-- エラー表示 ここまで --}}
        {!! Form::close() !!}
            <hr>
            <h1>とぅいーと一覧</h1>
            <form action={{ route('update') }} method="post">
                @csrf
                    <select name="topic"  >
                        <option value='0'>全件取得</option>
                        <option value='1'>スパルタ</option>
                        <option value='2'>キャンプ</option>
                        <option value='3'>食事</option>
                    </select>
                    <input type="submit" value="表示">
            </form>
            タグを選択して下さい
                @foreach ($tweets as $tweet)
                    <div class="mb-1">

                        <strong>{{ $tweet->name }}</strong> {{ $tweet->created_at }}
                    </div>
                    <div class="pl-3">
                {{ $tweet->tweet }}
            </div>
            <hr>
                @endforeach
    </div>
@endsection