@extends('stations.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Station</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('stations.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('stations.update',$station->id) }}" method="POST">
        @csrf

        @method('PUT')
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Station Id:</strong>
                    <input type="text" name="id" value="{{ $station->id }}" class="form-control" placeholder="Station Id">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Station Name:</strong>
                    <textarea class="form-control" style="height:150px" name="station_name" placeholder="Station Name">{{ $station->station_name }}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>URL IMG:</strong>
                    <textarea class="form-control" style="height:150px" name="urls" placeholder="URL IMAGE">{{ $station->urls }}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Zone ID:</strong>
                    <textarea class="form-control" style="height:150px" name="zone_id" placeholder="zone_id">{{ $station->zone_id}}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Latitude:</strong>
                    <textarea class="form-control" style="height:150px" name="latitude" placeholder="LatitudeE">{{ $station->latitude}}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Longitude:</strong>
                    <textarea class="form-control" style="height:150px" name="longitude" placeholder="Longitude">{{ $station->longitude}}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
