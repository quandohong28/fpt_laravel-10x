@extends('layouts.client')


@section('title', 'Post title')

@section('main')
    <div class="mx-8 md:w-2/3 md:ms-20 lg:w-1/2 lg:ms-40">
        <a href="#" class="text-xs hover:underline">Technology</a>
        <h1 class="my-4 font-semibold text-4xl text-gray-700 leading-normal tracking-wide">Intel to cut 15% jobs, suspend
            dividend in turnaround push and shares plummet</h1>
        <div class="flex justify-between items-end mb-8">
            <div>
                <p class="text-sm mb-4">By <span class="font-medium">Do Hong Quan</span></p>
                <div class="text-xs uppercase">
                    NOVEMBER 1,2019
                </div>
            </div>
            <div class="flex gap-4">
                <button type="button"
                    class="text-green-700 border border-green-700 hover:bg-green-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-300 font-medium text-sm p-2.5 text-center inline-flex items-center me-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:focus:ring-green-800 dark:hover:bg-green-500">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 18 18">
                        <path
                            d="M3 7H1a1 1 0 0 0-1 1v8a2 2 0 0 0 4 0V8a1 1 0 0 0-1-1Zm12.954 0H12l1.558-4.5a1.778 1.778 0 0 0-3.331-1.06A24.859 24.859 0 0 1 6 6.8v9.586h.114C8.223 16.969 11.015 18 13.6 18c1.4 0 1.592-.526 1.88-1.317l2.354-7A2 2 0 0 0 15.954 7Z" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="mb-8">
            <img class="w-full mb-2"
                src="https://www.reuters.com/resizer/v2/PEFCDPZC6ZJZJNYQJVWLMKX77M.jpg?auth=1b28b3d326111907902da58076e0a7f1ad50a5a8017c8ad2aff4783a1fbe8848&width=1200&quality=80"
                alt="">
            <p class="text-xs italic font-light text-center">A man walks past the Intel logo at its booth during the first
                China International Supply Chain Expo (CISCE) in Beijing, China November 28, 2023. REUTERS/Florence Lo/File
                Photo</p>
        </div>
        <div class="font-light leading-loose tracking-wide mb-8">
            Intel's lagging position in the market for AI chips has sent its shares down more than 40% so far this year.
            For the third quarter, Intel expects revenue of $12.5 billion to $13.5 billion, compared with analysts' average
            estimate of $14.35 billion, LSEG data showed. It forecast adjusted gross margin of 38%, well short of market
            expectations of 45.7%.
            CUTTING CAPEX
            Analysts believe Intel's plan to turn around the foundry business will take years to materialize and expect TSMC
            to maintain its lead in the coming years, even as Intel has ramped up production of AI chips for personal
            computers.
            The PC chip business grew 9% in the April-June quarter.
            "The irony is that ... their first AI PC-focused processors are selling much better than expected. The problem
            is that the costs for those chips are much higher, meaning their profitability on them isn't great," said Bob
            O'Donnell, chief analyst at TECHnalysis Research.
            "In addition, the data center decline reinforces the fact that while companies are buying lots of infrastructure
            for AI, the vast majority is for non-Intel GPUs," he said, referring to graphic processing units like those sold
            by Nvidia.
            Intel's data center business declined 3% in the quarter.
            CFO David Zinsner said on a post-earnings call that the chipmaker expects weaker consumer and enterprise
            spending in the current quarter, especially in China.
            Export licenses that were revoked in May also hurt Intel's business in China in the second quarter, he said.
            Intel said in May its sales there would take a hit after Washington revoked some of the chipmaker's export
            licenses for a customer in China.
            Intel is also slashing investments.
            It expects to cut capital expenses by 17% in 2025 year-on-year to $21.5 billion, calculated on the midpoint of a
            range the chipmaker forecast. It expects these costs to stay roughly flat in 2024.

            The Technology Roundup newsletter brings the latest news and trends straight to your inbox. Sign up here.

            Reporting by Arsheeya Bajwa in Bengaluru; Additional reporting by Max Cherney and Noel Randewich in San
            Francisco and Juby Babu in Mexico City; Editing by Sayantani Ghosh and Christopher Cushing
        </div>

        <div>
            <p class="uppercase font-semibold mb-4">read more</p>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                @for ($i = 0; $i < 3; $i++)
                    <div class="bg-white shadow hover:shadow-lg">
                        <img class="w-full"
                            src="https://www.reuters.com/resizer/v2/OIU77WQNGRMXNBFXLWLF7FAWNQ.jpg?auth=cadf8d1bb7365d7c18aad16d64b42fe68dcdb0cf50cff62b43a4ee2bd33a1839&width=960&quality=80"
                            alt="">
                        <div class="p-2">
                            <p class="font-light text-xs">Cetegory name</p>
                            <h1 class="font-medium text-sm">Apple pins hopes on AI for iPhone upgrades as China sales falter
                            </h1>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection
