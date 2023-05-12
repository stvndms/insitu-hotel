@extends('layouts.guest.index')

@section('main')

<main>
    <div class="container px-2 lg:px-[60px] pt-[130px]">
        <div class="carousel w-full">

            @foreach ($facilities as $facility)
            <div id="{{ $loop->iteration }}" class="carousel-item relative w-full flex mb-24">
                <div class="mx-auto self-center">
                    <img src="assets/image/hero.jpg" class="rounded-lg w-[300px] h-[400px]" />
                    <div class="w-full bg-dark bg-opacity-80 h-10 relative -mt-10 rounded-b-lg text-center">
                        <span class="text-white">{{ $facility->facility_name }}</span>
                    </div>
                </div>
                <div class="absolute flex justify-between transform -translate-y-1/2 w-full top-1/2">
                    @if ($loop->first)
                        <a href="#{{ $loop->count }}" class="text-orange hover:opacity-75">❮</a>
                    @elseif ($loop->last)
                        <a href="#1" class="text-orange hover:opacity-75">❮</a>
                    @endif
                    <a href="#{{ $loop->iteration-1 }}" class="text-orange hover:opacity-75">❮</a>
                    <a href="#{{ $loop->iteration+1 }}" class="text-orange hover:opacity-75">❯</a>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</main>

@endsection
