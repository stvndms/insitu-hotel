@extends('layouts.guest.index')

@section('main')

    <!-- Main Start -->
    <main>
        <div class="container lg:px-96">
            <div class="bg-white mt-[90px] mb-[109px] lg:mt-[170px] md:mt-[150px]">
                <div class="flex items-center justify-center p-12">
                    <div class="mx-auto w-full max-w-[550px]">
                    <form action="{{ route('storeBook') }}" method="POST">
                        @csrf
                        <input type="hidden" name="guest_id" value="{{ auth()->user()->guest->id }}">
                        <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5 lg:mb-10">
                            <label
                                for="room"
                                class="mb-3 block text-base font-medium text-dark">
                                Room
                            </label>
                            <select id="fruit" name="room_type_id" class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-orange focus:shadow-md">
                                <option selected disabled>-- Select Room --</option>
                                @foreach ($roomTypes as $roomType)
                                    @foreach ($roomType->rooms->where('room_status', 'ready')->unique('room_type_id') as $room)
                                        @if ($room_type_id == $room->roomType->id)
                                            <option selected value="{{ $room->roomType->id }}">{{ $room->roomType->room_type .  $room->roomType->id}} </option>
                                        @else
                                            <option value="{{ $room->roomType->id }}">{{ $room->roomType->room_type .  $room->roomType->id}} </option>
                                        @endif
                                    @endforeach
                                @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5 lg:mb-10">
                            <label
                                for="bookingtime"
                                class="mb-3 block text-base font-medium text-dark">
                                Facility
                            </label>
                            <select id="fruit" name="fruit" class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-orange focus:shadow-md">
                                <option selected disabled>-- Select Facility --</option>
                                @foreach ($facilities as $facility)
                                    <option value="{{ $facility->id }}">{{ $facility->facility_name }}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                        </div>

                            <div class="mb-5 lg:mb-10">
                                <label
                                    for="guest"
                                    class="mb-3 block text-base font-medium text-dark">
                                    Start Date
                                </label>
                                <input
                                    type="datetime-local"
                                    name="reservation_start_date"
                                    id="checkin"
                                    class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-orange focus:shadow-md"
                                />
                            </div>

                        <div class="mb-10">
                            <label
                                for="guest"
                                class="mb-3 block text-base font-medium text-dark">
                                End Date
                            </label>
                            <input
                                type="datetime-local"
                                name="reservation_end_date"
                                id="checkout"
                                class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-orange focus:shadow-md"
                            />
                        </div>

                        <button
                            class="w-full border text-orange border-orange hover:shadow-form rounded-md hover:bg-orange py-3 px-8 text-center text-base font-semibold hover:text-white outline-none"
                        >
                            Submit
                        </button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Main End -->

@endsection
