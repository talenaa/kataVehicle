@extends("layouts.app")

@section('content')
    <div class="title">
        <h2>Vehicles</h2>
    </div>
    <div class="content">
        @foreach($vehicles as $vehicle)
           <div class="vehicleCard">
                <h3>{{$vehicle->license}}</h3>
                <div>
                    <h4>Tolls:</h4>
                    @foreach($vehicle->tolls as $toll)
                        <p>{{$toll->name}}. {{$toll->city}}</p>
                    @endforeach
                    <h4>Total expended:</h4>
                    <p>{{$vehicle->total_expended}}</p>
                </div>
           </div>
        @endforeach
    </div>
@endsection