@extends('layout')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Dashboard</div>

        <div class="card-body">
          @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
          @endif
          Hello, {{ $user->name }} !
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            You have <span style="font-size:200%;font-weight:bold;">{{ $point[0]->total_point }}</span>
            @if($point[0]->total_point > 1) points
            @else point
            @endif
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection
