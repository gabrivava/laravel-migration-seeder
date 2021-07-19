@extends('layout.app')

@section('main')
    <div class="travels">
        
        <div class="travel pt-5">
            <img src="https://www.camvillas.com/public/vendita-villa-a-schiera-brindisi-rif-dse-372-villetta-salento-vista-mare-16.JPG" alt="">
            <h3>{{ $travel->city }}</h3>
            <p>Address: {{ $travel->destination }}</p>
            <p>For {{ $travel->days }} Days</p>
            <p>{{ $travel->description }}</p>
            <p>Price: {{ $travel->price }}€</p>
            <button type="button" class="btn btn-primary">Prenota</button>
        </div>
        
    </div>
@endsection