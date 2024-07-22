<div class="flex mb-12 overflow-x-auto hide-scrollbar">
    @foreach ($products as $product)
        @livewire('product-card', ['id' => $product->id])
    @endforeach
</div>
