<div
    class="text-sm grid grid-cols-12 gap-x-4 gap-y-8 mb-12 py-10 px-20 bg-gray-50 dark:bg-gray-600 dark:text-slate-300 rounded-3xl">
    @foreach ($categories as $item)
        <a href="{{ route('client.products', ['categorySlug' => $parentCategorySlug, 'childCategorySlug' => $item->slug]) }}"
            class="flex flex-col justify-end items-center">
            <img class="w-10 mb-3" src="{{ $item->icon }}" alt="">
            <p>{{ $item->name }}</p>
        </a>
    @endforeach
</div>
