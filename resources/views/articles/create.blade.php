@extends('layout')

@section('content')
  <h1>Wirte a New Article</h1>
  <hr />
  {{-- display error(s) --}}
  @include('errors.form_errors')

  {!! Form::open(['route'=>'articles.store']) !!}
    @include('articles.form',
    [
      'published_at' => date('Y-m-d'),
      'submitButton' => 'Add Article'
    ])
  {!! Form::close() !!}
@endsection
