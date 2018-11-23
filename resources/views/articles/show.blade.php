@extends('layout')

@section('content')
  <h1>{{ $article->title }}</h1>
  <hr />

  <article>
    <div class="body">{{ $article->body }}</div>
  </article>
  <br />
  <div class="">
    <a href="{{ action('ArticlesController@edit',
                [$article->id]) }}"
                class="btn btn-primary"
    >Edit
    </a>
    {{-- delete btn --}}
    {!! delete_form(['articles', $article->id]) !!}

    <a href="{{ action('ArticlesController@index') }}"
      class="btn btn-secondary float-right"
      >Go back to Article lists
  </a>
  </div>
@endsection
