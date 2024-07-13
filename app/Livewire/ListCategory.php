<?php

namespace App\Livewire;

use Livewire\Component;

class ListCategory extends Component
{
    const categories = [
        'iphone' => [
            'name' => 'iPhone',
            'image' => 'https://iconape.com/wp-content/files/qd/17570/svg/cib-apple-logo-icon-png-svg.png',
        ],
        'samsung' => [
            'name' => 'Samsung',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/24/Samsung_Logo.svg/2560px-Samsung_Logo.svg.png',
        ],
        'xiaomi' => [
            'name' => 'Xiaomi',
            'image' => 'https://www.freepnglogos.com/uploads/xiaomi-png/xiaomi-logo-logos-marcas-8.png',
        ],
        'oppo' => [
            'name' => 'Oppo',
            'image' => 'https://download.logo.wine/logo/Oppo/Oppo-Logo.wine.png',
        ],
        'vivo' => [
            'name' => 'Vivo',
            'image' => 'https://logos-world.net/wp-content/uploads/2023/03/Vivo-Logo-2009.png',
        ],
        'sony'=> [
            'name' => 'Sony',
            'image' => 'https://1000logos.net/wp-content/uploads/2021/05/Sony-logo.png',
        ],
        'htc'=> [
            'name' => 'HTC',
            'image' => 'https://1000logos.net/wp-content/uploads/2017/02/Colors-HTC-Logo.jpg',
        ],
        'nokia'=> [
            'name' => 'Nokia',
            'image' => 'https://www.nokia.com/sites/default/files/styles/scale_720_not_convert_webp/public/2023-02/nokia-refreshed-logo-2_1.png',
        ],
        'lg'=> [
            'name' => 'LG',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8d/LG_logo_%282014%29.svg/600px-LG_logo_%282014%29.svg.png',
        ],
        'huawei'=> [
            'name' => 'Huawei',
            'image' => 'https://cdn.iconscout.com/icon/free/png-256/free-huawei-3521494-2944938.png',
        ],
        'nubia'=> [
            'name' => 'Nubia',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/2/2d/Nubia-logo.png',
        ],
        'realme'=> [
            'name' => 'Realme',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/9/91/Realme_logo.png',
        ],
        'oneplus'=> [
            'name' => 'OnePlus',
            'image' => 'https://cdn-icons-png.flaticon.com/512/882/882743.png',
        ],
        'asus'=> [
            'name' => 'Asus',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/d/de/AsusTek-black-logo.png',
        ],
        'google'=> [
            'name' => 'Google',
            'image' => 'https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png',
        ],
        'redmi'=> [
            'name' => 'Redmi',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Redmi_Logo.svg/2560px-Redmi_Logo.svg.png',
        ],
        'lenovo'=> [
            'name' => 'Lenovo',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/0/03/Lenovo_Global_Corporate_Logo.png',
        ],
    ];

    public function render()
    {
        return view('livewire.list-category', [
            'categories' => self::categories,
        ]);
    }
}
