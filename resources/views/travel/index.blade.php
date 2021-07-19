@extends('layout.app')

@section('main')
    <div class="travels">
        @foreach ($travels as $travel)
        <a href="{{ route('travels.show', $travel->id) }}">
            <div class="travel">
                <h3>{{ $travel->city }}</h3>
                <p>Address: {{ $travel->destination }}</p>
                <p>For {{ $travel->days }} Days</p>
                <p>{{ $travel->description }}</p>
                <p>Price: {{ $travel->price }}€</p>
            </div>
        </a>
        
            
        @endforeach
    </div>
@endsection