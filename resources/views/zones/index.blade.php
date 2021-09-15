@extends('zones.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Bicy Service Zone</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('zones.create') }}"> Create New Zone</a>
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
            <th>ID</th>
            <th>Zone</th>
            <th>Image</th>
        </tr>
        @foreach ($zones as $zone)
        <tr>
            <td>{{ $zone->id }}</td>
            <td>{{ $zone->zone }}</td>
            <td><img src={{$zone->url}} width="400" height="200" ></td>
            <td>
                 <a class="btn btn-info" href="{{ route('zones.show',$zone->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('zones.edit',$zone->id) }}">Edit</a>
                <form action="{{ route('zones.destroy',$zone->id) }}" method="POST">
   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection
