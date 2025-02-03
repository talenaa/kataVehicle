@extends("layouts.app")

@section('content')

        <h1 class="text">Welcome to the Toll app</h1>
        <section class="mainContent">
            <div class="option">
                <a href="{{ route('tolls') }}">
                    <img src="/img/pedagio.jpeg" alt="toll station in sao paulo">
                </a>
                <p>Stations</p>
            </div>

            <div class="option">
                <a href="{{ route('vehicles') }}">
                    <img src="/img/volkswagen.jpg" alt="white volkswagen">
                </a>
                <p>Vehicles</p>
            </div>
        </section>
@endsection