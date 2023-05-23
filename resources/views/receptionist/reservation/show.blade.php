@extends('layouts.admin.index')

@section('container')
<main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
    <!-- Navbar -->
    <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="true">
        <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
            <nav>
                <!-- breadcrumb -->
                <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                    <li class="leading-normal text-sm">
                        <a class="opacity-50 text-slate-700" href="">Pages</a>
                    </li>
                    <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Reservation</li>
                </ol>
                <h6 class="mb-0 font-bold capitalize">Reservation</h6>
            </nav>
        </div>
    </nav>

    <!-- end Navbar -->

    <div class="w-full px-6 py-2 mx-auto">
        <!-- table 1 -->

        <div class="flex -mx-3">
            <div class="flex-none w-full max-w-full px-3">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <h6>Detail Reservation</h6>
                    </div>

                    <div class="flex-auto p-6">
                        <img src="{{ asset('storage/' . $reservation->bill->proof_of_payment) }}" alt="">

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
                            <span class="text-gray-600 font-medium">Check In :</span>
                            <span class="text-gray-800">{{ $reservation->check_in }}</span>
                        </div>
                        <div class="flex justify-between py-2">
                            <span class="text-gray-600 font-medium">Check Out :</span>
                            <span class="text-gray-800">{{ $reservation->check_out }}</span>
                        </div>

                        <div class="text-center">
                            <form action="{{ route('set-paid', $reservation->reservation_id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="inline-block w-full px-6 py-3 mt-6 mb-0 font-bold text-center text-black uppercase align-middle transition-all border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs ease-soft-in tracking-tight-soft bg-orange hover:scale-102 hover:shadow-soft-xs active:opacity-85">Set Status Payment To Paid</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</main>
@endsection

