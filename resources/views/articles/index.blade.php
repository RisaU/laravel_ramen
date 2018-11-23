@extends('layout')


@section('content')
  <h1>
    Articles
  <a href="{{ asset('articles/create') }}" class="btn btn-primary float-right">Add New</a>
  </h1>
  <hr />
  @foreach($articles as $article)
    <article>
      <h2>
        <a href="{{ url('articles', $article->id) }}">
          {{ $article->title }}
        </a>
      </h2>
    </article>
  @endforeach


@endsection
