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
                        <a class="opacity-50 text-slate-700" href="javascript:;">Pages</a>
                    </li>
                    <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Facility</li>
                </ol>
                <h6 class="mb-0 font-bold capitalize">Facility</h6>
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
                        <h6>Edit</h6>
                    </div>


                    <div class="flex-auto p-6">
                        <form role="form" action="{{ route('room.update', $room->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Image</label>
                            <div class="mb-4">
                                <img class="img-preview w-60 mb-3" src="{{ asset('storage/' . $room->room_image) }}">
                                <input type="file" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-orange focus:transition-shadow" name="room_image" id="image" onchange="previewImage()" />
                            </div>
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Room Type</label>
                            <div class="mb-4">
                                <select class=" text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-orange focus:transition-shadow" name="room_type_id">
                                    @foreach ($roomTypes as $roomType)
                                        <option value="{{ $roomType->id }}">{{ $roomType->room_type }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Room Number</label>
                            <div class="mb-4">
                                <input type="number" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-orange focus:transition-shadow" placeholder="Room Number" name="room_number" value="{{ $room->room_number }}"/>
                            </div>
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Facility</label>
                            <div class="mb-4">
                                <select class=" text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-orange focus:transition-shadow" name="facility_id">
                                    @foreach ($facilities as $facility)
                                        @if (old('facility_id', $room->facility_id) == $facility->id)
                                            <option value="{{ $facility->id }}" selected>{{ $facility->facility_name }}</option>    
                                        @else
                                            <option value="{{ $facility->id }}">{{ $facility->facility_name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Price</label>
                            <div class="mb-4">
                                <input type="number" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-orange focus:transition-shadow" placeholder="Price" name="room_price" value="{{ $room->room_price }}"/>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="inline-block w-full px-6 py-3 mt-6 mb-0 font-bold text-center text-black uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs ease-soft-in tracking-tight-soft bg-orange hover:scale-102 hover:shadow-soft-xs active:opacity-85">Update</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>


</main>    
@endsection