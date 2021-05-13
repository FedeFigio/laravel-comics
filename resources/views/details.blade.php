@extends('layouts.app')
@section('main')
<div id="details">
    <div class="thumb-bar">
        <div class="container-sm">

            <div class="thumb">
                <img src="{{$comic['thumb']}}" alt="">
            </div>
        </div>
    </div>
    <div class="info-wrap container-sm flex">
        <div class="description-wrap flex column">
            <h2>{{$comic['title']}} </h2>
            <div class="price-info flex">
                <div class="price a-center between flex">
                    <span>U.S Price {{$comic['price']}}</span>
                    <span>AVAILABLE</span>
                </div>
                <div class="check j-center a-center flex">
                    <span>Check Availability</span>
                </div>
            </div>
            <div class="description"><p>{{$comic['description']}}</p></div>
        </div>
        <div class="advertisment">
        </div>
    </div>
    <div class="detail-wrap flex">
        <div class="talent"></div>
        <div class="spaces"></div>
    </div>
</div>
@endsection
