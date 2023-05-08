@extends('layouts.guest.index')

@section('main')

<!-- Main Start -->
<main>
    <!-- Profile Start -->
    <section id="profile">
        <div class="container lg:px-[250px] p-2">
            <div class="pt-[110px]">
                <div class="bg-white p-3 gap-3 rounded-lg items-center pt-5 mb-10 lg:h-[1100px] lg:pt-10 lg:p-10">
                    <div class="grid grid-cols-3 items-center lg:px-[80px] lg:mt-8">
                            <div class="mx-auto">
                                @if ($guest->guest_photo)
                                    <img class="img-preview rounded-full w-[60px] lg:w-[100px]" src="{{ asset('storage/' . $guest->guest_photo) }}" alt="">
                                @else
                                    <img class="img-preview rounded-full w-[60px] lg:w-[100px]" src="{{ asset('assets/image/blank_profile.png') }}" alt="">
                                @endif
                            </div>
                            <div class="text-[10px] lg:text-lg text-center">
                                <span class="font-semibold" id="newName">{{ $guest->guest_name }}</span>
                                <div><span class="text-slate-500 text-[8px] lg:text-[13px]">{{ $guest->user->email }}</span></div>
                            </div>
                    </div>
                    <div class="flex items-center justify-center">
                        <hr class="w-[320px] border-t-2 mt-5 lg:w-[650px] lg:mt-[70px]">
                    </div>
                    <div class="grid p-3 text-xs font-medium text-dark gap-y-3 lg:p-11 lg:text-lg lg:gap-y-6">
                        <form role="form" action="{{ route('profile.update', $guest->random_str) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Profile Picture</label>
                            <div class="mb-4">
                                <input type="file" id="image" class="img-preview text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-orange focus:transition-shadow" onchange="previewImage()" placeholder="Room Number" name="guest_photo"/>
                            </div>

                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Name</label>
                            <div class="mb-4">
                                <input type="text" id="name" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-orange focus:transition-shadow" onchange="previewName()" placeholder="Name" name="guest_name" value="{{ $guest->guest_name }}"/>
                            </div>

                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Email</label>
                            <div class="mb-4">
                                <input type="email" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-orange focus:transition-shadow" placeholder="Email" name="email" value="{{ $guest->user->email }}"/>
                            </div>

                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Phone</label>
                            <div class="mb-4">
                                <input type="text" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-orange focus:transition-shadow" placeholder="+62 896" name="guest_phone" value="{{ $guest->guest_phone }}"/>
                            </div>

                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Country</label>
                            <div class="mb-4">
                                <select name="guest_country" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-orange focus:transition-shadow">
                                    @foreach ($countries as $country)
                                        @if ($guest->guest_country == $country->name)
                                            <option selected value="{{ $country->name }}">{{ $country->name }}</option>
                                        @else
                                            <option value="{{ $country->name }}">{{ $country->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Address</label>
                            <div class="mb-4">
                                <textarea name="guest_address" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-orange focus:transition-shadow resize-none" rows="10">{{ $guest->guest_address }}</textarea>
                            </div>

                            <div class="text-center">
                                <button class="inline-block w-full px-6 py-3 mt-6 mb-0 font-bold text-center text-white uppercase align-middle transition-all bg-orange border-1 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs ease-soft-in tracking-tight-soft hover:scale-102 hover:shadow-soft-xs active:opacity-85 hover:text-black" type="submit">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Profile End -->
</main>
<!-- Main End -->

<script>
    function previewImage() {

        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview')
        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }

    function previewName() {
        const name = document.getElementById('#name');
        document.getElementById('#newName') = name;
    }
</script>

@endsection
