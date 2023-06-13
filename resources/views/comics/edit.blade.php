@extends('layout.main')

@section('content')

<div class="container">
  <h3>edit {{$comic->titolo}}</h3>

  @if ($errors->any())
            <div class="alert alert-danger" role="alert">

                <ul>
                    {{-- $errors->all() mette tutti gli errori in un array che ciclo osolo se $errors->any() è true --}}
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>

            </div>
        @endif

<form action="{{route('comics.update', $comic)}}" method="POST">
  @csrf
  @method('PUT')
  <div class="mb-1">
    <label for="title" class="form-label">title</label>
    <input
    id='title'
    value='{{old('title', $comic->title) }}'
    class="form-control"
    name="title"
    placeholder='title'
    type='text'>
  </div>
  {{-- --------------------------------------- --}}
  <div class="mb-1">
    <label for="thumb" class="form-label">thumb</label>
    <input
    id='thumb'
    value='{{old('thumb',$comic->thumb)}}'
    class="form-control"
    name="thumb"
    placeholder='image pat'
    type='text'>
  </div>
  {{-- --------------------------------------- --}}
  <div class="mb-1">
    <label for="price" class="form-label">price</label>
    <input
    id='price'
    value='{{old('price',$comic->price)}}'
    class="form-control"
    name="price"
    placeholder='0 €'
    type='text'>
  </div>
  {{-- --------------------------------------- --}}
  <div class="mb-1">
    <label for="series" class="form-label">series</label>
    <input
    id='series'
    value='{{old('series', $comic->series)}}'
    class="form-control"
    name="series"
    placeholder='series'
    type='text'>
  </div>
  {{-- --------------------------------------- --}}
  <div class="mb-1">
    <label for="sale_date" class="form-label">sale-date</label>
    <input
    id='series'
    value='{{old('sale_date', $comic->sale_date)}}'
    class="form-control"
    name="sale_date"
    placeholder='AAAA-MM-DD'
    type='text'>
  </div>
  {{-- --------------------------------------- --}}
  <div class="mb-1">
    <label for="type" class="form-label">type</label>
    <input
    id='type'
    value='{{old('type',$comic->type)}}'
    class="form-control"
    name="type"
    placeholder='comic book'
    type='text'>
  </div>
  {{-- --------------------------------------- --}}
  <div class="mb-1">
    <label for="artists" class="form-label">artists</label>
    <input
    id='artists'
    value='{{old('artists',$comic->artists)}}'
    class="form-control"
    name="artists"
    placeholder='artist | artist | artist'
    type='text'>
  </div>
  {{-- --------------------------------------- --}}
  <div class="mb-1">
    <label for="writers" class="form-label">writers</label>
    <input
    id='writers'
    value='{{old('writers',$comic->writers)}}'
    class="form-control"
    name="writers"
    placeholder='writers | writers | writers'
    type='text'>
  </div>
  {{-- --------------------------------------- --}}
  <div class="mb-1">
    <label for="description" class="form-label">description</label>
    <textarea
    id='description'
    class="form-control"
    name="description"
    placeholder='description'
    >
    {{old('description',$comic->description)}}
  </textarea>
  </div>

  {{-- --------------------------------------- --}}
  <button type="submit" class="btn btn-primary">modifica</button>
</form>

</div>

@endsection
