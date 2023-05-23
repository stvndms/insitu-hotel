@extends('layouts.guest.index')

@section('main')

<!-- Main Start -->
<main>
    <!-- Profile Start -->
    <section id="profile">
        <div class="container lg:px-[250px] p-2">
            <div class="pt-[110px]">
                <div class="bg-white p-3 gap-3 rounded-lg items-center pt-5 mb-10 lg:h-[650px] lg:pt-10 lg:p-10">
                    <div class="grid grid-cols-3 items-center lg:px-[80px] lg:mt-8">
                            <div class="mx-auto">
                                @if ($guest->guest_photo == null)
                                    <img class="rounded-full w-[60px] lg:w-[100px]" src="{{ asset('storage/' . $guest->guest_photo) }}" alt="">
                                @else
                                    <img class="rounded-full w-[60px] lg:w-[100px]" src="{{ asset('assets/image/blank_profile.png') }}" alt="">
                                @endif
                            </div>
                            <div class="text-[10px] lg:text-lg text-center">
                                <span class="font-semibold">{{ $guest->guest_name }}</span>
                                <div><span class="text-slate-500 text-[8px] lg:text-[13px]">{{ $guest->user->email }}</span></div>
                            </div>
                            <div class="mx-auto">
                                <a href="{{ route('profile.edit', $guest->random_str) }}">
                                    <svg class="w-3 hover:fill-orange lg:w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/></svg>
                                </a>
                            </div>
                    </div>
                    <div class="flex items-center justify-center">
                        <hr class="w-[320px] border-t-2 mt-5 lg:w-[650px] lg:mt-[70px]">
                    </div>
                    <div class="grid grid-cols-2 justify-between p-3 text-xs font-medium text-dark gap-y-3 lg:p-11 lg:text-lg lg:gap-y-6">
                        <div class="text-left">
                            <span>Name :</span>
                        </div>
                        <div class="text-right font-light">
                            <span>{{ $guest->guest_name }}</span>
                        </div>
                        <div class="text-left">
                            <span>Email :</span>
                        </div>
                        <div class="text-right font-light">
                            <span>{{ $guest->user->email }}</span>
                        </div>
                        <div class="text-left">
                            <span>Phone Number :</span>
                        </div>
                        <div class="text-right font-light">
                            <span>{{ $guest->guest_phone }}</span>
                        </div>
                        {{-- <div class="text-left">
                            <span>ID Card Number :</span>
                        </div>
                        <div class="text-right font-light">
                            <span>12008126</span>
                        </div> --}}
                        <div class="text-left">
                            <span>Country :</span>
                        </div>
                        <div class="text-right font-light">
                            <span>{{ $guest->guest_country }}</span>
                        </div>
                        <div class="text-left">
                            <span>Address :</span>
                        </div>
                        <div class="text-right font-light">
                            <span>{{ $guest->guest_address }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Profile End -->
</main>
<!-- Main End -->

@endsection
