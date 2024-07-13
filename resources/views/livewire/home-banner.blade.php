<div class="flex flex-col">
    <div>
        <img class="w-full"
            src="https://www.apple.com/newsroom/images/2023/09/apple-unveils-iphone-15-pro-and-iphone-15-pro-max/tile/Apple-iPhone-15-Pro-lineup-hero-230912.jpg.landing-big_2x.jpg"
            alt="">
    </div>
    <div class="h-screen flex flex-col items-center justify-center gap-20 text-center">
        <p class="text-4xl">iPhone 15 Pro Max - Titanium</p>
        <p class="px-20 tracking-widest leading-loose">iPhone 15 Pro là phiên bản cao cấp mới nhất của Apple, mang đến
            những cải tiến vượt bậc về hiệu năng và thiết kế. Máy được trang bị chip A16 Bionic mạnh mẽ, màn hình OLED
            6.1 inch Super Retina XDR với tần số quét 120Hz, và hệ thống camera chuyên nghiệp với cảm biến LiDAR, cho
            phép chụp ảnh và quay video chất lượng cao trong mọi điều kiện ánh sáng. Với khả năng kết nối 5G siêu nhanh,
            dung lượng pin lớn hơn và thiết kế viền titan mới, iPhone 15 Pro không chỉ đẹp mắt mà còn bền bỉ và hiệu
            quả. Hệ điều hành iOS mới nhất cùng với các tính năng bảo mật tiên tiến giúp người dùng có trải nghiệm mượt
            mà và an toàn.</p>
    </div>
    <div class="flex items-center justify-center min-h-screen bg-black mb-20">
        <div id="image-grid" class="grid grid-cols-4 gap-4">
            <img class="p-12 image w-full cursor-pointer"
                src="https://www.apple.com/v/iphone-15-pro/c/images/overview/closer-look/natural_titanium__ccl12n7vwwxe_large_2x.jpg"
                alt="">
            <img class="p-12 image w-full cursor-pointer"
                src="https://www.apple.com/v/iphone-15-pro/c/images/overview/closer-look/blue_titanium__wsqgpa9i1822_large_2x.jpg"
                alt="">
            <img class="p-12 image w-full cursor-pointer"
                src="https://www.apple.com/v/iphone-15-pro/c/images/overview/closer-look/white_titanium__b3fwwp6zrrhy_large_2x.jpg"
                alt="">
            <img class="p-12 image w-full cursor-pointer"
                src="https://www.apple.com/v/iphone-15-pro/c/images/overview/closer-look/black_titanium__e5htsz029002_large_2x.jpg"
                alt="">
        </div>
    </div>
    <div class="h-screen grid grid-cols-2 items-center justify-center px-20 py-10 mb-20">
        <div class="grid grid-cols-3 gap-x-4 gap-y-8">
            @foreach ($specialities as $item)
                <div class="flex flex-col items-center justify-center text-center">
                    <img class="h-24" src="{{ $item['image'] }}" alt="">
                    <p class="">{{ $item['description'] }}</p>
                </div>
            @endforeach
        </div>
        <div class="text-center">
            <p>Giá chỉ từ</p>
            <p class="text-4xl mb-10 font-bold">32,999,000đ</p>
            <button type="button"
                class="text-white bg-gray-800 hover:bg-gray-900 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700">Xem chi tiết</button>
        </div>
    </div>

    <script>
        document.querySelectorAll('.image').forEach((img, index, images) => {
            img.addEventListener('click', () => {
                if (img.classList.contains('expanded')) {
                    // If the image is expanded, reset the layout
                    images.forEach(image => {
                        image.classList.remove('hidden', 'col-span-4', 'expanded');
                    });
                    document.getElementById('image-grid').classList.remove('justify-center');
                } else {
                    // Otherwise, expand the clicked image
                    images.forEach(image => {
                        if (image !== img) {
                            image.classList.add('hidden');
                        }
                    });
                    img.classList.remove('hidden');
                    img.classList.add('col-span-4', 'expanded');
                    setTimeout(() => {
                        document.getElementById('image-grid').classList.add('justify-center');
                    }, 0); // Delay to ensure the CSS changes take effect
                }
            });
        });
    </script>
