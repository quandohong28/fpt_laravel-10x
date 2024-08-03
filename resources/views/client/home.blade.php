@extends('layouts.client')


@section('title', 'Home')

@section('main')
    <div class="my-8 min-h-screen grid sm:grid-cols-1 lg:grid-cols-2 mx-8 md:mx-20">
        <div class="w-full md:px-4 lg:px-6 py-5">
            <div class="bg-white shadow-lg hover:shadow-2xl">
                <a href="#">
                    <img src="https://www.reuters.com/resizer/v2/WT24UG7UAVMLDJ4T5PSBYVOBJE.jpg?auth=8659ce4beff9aae7254b00dd2f8f988b8063db87b09cd9d92c579e3dafe1005a&width=1200&quality=80"
                        alt="" class="h-84 w-full object-cover">
                    <div class="p-4">
                        <h1 class="font-medium text-lg">
                            Apple pins hopes on AI for iPhone upgrades as China sales falter
                        </h1>
                        <p class="py-4 text-sm">
                            Aug 1 (Reuters) - Apple (AAPL.O), opens new tab said its third-quarter iPhone sales were better
                            than expected and forecast more gains on Thursday as it bets on artificial intelligence to
                            attract buyers, even as its overall China business disappointed.
                        </p>
                        <div class="flex flex-wrap pt-8">
                            <div class="text-xs">
                                NOVEMBER 1,2019
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="w-full md:px-4 lg:px-6 py-5">
            <div class="bg-white shadow-lg hover:shadow-2xl flex gap-4">
                <img class="h-28 object-cover"
                    src="https://www.reuters.com/resizer/v2/PEFCDPZC6ZJZJNYQJVWLMKX77M.jpg?auth=1b28b3d326111907902da58076e0a7f1ad50a5a8017c8ad2aff4783a1fbe8848&width=1200&quality=80">
                <div>
                    <h1 class="font-medium">
                        Intel to cut 15% jobs, suspend dividend in turnaround push and shares
                        plummet
                    </h1>
                    <div class="flex flex-wrap pt-5 sm:pt-8 lg:pt-10">
                        <div class="text-xs">
                            NOVEMBER 1,2019
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
