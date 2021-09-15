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

@extends('posts.layout')
@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Manage User</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('posts.create') }}"> Create New Post</a>
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
            <th>No</th>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone Number</th>
            <th>E-mail</th>
            <th>Id Card</th>
            <th>Password</th>  
            <th>Profile</th>  
        <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->id }}</td>
            <td>{{ $value->firstname }}</td>
            <td>{{ $value->lastname }}</td>
            <td>{{ $value->phonenumber }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->idcard }}</td>
            <td>{{ $value->password }}</td>
	    <td><img src={{$value->profile}} width="200" height="200" ></td>  
            <td>
                <form action="{{ route('posts.destroy',$value->id) }}" method="POST">   
                    <a class="btn btn-info" href="{{ route('posts.show',$value->id) }}">Show</a>    
                    <a class="btn btn-primary" href="{{ route('posts.edit',$value->id) }}">Edit</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>  
    {!! $data->links() !!}      
@endsection
