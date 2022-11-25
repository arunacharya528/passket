@php
    $eventCollection = [
        (object) [
            'title' => 'Some title',
            'description' => 'Some description',
            'from' => '2022-2-2',
            'to' => '2022-2-2',
            'location' => 'Some location',
        ],
        (object) [
            'title' => 'Some title',
            'description' => 'Some description',
            'from' => '2022-2-2',
            'to' => '2022-2-2',
            'location' => 'Some location',
        ],
        (object) [
            'title' => 'Some title',
            'description' => 'Some description',
            'from' => '2022-2-2',
            'to' => '2022-2-2',
            'location' => 'Some location',
        ],
        (object) [
            'title' => 'Some title',
            'description' => 'Some description',
            'from' => '2022-2-2',
            'to' => '2022-2-2',
            'location' => 'Some location',
        ],
    ];

    $partners = [
        [
            'title' => 'Acknowledged By',
            'images' => [asset('assets/partners/MoCIT.png'), asset('assets/partners/NITC.png'), asset('assets/partners/DOIT.png'), asset('assets/partners/NTA.png'), asset('assets/partners/NAST.png'), asset('assets/partners/fncci.png')],
        ],
        [
            'title' => 'Title Sponsor',
            'images' => [asset('assets/partners/info-logo-1024x338.png')],
        ],
        [
            'title' => 'In Association with',
            'images' => [asset('assets/partners/Nepal_Telecom.jpg'), asset('assets/partners/genese-logo.png')],
        ],
        [
            'title' => 'Powered by',
            'images' => [asset('assets/partners/Huawei-logo.png'), asset('assets/partners/sct-smartQR.png')],
        ],
        [
            'title' => 'E-commerce Partner',
            'images' => [asset('assets/partners/Daraz_Logo-1024x455.png')],
        ],
        [
            'title' => 'Category Sponsor',
            'images' => [asset('assets/partners/ncell.jpg')],
        ],
        [
            'title' => 'Payment partner',
            'images' => [asset('assets/partners/IME-Pay.png')],
        ],
        [
            'title' => 'Internet partner',
            'images' => [asset('assets/partners/DishHome.png')],
        ],
        [
            'title' => 'Knowledge Partner',
            'images' => [asset('assets/partners/Presidential-Business-school.png')],
        ],
        [
            'title' => 'Supporting partner',
            'images' => [asset('assets/partners/microsoft.png')],
        ],
        [
            'title' => 'Insurance Partner',
            'images' => [asset('assets/partners/IGI.png')],
        ],
        [
            'title' => 'DataCenter and Cloud Partner',
            'images' => [asset('assets/partners/Silver-lining.jpg')],
        ],
        [
            'title' => 'IT Training Partner',
            'images' => [asset('assets/partners/broadway_infosys.png')],
        ],
        [
            'title' => 'Ed Tech Partner',
            'images' => [asset('assets/partners/veda.jpg')],
        ],
        [
            'title' => 'Incubation partner',
            'images' => [asset('assets/partners/kings-college.jpg')],
        ],
        [
            'title' => 'Gaming partner',
            'images' => [asset('assets/partners/yarsa-labs-logo-2048x585.png')],
        ],
        [
            'title' => 'Mobility partner',
            'images' => [asset('assets/partners/gyre.png')],
        ],
        [
            'title' => 'Supporting partner',
            'images' => [asset('assets/partners/fusemachines-logo-2048x328.png')],
        ],
        [
            'title' => 'Security Partner',
            'images' => [asset('assets/partners/eminence-ways.png')],
        ],
        [
            'title' => 'Broadcasting partner',
            'images' => [asset('assets/partners/kantipur.png')],
        ],
        [
            'title' => 'App Partner',
            'images' => [asset('assets/partners/hamro-patro.png')],
        ],
        [
            'title' => 'Technology partner',
            'images' => [asset('assets/partners/technorio.png')],
        ],
        [
            'title' => 'SMS partner',
            'images' => [asset('assets/partners/sparrow.jpg')],
        ],
        [
            'title' => 'Ecosystem Partner',
            'images' => [asset('assets/partners/IFN-Logo-Design-01.png'),asset("assets/partners/nehub.png")],
        ],
    ];
@endphp

<div class="text-3xl uppercase font-bold">
    <span class="bg-clip-text text-transparent bg-gradient-to-l from-pink-500 to-violet-500">
        Events
    </span>
</div>
<div class=" grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
    @foreach ($eventCollection as $event)
        <div class="w-full bg-base-200 rounded-box p-5 shadow-md">
            <h2 class="text-center font-bold text-2xl">{{ $event->title }}</h2>
            <div class="h-32 max-h-min">{{ $event->description }}</div>

            <div class="flex justify-between items-center">
                <div class="flex flex-col">
                    <span>From: {{ $event->from }} to {{ $event->to }}</span>
                    <span>{{ $event->location }}</span>
                </div>

                <button class="btn btn-ghost bg-gradient-to-t from-pink-500 to-violet-600 text-white btn-sm">
                    Read more
                </button>
            </div>
        </div>
    @endforeach
</div>

<div class="text-3xl font-bold">
    <span class="bg-clip-text text-transparent bg-gradient-to-l from-pink-500 to-violet-500">
        Partners and supporters
    </span>
</div>

<div class="flex flex-row flex-wrap justify-center items-center">
    @foreach ($partners as $partner)
        <div class="flex flex-col p-5">
            <div class="font-bold text-center text-xl">{{ $partner['title'] }}</div>
            <div class="flex flex-row space-x-3 bg-base-200 my-5 mx-3 p-5 rounded-lg shadow-lg  border-t-4 border-t-green-600 rounded-t-none">
                @foreach ($partner['images'] as $image)
                    <div class="w-32 min-w-max flex items-center justify-center">
                        <img src="{{ $image }}" class="h-20 w-auto" />
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>
