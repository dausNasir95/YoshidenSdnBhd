@extends('layouts.sidemaster')

@section('title', 'Product Detail')

@section('content')
<style>
    .product-image {
    max-width: 100%;  /* Ensure the image is responsive */
    height: auto;     /* Maintain the aspect ratio */
    max-height: 400px;  /* Set a maximum height */
}
    </style>
<div class="container py-5">
    <!-- Product Details Section -->
    
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset($product->image_url) }}" class="product-image" alt="{{ $product->product_name }}">
        </div>
        <div class="col-md-6">
            <h1>{{ $product->product_name }}</h1>
            <p class="text-muted">{{ $product->category }}</p>
            <p>{{ $product->description }}</p>
            
            @if($product->price)
                <p><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
            @endif

            @if($product->spec_sheet_url)
                {{-- <a href="{{ $product->spec_sheet_url }}" class="btn btn-info" target="_blank">View Spec Sheet</a> --}}

                {{-- enable balik bile dah ready --}}
                {{-- <a href="#" onclick="window.open('{{ asset($product->spec_sheet_url) }}', '_blank'); return false;" class="btn btn-info">View Spec Sheet</a> --}}

            @endif

            <hr>

            <!-- Enquiry Form -->
            {{-- <form action="{{ route('products.enquiry', $product) }}" method="POST">
                @csrf
                <h5>Enquire about this product</h5>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone (optional)</label>
                    <input type="text" name="phone" id="phone" class="form-control">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity (optional)</label>
                    <input type="number" name="quantity" id="quantity" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit Enquiry</button>
            </form> --}}
        </div>
    </div>

    <!-- Related Products Section -->
    @if($relatedProducts->count())
        <h3 class="my-5">Related Products</h3>
        <div id="ProductGrid" class="row justify-content-between">
            @foreach ($relatedProducts as $related)
                <div class="col-md-3 col-sm-4 col-6 layer-item">
                <a href="{{ route('productdetails', $related) }}" class="product-card">
                    <img src="{{ asset($related->image_url) }}" alt="{{ $related->product_name }}">
                    <div class="product-card-body">
                    <h6 class="mb-0">{{ Str::limit($related->product_name, 30) }}</h6>
                    </div>
                </a>
                </div>
            @endforeach
        </div>
    @endif
</div>

@endsection