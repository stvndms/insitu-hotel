@extends('layouts.receptionist.index')

@section('container')

<main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
    <!-- Navbar -->
    <nav class="relative flex flex-row items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="true">
        <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
            <nav>
                <!-- breadcrumb -->
                <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                    <li class="leading-normal text-sm">
                        <a class="opacity-50 text-slate-700" href="">Pages</a>
                    </li>
                    <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Dashboard</li>
                </ol>
                <h6 class="mb-8 font-bold capitalize">Dashboard</h6>
                <a href="">
                    <button class="py-2 px-5 bg-orange hover:bg-opacity-80 transition duration-300 rounded-[10px] font-bold text-slate-800 hover:text-white text-sm hover:scale-102 hover:shadow-soft-xs active:opacity-85">
                        CREATE
                    </button>
                </a>
            </nav>

        </div>
    </nav>

</main>

@endsection
