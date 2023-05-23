@extends('layouts.guest.index')

@section('main')

    <!-- Main Start -->
    <main>
        <div class="container mt-[139px] mb-[70px] lg:px-16">
            <div class="bg-white p-3 rounded-md">
                <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 grid-rows-4 md:grid-rows-1 lg:grid-rows-1 gap-4">
                    <div class="w-full h-[297] lg:h-[280px] overflow-hidden rounded-md">
                      <img class="h-full w-full object-cover" src="{{ asset('storage/' . $reservation->room->roomType->image) }}" alt="">
                    </div>

                    <div class="bg-gray1 rounded-md p-2 md:col-span-2 lg:col-span-1 text-sm lg:h-[280px]">
                      <div class="flex flex-col">
                        <div class="flex flex-col">
                        <div class="flex justify-between py-2">
                            <span class="text-gray-600 font-medium">ID Booking :</span>
                            <span class="text-gray-800">{{ $reservation->reservation_id }}</span>
                        </div>
                        <div class="flex justify-between py-2">
                            <span class="text-gray-600 font-medium">Guest Name :</span>
                            <span class="text-gray-800">{{ $reservation->guest->guest_name }}</span>
                        </div>
                        <div class="flex justify-between py-2">
                            <span class="text-gray-600 font-medium">Room :</span>
                            <span class="text-gray-800">{{ $reservation->room->roomType->room_type }}</span>
                        </div>
                        <div class="flex justify-between py-2">
                            <span class="text-gray-600 font-medium">Status :</span>
                            <span class="text-red">{{ $reservation->status }}</span>
                        </div>
                        <div class="flex justify-between py-2">
                            <span class="text-gray-600 font-medium">Booking Date :</span>
                            <span class="text-gray-800">{{ $reservation->created_at }}</span>
                        </div>
                        <div class="flex justify-between py-2">
                            <span class="text-gray-600 font-medium">Check In :</span>
                            <span class="text-gray-800">{{ $reservation->check_in }}</span>
                        </div>
                        <div class="flex justify-between py-2">
                            <span class="text-gray-600 font-medium">Check Out :</span>
                            <span class="text-gray-800">{{ $reservation->check_out }}</span>
                        </div>
                        </div>
                      </div>
                    </div>

                    <div class="bg-gray1 rounded-md p-2 h-[149px] lg:h-[170px] lg:w-[830px]">
                        <div class="flex justify-between items-center mb-4 m">
                            <span class="text-orange font-medium mr-[45px] text-sm lg:text-xl">{{ $reservation->room->roomType->room_type }}</span>
                            <div class="flex items-center gap-2">
                                <svg class="fill-orange w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                <span class="text-orange text-sm">4.7</span>
                                <span class="text-slate-500 text-[10px] lg:text-sm">(1.254 review)</span>
                            </div>
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
                              <span class="text-gray-800">Rp. {{ $reservation->bill->total_charge }}k/Night</span>
                            </div>
                          </div>
                    </div>

                    <a href="{{ route('payment', $reservation->reservation_id) }}">To Payment Page</a>
                </div>
            </div>
        </div>
    </main>
    <!-- Main End -->

@endsection
