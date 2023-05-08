@extends('layouts.guest.index')

@section('main')

<!-- Main Start -->
<main>
    <div class="container mt-[100px] p-2 lg:flex lg:gap-[100px] lg:items-center lg:mt-[150px] lg:justify-center lg:mb-[91px]">
        <div class="grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($roomTypes as $roomType)
            <div class="bg-white rounded-lg p-2 mb-[40px] lg:mb-0 lg:p-3">
                <img src="assets/image/doublebeds.jpg" alt="">
                <div class="mt-2 flex justify-between">
                    <span class="text-orange font-medium mr-[45px] lg:text-xl">{{ $roomType->room_type }}</span>
                    {{-- <div class="flex items-center gap-2">
                        <svg class="fill-orange w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                        <span class="text-orange text-sm">4.7</span>
                        <span class="text-slate-500 text-[10px] lg:text-xm">(1.254 review)</span>
                    </div> --}}
                </div>
                <div>
                    <div class="flex gap-2 mt-1">
                        @if ($roomType->rooms->where('room_status', 'ready')->count() < 1)
                            <svg class="fill-red w-3 lg:w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 175c-9.4 9.4-9.4 24.6 0 33.9l47 47-47 47c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l47-47 47 47c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-47-47 47-47c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-47 47-47-47c-9.4-9.4-24.6-9.4-33.9 0z"/></svg>
                            <span class="text-xs text-red lg:text-sm">Room not Available</span>
                        @else
                            <svg class="fill-green w-3 lg:w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M243.8 339.8C232.9 350.7 215.1 350.7 204.2 339.8L140.2 275.8C129.3 264.9 129.3 247.1 140.2 236.2C151.1 225.3 168.9 225.3 179.8 236.2L224 280.4L332.2 172.2C343.1 161.3 360.9 161.3 371.8 172.2C382.7 183.1 382.7 200.9 371.8 211.8L243.8 339.8zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"/></svg>
                            <span class="text-xs text-green lg:text-sm">Available : </span>
                            <span class="text-xs text-green lg:text-sm">{{ $roomType->rooms->where('room_status', 'ready')->count() }}</span>
                        @endif

                    </div>
                    <div class="flex mt-10">
                        <svg class="w-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z"/></svg>
                        <span class="font-medium ">2 Adults</span>
                    </div>
                    <div class="flex mt-2">
                        <svg class="w-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M416 0C400 0 288 32 288 176V288c0 35.3 28.7 64 64 64h32V480c0 17.7 14.3 32 32 32s32-14.3 32-32V352 240 32c0-17.7-14.3-32-32-32zM64 16C64 7.8 57.9 1 49.7 .1S34.2 4.6 32.4 12.5L2.1 148.8C.7 155.1 0 161.5 0 167.9c0 45.9 35.1 83.6 80 87.7V480c0 17.7 14.3 32 32 32s32-14.3 32-32V255.6c44.9-4.1 80-41.8 80-87.7c0-6.4-.7-12.8-2.1-19.1L191.6 12.5c-1.8-8-9.3-13.3-17.4-12.4S160 7.8 160 16V150.2c0 5.4-4.4 9.8-9.8 9.8c-5.1 0-9.3-3.9-9.8-9L127.9 14.6C127.2 6.3 120.3 0 112 0s-15.2 6.3-15.9 14.6L83.7 151c-.5 5.1-4.7 9-9.8 9c-5.4 0-9.8-4.4-9.8-9.8V16zm48.3 152l-.3 0-.3 0 .3-.7 .3 .7z"/></svg>
                        <span class="font-medium ">Breakfast</span>
                    </div>
                    <div class="mt-5 flex justify-between">
                        <span class="bg-[#4CAF50] bg-opacity-40 p-3 text-[#4CAF50] rounded-full mr-[80px] lg:font-semibold">Rp. {{ $roomType->price }}K / Night</span>

                        @if ($roomType->rooms->where('room_status', 'ready')->count() >= 1)
                            <a href="/book?roomType={{ $roomType->id }}" class="w-[140px] h-[50px] border-2 border-orange rounded-[10px] flex items-center justify-center gap-2 text-orange font-medium text-sm hover:bg-orange hover:text-white group">
                                <span class="text-lg">Book Now</span>
                                <svg class="w-4 fill-orange group-hover:fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</main>
<!-- Main End -->

@endsection
