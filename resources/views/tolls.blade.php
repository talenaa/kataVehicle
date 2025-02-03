@extends("layouts.app")

@section('content')
    <div class="title">
        <h2>Tolls</h2>
    </div>
    <div class="content">
        @foreach($tolls as $toll)
           <div class="tollCard">
                <h3>{{$toll->name}}</h3>
                <div>
                    <h4>Vehicles:</h4>
                    @foreach($toll->vehicles as $vehicle)
                        <p>{{$vehicle->vehicleType->type}}. {{$vehicle->license}}</p>
                    @endforeach
                    <h4>Total earned:</h4>
                    <p>${{$toll->earnings}}</p>
                </div>
           </div>
        @endforeach
    </div>
@endsection