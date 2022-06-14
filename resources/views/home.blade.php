@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        @foreach($travel_packges as $travel_pack)
        <div class="col">
            <div class="card">
                <img class="img-fluid" src="{{$travel_pack->image}}" alt="">
                <p>{{$travel_pack->name_offerta}}</p>
                <p>{{$travel_pack->location}}</p>
                <p>{{$travel_pack->price}} euro</p>
                <p>{{$travel_pack->type}}</p>
                <p>{{$travel_pack->description}}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection