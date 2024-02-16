@extends('layout.front')
@section('title', 'Home')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset($product['image']) }}" alt="{{ $product['title'] }}" class="img-fluid">
        </div>
        <div class="col-md-6">
            <h1>{{ $product['title'] }}</h1>
            <p>{{ $product['description'] }}</p>
            <div class="d-flex justify-content-between align-items-baseline">
                <x-price :value="$product['price']" currency="MAD" />
                <span @class([
                    'badge',
                    'text-bg-success' => $product['stock'] >= 10,
                    'text-bg-warning' => $product['stock'] > 0 && $product['stock'] < 10,
                    'text-bg-danger' => $product['stock'] <= 0,
                ])>
                    @if ($product['stock'] >= 10)
                        {{ $product['stock'] }} unités
                    @elseif ($product['stock'] > 0)
                        {{ $product['stock'] }} unités (En Rupture de stock)
                    @else
                        Hors Stock
                    @endif
                </span>
            </div>
        </div>
    </div>
@endsection
