@extends('layouts.guest.index')

@section('main')

<!-- Main Start -->
<main class="bg-body">
    <div class="container mt-[139px] mb-[70px] lg:px-16">
        <div class="bg-white p-3 rounded-md">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 grid-rows-4 md:grid-rows-2 lg:grid-rows-2 gap-4">
                {{-- <div class="w-full h-[297] lg:h-[280px] overflow-hidden rounded-md">
                  <img class="h-full w-full object-cover" src="assets/image/doublebed.jpg" alt="">
                </div> --}}

                <div class="bg-gray1 rounded-md p-2 md:col-span-2 lg:col-span-2 text-sm lg:h-[300px]">
                  <div class="flex flex-col">
                    <div class="flex flex-col">
                    <div class="flex justify-between py-2">
                        <span class="text-gray-600 font-medium">Reservation ID</span>
                        <span class="text-gray-800">{{ $reservation->reservation_id }}</span>
                    </div>
                    <div class="flex justify-between py-2">
                        <span class="text-gray-600 font-medium">Guest Name :</span>
                        <span class="text-gray-800">{{ $reservation->guest->guest_name }}</span>
                    </div>
                    <div class="flex justify-between py-2">
                        <span class="text-gray-600 font-medium">Room :</span>
                        <span class="text-gray-800">{{ $reservation->room->room_number }}</span>
                    </div>
                    <div class="flex justify-between py-2">
                        <span class="text-gray-600 font-medium">Room Status :</span>
                        @switch($reservation->status)
                            @case('reserved')
                                <span class="text-orange">Reserved</span>
                                @break
                            @case('check_in')
                                <span>Check In</span>
                                @break
                            @case('check_out')
                                <span>Check Out</span>
                                @break
                            @default
                        @endswitch
                    </div>
                    <div class="flex justify-between py-2">
                        <span class="text-gray-600 font-medium">Payment Status :</span>
                        @switch($reservation->bill->status)
                            @case('unpaid')
                                <span class="text-red">Unpaid</span>
                                @break
                            @case('process')
                                <span class="text-orange">Process</span>
                                @break
                            @case('paid')
                                <span class="text-green">Paid</span>
                                @break
                            @default
                        @endswitch
                    </div>
                    <div class="flex justify-between py-2">
                        <span class="text-gray-600 font-medium">Booking Date :</span>
                        <span class="text-gray-800">{{ $reservation->created_at }}</span>
                    </div>
                    <div class="flex justify-between py-2">
                        <span class="text-gray-600 font-medium">Start Date :</span>
                        <span class="text-gray-800">{{ $reservation->reservation_start_date }}</span>
                    </div>
                    <div class="flex justify-between py-2">
                        <span class="text-gray-600 font-medium">End Date :</span>
                        <span class="text-gray-800">{{ $reservation->reservation_end_date }}</span>
                    </div>
                    </div>
                  </div>
                </div>

                <div class="bg-gray1 rounded-md p-2 h-[149px] lg:h-[170px] lg:w-[830px]">
                    <div class="flex justify-between items-center mb-4 m">
                        <span class="text-orange font-medium mr-[45px] text-sm lg:text-xl">{{ $reservation->room->roomType->room_type }}</span>
                        {{-- <div class="flex items-center gap-2">
                            <svg class="fill-orange w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                            <span class="text-orange text-sm">4.7</span>
                            <span class="text-slate-500 text-[10px] lg:text-sm">(1.254 review)</span>
                        </div> --}}
                      </div>
                      <div class="flex flex-col">
                        <div class="flex justify-between py-2 text-sm">
                          <span class="text-gray-600 font-medium">Guests:</span>
                          <span class="text-gray-800">2 adults</span>
                        </div>
                        <div class="flex justify-between py-2 text-sm">
                          <span class="text-gray-600 font-medium">Breakfast:</span>
                          <span class="text-gray-800">Included</span>
                        </div>
                        <div class="flex justify-between py-2 text-sm">
                          <span class="text-gray-600 font-medium">Price:</span>
                          <span class="text-gray-800">Rp. {{ $reservation->bill->total_charge }}K/Night</span>
                        </div>
                      </div>
                </div>

            <form action="{{ route('payment-store', $reservation->bill->invoice_no) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class=" rounded-md p-2 flex items-center justify-center mt-[-120px] h-[293px] lg:mt-0 lg:w-[300px] lg:ml-[275px] lg:p-0">
                    <label for="dropzone-file" class="mx-auto cursor-pointer flex w-full max-w-lg flex-col items-center rounded-xl border-2 border-dashed  bg-white p-6 text-center lg:h-[170px] lg:mt-[-122px]">
                        <div class="">
                            <div class="flex items-center justify-center">
                                <svg class="w-10 lg:w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M246.6 9.4c-12.5-12.5-32.8-12.5-45.3 0l-128 128c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 109.3V320c0 17.7 14.3 32 32 32s32-14.3 32-32V109.3l73.4 73.4c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-128-128zM64 352c0-17.7-14.3-32-32-32s-32 14.3-32 32v64c0 53 43 96 96 96H352c53 0 96-43 96-96V352c0-17.7-14.3-32-32-32s-32 14.3-32 32v64c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V352z"/></svg>
                            </div>
                            <h2 class="mt-4 text-xl font-medium text-gray-700 tracking-wide lg:text-base">Payment Proof</h2>
                            <p class="mt-2 text-gray-500 tracking-wide lg:text-sm">Upload your Payment Proof file<br> SVG, PNG, JPG or GIF. </p>
                            <input id="dropzone-file" type="file" class="hidden" name="proof_of_payment"/>
                        </div>
                    </label>
                </div>

            </div>

            @if ($reservation->bill->status == 'unpaid')
                <div class="w-full border-2 border-orange rounded-md flex items-center justify-center py-3 mt-[-80px] hover:text-white hover:bg-orange text-orange">
                    <button type="submit">Upload Payment Proof</button>
                </div>
            @endif

            </form>
        </div>
    </div>
</main>
<!-- Main End -->

@endsection
