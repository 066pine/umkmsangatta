<div class="product-card">
    <div class="product-image">
        <img src="{{ $product->image_url }}" alt="{{ $product->name }}">
    </div>
    <div class="product-details">
        <h3 class="product-name">{{ $product->name }}</h3>
        <p class="product-description">{{ $product->description }}</p>
        <p class="product-price">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
    </div>
    <div class="product-actions">
        <a href="{{ route('product.show', $product->id) }}" class="btn btn-primary">View Details</a>
        <a href="{{ route('cart.add', $product->id) }}" class="btn btn-secondary">Add to Cart</a>
    </div>
</div>