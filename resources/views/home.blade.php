@extends('layouts.app')
@section('main')
    <section id="home">
        <div class="container flex wrap between">
            <div class="current">
                current series
            </div>
            @foreach ($comics as $index => $comic)
            <a href="{{route('detail',['id'=>$index])}}" class="card">
                <div class="thumb">
                    <img src="{{$comic['thumb']}}" alt="">
                </div>
                <div class="title">
                    {{$comic['series']}}
                </div>
            </a>
            @endforeach
        </div>
    </section>
@endsection
