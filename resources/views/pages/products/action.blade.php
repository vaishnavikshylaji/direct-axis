<div class="row">
    <div class="col-3 text-end">
        <a href="{{ route('products.edit', $product->id) }}">Edit</a>
    </div>
    <div class="col-3">
        <a href="{{ route('products.destroy', $product->id) }}" class="btn-delete">Delete</a>
    </div>
</div>
