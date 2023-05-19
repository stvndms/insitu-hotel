@extends('layouts.guest.index')

@section('main')

<!-- Main Start -->
<main>
    <div class="container mx-auto px-4 md:mb-[122px] lg:px-[100px] py-8 mt-[80px] lg:mt-[100px] lg:mb-[347px]">
        <ul>
          @foreach ($reservations as $reservation)
            <a href="{{ route('my-booking.detail', $reservation->reservation_id) }}">
                <li class="bg-white rounded-lg shadow-md p-4 mb-4">
                    <div class="flex justify-between items-center mb-5">
                    <h2 class="text-xl font-bold">Reservation : {{ $reservation->reservation_id }}</h2>
                    <span class="text-gray-500 text-sm">{{ $reservation->created_at }}</span>
                    </div>
                    <div class="flex flex-col sm:flex-row justify-between">
                    <div class="flex flex-col mb-4 sm:mb-0">
                        <span class="text-gray-500 text-sm mb-1">Room Type</span>
                        <span class="text-lg font-semibold">{{ $reservation->room->roomType->room_type }} | {{ $reservation->room->room_number }}</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-gray-500 text-sm mb-1">Check-in Date</span>
                        <span class="text-lg font-semibold">{{ $reservation->reservation_start_date }}</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-gray-500 text-sm mb-1">Check-out Date</span>
                        <span class="text-lg font-semibold">{{ $reservation->reservation_end_date }}</span>
                    </div>
                    </div>
                </li>
            </a>
          @endforeach
        </ul>
    </div>
</main>
<!-- Main End -->

@endsection
