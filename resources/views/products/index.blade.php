@extends('layout.front')
@section('title', 'Home')
@section('content')
    <div class="row row-cols-4 g-2">
        @forelse ($products as $p)
            <div class="col">
                <div class="card">
                    @isset($p['image'])    
                        <img src="{{ asset($p['image']) }}" class="card-img-top" alt="{{ $p['title'] }}">
                    @else
                        <img src="{{ asset('images/product.png') }}" class="card-img-top" alt="{{ $p['title'] }}">
                    @endisset
                    <div class="card-body">
                        <h5 class="card-title">{{ $p['title'] }}</h5>
                        <p class="card-text">{{ $p['description'] }}</p>
                        <a href="{{ route('products.show', ['id' => $p['id']]) }}" class="btn btn-outline-primary">
                            Voir plus
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-danger text center">
                Aucun Produit
            </p>
        @endforelse

    </div>
@endsection
