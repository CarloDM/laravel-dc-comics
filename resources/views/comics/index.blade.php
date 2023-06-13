@extends('layout.main')

@section('content')
<div class="container">
  @if (session('deleted'))
  <div class="alert alert-success" role="alert">
      {{ session('deleted') }}
  </div>
@endif
    <h3 class="mt-3">comics</h3>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">index</th>
          <th scope="col">title</th>
          <th scope="col">series</th>
          <th scope="col">type</th>
          <th scope="col">card</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($comics as $comic)
        <tr>
          <td>{{$comic->id}}</td>
          <td>{{$comic->title}}</td>
          <td>{{$comic->series}}</td>
          <td>{{$comic->type}}</td>
          <td>
            <a href="{{route('comics.show', $comic)}}">show</a>
            <a href="{{route('comics.edit', $comic)}}" title="Modifica" >edit</a>

            <form action="{{route('comics.destroy', $comic)}}" method="POST"
            onsubmit="return confirm('vuoi eliminare {{$comic->title}} veramente?')">
            @csrf
            @method('DELETE')
            <button type="submit"class="btn p-1 btn-danger" title="cancella"   >cancella</  button>
            </form>



          </td>
        </tr>

        @endforeach
      </tbody>
    </table>

</div>
@endsection
