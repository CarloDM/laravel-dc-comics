@extends('layout.main')

@section('content')
<div class="container">
    <h3 class="mt-3">comics</h3>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">title</th>
          <th scope="col">series</th>
          <th scope="col">type</th>
          <th scope="col">card</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($comics as $comic)

        <tr>
          <td>{{$comic['title']}}</td>
          <td>{{$comic['series']}}</td>
          <td>{{$comic['type']}}</td>
          <td><a href="#">description</a></td>
        </tr>

        @endforeach
      </tbody>
    </table>

</div>
@endsection
