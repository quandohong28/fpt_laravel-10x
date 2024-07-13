<?php

namespace App\Livewire;

use Livewire\Component;

class HomeBanner extends Component
{

    public $specialities = [
        [
            'image' => 'https://blisk.io/img/devicesInBlisk/preview/phones/iphone-15-pro-max.png',
            'description' => 'OLED 6.1 inch Super Retina XDR'
        ],
        [
            'image' => 'https://cdn-v2.didongviet.vn/files/products/2023/8/13/1/1694546061910_4_iphone_15_pro_xam_didongviet.jpg',
            'description' => '48MP Primary Camera'
        ],
        [
            'image' => 'https://images.macrumors.com/t/48WbK9gFdva6iGrlk2J3We7KYOs=/1200x1200/smart/article-new/2023/06/A17-Feature-Dark.jpg',
            'description' => 'A15 Bionic chip'
        ],
        [
            'image' => 'https://img.pikbest.com/origin/09/22/74/53RpIkbEsTAYx.png!sw800',
            'description' => 'Up to 22 hours of video playback'
        ],
        [
            'image' => 'https://blisk.io/img/devicesInBlisk/preview/phones/iphone-15-pro-max.png',
            'description' => 'Ceramic Shield front cover'
        ],
        [
            'image' => 'https://www.svgrepo.com/show/325991/network-5g.svg',
            'description' => '5G capable'
        ],
    ];
    
    public function render()
    {
        return view('livewire.home-banner', [
            'specialities' => $this->specialities
        ]);
    }
}
