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
          {{-- Hello, {{ $user->name }} ! --}}
{{-- {{ $errors->has('lastname') ? ' is-invalid' : '' }} --}}
          You have <span style="font-size:200%;font-weight:bold;">{{ isset($point[0]) ? $point[0]->total_point : '0' }}</span>
          @if( isset($point[0]) && $point[0]->total_point > 1) points
          @else point
          @endif
        </div>
        <div class="card">
          <div class="card-header">
            History
          </div>
        <table class="table table-hover">
          <thead><th>Date</th><th>Point</th><th>Action</th></thead>
          <tbody>
          @if(empty($histories[0]))
            <td>--</td><td>--</td><td>--</td>
          @else
            @foreach($histories as $history)
            <tr>
              <td>{{ $history->created_at }}</td>
              <td>{{ ($history->total_point >0) ? "+" : "" }}{{ $history->total_point }}</td>
              <td>{{ ($history->point_action_flg == 1) ? "Get" : "Use" }} Point</td>
            </tr>
            @endforeach
          @endif
          </tbody>
        </table>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
