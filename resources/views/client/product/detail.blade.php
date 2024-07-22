@extends('layouts.client')

@section('title', 'Điện thoại')

@section('css')
<style>
    .hide-scrollbar::-webkit-scrollbar {
        display: none;
    }

    .hide-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>
@endsection

@section('content')
<div class="px-20 py-10">
    @livewire('breadcrumb')

    <div class="bg-gray-50 rounded-3xl p-10 grid grid-cols-12 gap-4 mb-10">
        <div class="col-span-4 flex flex-col justify-between">
            <div class="mb-10">
                <h1 class="font-bold text-4xl mb-10">{{ $product->name }}</h1>
                <p>{{ $product->description }}</p>
            </div>
            <div class="text-center flex justify-between items-center">
                <p class="text-center font-bold text-lg">{{ number_format($product->price) }} VNĐ</p>
                <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Thêm
                    vào giỏ hàng</button>
            </div>
        </div>
        <div class="col-span-8 flex flex-col mx-auto">
            <div class="mb-10">
                <img src="{{ $product->image_url }}" alt="">
            </div>

            <div class="flex justify-center items-center gap-2 t">
                <button class="w-4 h-4 rounded-full bg-gray-600"></button>
                <button class="w-4 h-4 rounded-full bg-yellow-300"></button>
                <button class="w-4 h-4 rounded-full bg-white"></button>
                <button class="w-4 h-4 rounded-full bg-black"></button>
            </div>
        </div>
    </div>

    <div class="bg-gray-50 rounded-3xl p-10 mb-10">
        <div class="grid grid-cols-2 gap-12 text-center mb-10">
            <div class="flex justify-center">
                <div class="w-60">
                    <p class="text-lg font-bold">A17 PRO</p>
                    <p>A17 Pro chip với 6 nhân GPU</p>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="w-60">
                    <p class="text-lg font-bold">Pro Camera</p>
                    <p>Ống kính chính 48MP và 5x Camera góc siêu rộng</p>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="w-60">
                    <p class="text-lg font-bold">Dung lượng pin 4214 MAh</p>
                    <p>Phát video lên tới 29 tiếng</p>
                </div>
            </div>
        </div>
        <div class="relative overflow-x-auto max-w-[80%] mx-auto border rounded-3xl mb-10 px-10 py-4 hidden" id="table-detail">
            <table class="w-full text-sm text-left rounded-3xl rtl:text-right text-gray-500 dark:text-gray-400">
                <tbody>
                    <tr class="dark:bg-gray-800">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Màn hình
                        </th>
                        <td class="px-6 py-4">
                            6.67"
                        </td>
                    </tr>
                    <tr class="dark:bg-gray-800">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Chip
                        </th>
                        <td class="px-6 py-4">
                            Apple A17 Pro
                        </td>
                    </tr>
                    <tr class="dark:bg-gray-800">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Màu sắc
                        </th>
                        <td class="px-6 py-4">
                            Nature Titanium, Blue Titanium, White Titanium, Black Titanium
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="text-center">
            <button type="button" id="toggle-detail-table" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Chi
                tiết</button>
        </div>
    </div>

    <div class="flex mb-10 overflow-x-auto hide-scrollbar gap-8">
        <div class="p-8 bg-gray-50 rounded-3xl min-w-80 min-h-80">
            <p class="font-bold text-lg mb-4">Giao hàng miễn phí toàn quốc</p>
        </div>
        <div class="p-8 bg-gray-50 rounded-3xl min-w-80 min-h-80">
            <p class="font-bold text-lg mb-4">Bảo hành lên tới 48 tháng</p>
        </div>
        <div class="p-8 bg-gray-50 rounded-3xl min-w-80 min-h-80">
            <p class="font-bold text-lg mb-4">Giảm thêm 2% cho thành viên của Genius</p>
        </div>
        <div class="p-8 bg-gray-50 rounded-3xl min-w-80 min-h-80">
            <p class="font-bold text-lg mb-4">Save with Apple Trade In.</p>
            <p>Get $170–$620 in credit toward iPhone 15 or iPhone 15 Pro when you trade in iPhone 11 or higher.* </p>
        </div>
        <div class="p-8 bg-gray-50 rounded-3xl min-w-80 min-h-80">
            <p class="font-bold text-lg mb-4">Save with Apple Trade In.</p>
            <p>Get $170–$620 in credit toward iPhone 15 or iPhone 15 Pro when you trade in iPhone 11 or higher.* </p>
        </div>
        <div class="p-8 bg-gray-50 rounded-3xl min-w-80 min-h-80">
            <p class="font-bold text-lg mb-4">Save with Apple Trade In.</p>
            <p>Get $170–$620 in credit toward iPhone 15 or iPhone 15 Pro when you trade in iPhone 11 or higher.* </p>
        </div>
        <div class="p-8 bg-gray-50 rounded-3xl min-w-80 min-h-80">
            <p class="font-bold text-lg mb-4">Save with Apple Trade In.</p>
            <p>Get $170–$620 in credit toward iPhone 15 or iPhone 15 Pro when you trade in iPhone 11 or higher.* </p>
        </div>
    </div>

    <div class="bg-gray-50 rounded-3xl p-10 mb-10">
        <div class="text-center">
            <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-full text-sm px-5 py-4 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"><i class="fa-solid  fa-plus"></i></button>
            <p class="text-sm">Thêm sản phẩm so sánh</p>
        </div>
    </div>

    <h1 class="px-12 text-xl">Phụ kiện <span class="font-medium">{{$product->name}}</span></h1>
    <div class="flex mb-12 overflow-x-auto hide-scrollbar">
        @livewire('product-card', ['id' => 1])
    </div>
</div>



@endsection

@section('script')
<script>
    const detailTable = document.getElementById('table-detail')
    const toggleButton = document.getElementById('toggle-detail-table')

    toggleButton.addEventListener('click', function() {
        detailTable.classList.toggle('hidden')
    })
</script>
@endsection