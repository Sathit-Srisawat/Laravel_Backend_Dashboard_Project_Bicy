  <div class="w3-top">
    <div class="w3-bar w3-black w3-card">
      <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>

      <a href="http://128.199.197.229" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Back</a>

    </div>
  </div>

@extends('problems.app')
@section('content')

    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Problem Report </h2>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Topic</th>
            <th>Detail</th>
            <th>Date & Time</th>
        </tr>
        @foreach ($problem as $problem)
        <tr>
            <td>{{ $problem->topic }}</td>
            <td>{{ $problem->detail }}</td>
            <td>{{ $problem->created_at }}</td>
            <td>
                <form action="{{ route('problems.destroy',$problem->id) }}" method="POST">
   		    <a class="btn btn-info" href="{{ route('problems.show',$problem->id) }}">Show</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection
