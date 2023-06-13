@extends('layout.main')

@section('content')
<div class="container">
<h3>{{$comic->title}}</h3>

  <ul>
    <li>
    {{$comic->title}}
    </li>
    <li>
    {{$comic->series}}
    </li>
    <li>artists:
      {{$comic->artists}}
    </li>
    <li>writers:
      {{$comic->writers}}
    </li>
  </ul>

  <p>{{$comic->description}}</p>

  <h4>
  {{$comic->price}}
  </h4>
</div>

@endsection
