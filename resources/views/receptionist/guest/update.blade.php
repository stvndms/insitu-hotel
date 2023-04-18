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
                    <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Guest</li>
                </ol>
                <h6 class="mb-0 font-bold capitalize">Guest</h6>
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
                        <h6>Update</h6>
                    </div>

                    <div class="flex-auto p-6">
                        <form role="form" action="{{ route('guest.update', $guest->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <label class="mb-6 ml-1 font-bold text-xs text-slate-700">Forget Password</label>
                            <input type="checkbox" class="border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-orange focus:transition-shadow"/>

                            <label class="block mb-2 ml-1 font-bold text-xs text-slate-700">Name</label>
                            <div class="mb-4">
                                <input type="text" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-orange focus:transition-shadow @error('guest_name') border-red-300 @enderror" placeholder="Name" name="guest_name" value="{{ old('guest_name', $guest->guest_name) }}"/>
                                @error('guest_name')
                                    <span class="ml-1 text-xs text-red-600">{{ $message }}</span>
                                @enderror
                            </div>

                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Email</label>
                            <div class="mb-4">
                                <input type="email" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-orange focus:transition-shadow @error('email') border-red-300 @enderror" placeholder="Email" name="email" value="{{ old('email', $guest->user->email) }}"/>
                                @error('email')
                                    <span class="ml-1 text-xs text-red-600">{{ $message }}</span>
                                @enderror
                            </div>

                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Phone Number</label>
                            <div class="mb-4">
                                <input type="text" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-orange focus:transition-shadow @error('guest_phone') border-red-300 @enderror" placeholder="Phone Number" name="guest_phone" value="{{ old('guest_phone', $guest->guest_phone) }}"/>
                                @error('guest_phone')
                                    <span class="ml-1 text-xs text-red-600">{{ $message }}</span>
                                @enderror
                            </div>

                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Country</label>
                            <div class="mb-4">
                                <select class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-orange focus:transition-shadow> @error('guest_country') border-red-300 @enderror" name="guest_country">
                                    @foreach ($countries as $country)
                                        @if (old('guest_country', $guest->guest_country) == $country->name)
                                            <option value="{{ $country->name }}" selected>{{ $country->name }}</option>
                                        @else
                                            <option value="{{ $country->name }}">{{ $country->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('guest_country')
                                    <span class="ml-1 text-xs text-red-600">{{ $message }}</span>
                                @enderror
                            </div>

                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Address</label>
                            <div class="mb-4">
                                <textarea class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-orange focus:transition-shadow @error('guest_address') border-red-300 @enderror" name="guest_address" id="" rows="5">{{ old('guest_address', $guest->guest_address) }}</textarea>
                                @error('guest_address')
                                    <span class="ml-1 text-xs text-red-600">{{ $message }}</span>
                                @enderror
                            </div>

                            <img src="{{ asset('storage/' . $guest->guest_photo) }}" class="guest-photo w-60">
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Guest Photo</label>
                            <div class="mb-4">
                                <input type="file" class="guest-photo text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-orange focus:transition-shadow @error('guest_photo') border-red-300 @enderror" name="guest_photo" id="guest_photo" onchange="guestPhoto()" />
                                @error('guest_photo')
                                    <span class="ml-1 text-xs text-red-600">{{ $message }}</span>
                                @enderror
                            </div>

                            <img src="{{ asset('storage/' . $guest->guest_id_card) }}" class="guest-id-card w-60">
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Guest ID Card</label>
                            <div class="mb-4">
                                <input type="file" class="guest-id-card text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-orange focus:transition-shadow @error('guest_id_card') border-red-300 @enderror" name="guest_id_card" id="guest_id_card" onchange="guestIdCard()" />
                                @error('guest_id_card')
                                    <span class="ml-1 text-xs text-red-600">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="text-center">
                                <button type="submit" class="inline-block w-full px-6 py-3 mt-6 mb-0 font-bold text-center text-black uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs ease-soft-in tracking-tight-soft bg-sky-600 hover:scale-102 hover:shadow-soft-xs active:opacity-85">Update</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <script>
        function guestPhoto() {
            const guestPhoto = document.querySelector('#guest_photo');
            const guestPhotoImage = document.querySelector('.guest-photo');
            guestPhotoImage.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(guestPhoto.files[0]);

            oFReader.onload = function(oFREvent) {
                guestPhotoImage.src = oFREvent.target.result;
            }
        }

        function guestIdCard() {
            const guestIdCard = document.querySelector('#guest_id_card');
            const guestIdCardImage = document.querySelector('.guest-id-card');
            guestIdCardImage.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(guestIdCard.files[0]);

            oFReader.onload = function(oFREvent) {
                guestIdCardImage.src = oFREvent.target.result;
            }
        }
    </script>
</main>
@endsection
