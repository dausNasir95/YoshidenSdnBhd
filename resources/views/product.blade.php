@extends('layouts.sidemaster')

@section('title', 'Product List')


@section('content')
<div id="Product" class="container py-2" >

</div>
    <div class="container py-5">
        
        <h1 class="section-title">Our Products</h1>
{{--     
        <div id="ProductGrid">
            @foreach ($featuredProducts as $product)
            <a href="{{ route('productdetails', $product) }}" class="product-card">
                <div class="product-card">
                    <img src="{{ asset($product->image_url) }}" alt="{{ $product->product_name }}">
                    <div class="product-card-body">
                        <div class="product-card-title">{{ $product->product_name }}</div>
                        <div class="product-card-description">{{ Str::limit($product->description, 80) }}</div>
                    </div>
                </div>
            </a>
            @endforeach
        </div> --}}
 
        <form method="GET" action="{{ route('product.index') }}" class="d-flex justify-content-end mb-4">
            <div class="col-md-4">
                <input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="Search by product name">
            </div>
            {{-- <div class="col-md-4">
                <select name="category" class="form-control">
                    <option value="">All Categories</option>
                    @foreach ($categories as $cat)
                        <option value="{{ $cat }}" {{ request('category') == $cat ? 'selected' : '' }}>
                            {{-- {{ ucfirst($cat['category']) }} 
                            {{ ucfirst($cat) }}
                        </option>
                    @endforeach
                </select>
            </div> --}}
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary w-100">Filter</button>
            </div>
        </form>
        <div class="d-flex flex-row">
            <div class="flex-column w-25" id="accordion">
                <h5>Select by categories :</h5>
                <ul class="list-group">
                <li class="list-group-item {{ request('category') == '' ? 'active' : '' }}">
                    <a href="{{ request()->fullUrlWithQuery(['category' => '']) }}" class="d-block text-decoration-none {{ request('category') == '' ? 'text-white' : 'text-primary' }}">
                    All Categories
                    </a>
                </li>
                @foreach ($categories as $cat)
                    <li class="list-group-item {{ request('category') == $cat ? 'active' : '' }}">
                    <a href="{{ request()->fullUrlWithQuery(['category' => $cat]) }}" class="d-block text-decoration-none {{ request('category') == $cat ? 'text-white' : 'text-primary' }}">
                        {{ ucfirst($cat) }}
                    </a>
                    </li>
                @endforeach
                </ul>
            </div>
              
            <div class="flex-column px-3 w-100">
                <div id="ProductGrid" class="row justify-content-between">
                    @foreach ($featuredProducts as $product)
                    <div class="col-md-3 col-sm-4 col-6 layer-item">
                        <a href="{{ route('productdetails', $product) }}" class="product-card">
                        <img src="{{ asset($product->image_url) }}" alt="{{ $product->product_name }}">
                        <div class="product-card-body">
                            <h6 class="mb-0">{{ Str::limit($product->product_name, 30) }}</h6>
                        </div>
                        </a>
                    </div>
                    @endforeach
                </div>   
            </div>

        </div>

    </div>

    {{-- @foreach($categories as $category)
        <div class="mb-5">
            <h2 class="mb-4">{{ $category->category }}</h2>

            <div class="product-carousel owl-carousel owl-theme">
                @foreach(\App\Models\Product::where('category', $category->category)->get() as $product)
                    <div class="item">
                        <div class="card h-100 border-0 shadow-sm">
                            <img src="{{ asset($product->image_url) }}" class="card-img-top" alt="{{ $product->product_name }}" style="height: 200px; object-fit: cover;">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $product->product_name }}</h5>
                                <p class="card-text text-muted">{{ \Illuminate\Support\Str::limit($product->description, 80) }}</p>
                                <a href="{{ route('productdetails', $product) }}" class="btn btn-outline-primary mt-auto btn-sm">View Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach --}}
</div>



@endsection