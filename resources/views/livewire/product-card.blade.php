<div class="min-w-max rounded-lg min-h-800 p-10">
    <a href="{{ route('client.product-detail', ['productSlug' => $product->slug]) }}">
        <img class="w-48 h-60 object-contain mb-4" src="{{ $product->image_url }}" alt="" />
        <div class="p-4 text-center">
            <h5 class="mb-2 tracking-tight text-gray-900 dark:text-white">{{ $product->name }}
            </h5>
            <p class="italic text-xs line-through text-gray-500 dark:text-gray-400">{{ number_format($product->price) }}
            </p>
            <p class="text-red-500 dark:text-gray-400">{{ number_format($product->price) }} VNĐ</p>
        </div>
    </a>
    <div class="text-center">
        <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Thêm
            vào giở hàng</button>
    </div>
</div>