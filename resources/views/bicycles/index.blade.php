  <div class="w3-top">
    <div class="w3-bar w3-black w3-card">
      <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
      <a href="http://128.199.197.229/" class="w3-bar-item w3-button w3-padding-large">Dashboard</a>

      <div class="w3-dropdown-hover w3-hide-small">
        <button class="w3-padding-large w3-button" title="More">USER MANAGE <i class="fa fa-caret-down"></i></button>
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
          <a href="http://128.199.197.229/posts" class="w3-bar-item w3-button">All user</a>
          <a href="http://128.199.197.229/posts/create" class="w3-bar-item w3-button">Add new user</a>
        </div>
      </div>
      
      <div class="w3-dropdown-hover w3-hide-small">
        <button class="w3-padding-large w3-button" title="More">STATION <i class="fa fa-caret-down"></i></button>
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
          <a href="http://128.199.197.229/stations" class="w3-bar-item w3-button">All Station</a>
          <a href="http://128.199.197.229/stations/create" class="w3-bar-item w3-button">Add New Station</a>
        </div>
      </div>

      <div class="w3-dropdown-hover w3-hide-small">
        <button class="w3-padding-large w3-button" title="More">BICYCLES <i class="fa fa-caret-down"></i></button>
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
          <a href="http://128.199.197.229/bicycles" class="w3-bar-item w3-button">Manage Bicycle</a>
          <a href="http://128.199.197.229/bicycles/create" class="w3-bar-item w3-button">Add New Bicycle</a>
        </div>
      </div>

      <div class="w3-dropdown-hover w3-hide-small">
        <button class="w3-padding-large w3-button" title="More">ADD CHANNEL IN STATION <i class="fa fa-caret-down"></i></button>
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
          <a href="http://128.199.197.229/hardwares" class="w3-bar-item w3-button">All Station Hardware</a>
          <a href="http://128.199.197.229/hardwares/create" class="w3-bar-item w3-button">Add New Station Hardware</a>
        </div>
      </div>
      
      <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
    </div>
  </div>

@extends('bicycles.app')
@section('content')

    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Bicy </h2>
            </div>
            <div class="pull-right">
		<a class="btn btn-success" href="{{ route('bicycles.create') }}"> Create New Bicycle</a>
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
            <th>Type</th>
            <th>Status</th>
            <th>Station</th>
            <th>Detail</th>
            <th>Advised</th>
            <th>Bath/Min</th>
            <th>Url</th>
            <th>Zone ID</th>
            <th>Channel</th>
            <th>Latitude</th>
            <th>Longitude</th>
        </tr>
        @foreach ($bicy as $bicy)
        <tr>
            <td>{{ $bicy->id}}</td>
            <td>{{ $bicy->type }}</td>
            <td>{{ $bicy->status }}</td>
	    <td>{{ $bicy->station }}</td>
            <td>{{ $bicy->detail }}</td>
            <td>{{ $bicy->advised }}</td>
            <td>{{ $bicy->bath }}</td>
            <td><img src={{$bicy->url}} width="200" height="200" ></td>
            <td>{{ $bicy->zone_id }}</td>
            <td>{{ $bicy->channel }}</td>
            <td>{{ $bicy->latitude }}</td>
            <td>{{ $bicy->longitude }}</td>
            <td>
                <form action="{{ route('bicycles.destroy',$bicy->id) }}" method="POST">
		    <a class="btn btn-info" href="{{ route('bicycles.show',$bicy->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('bicycles.edit',$bicy->id) }}">Edit</a>   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection
