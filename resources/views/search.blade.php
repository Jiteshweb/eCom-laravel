@extends('master')
@section('content')
    <div class="custom-product">
        <div class="col-sm-4">
            <a href="#">Filter</a>
        </div>
        <div class="col-sm-4">
            <div class="tredning-wrapper">
                <h2>Searched Prodcuts</h2>
                <div class="">
                    @foreach ($products as $item)
                        <div class="searched-item">
                            <a href="detail/{{ $item['id'] }}">
                                <img class="trending-img" src="{{ $item['gallery'] }}">
                                <div class="">
                                    <h3>{{ $item['name'] }}</h3>
                                    <h4>{{ $item['description'] }}</h4>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endsection
