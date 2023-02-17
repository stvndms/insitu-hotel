<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Wikrama</title>
    @vite('resources/css/app.css')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>

<body class="font-poppins">
    <!-- Navbar Start -->
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10 shadow-lg">
        <div class="container px-2 lg:px-[60px]">
            <div class="flex items-center justify-between relative lg:w-full">
                <div class="py-4 lg:pl-8">
                    <a href="#home"><img src="assets/image/logo.png" alt="" class="w-24"></a>
                </div>
                <div class="flex items-center px-4 lg:px-0">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-1 lg:hidden">
                        <span class="hamburger_line bg-black transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamburger_line bg-black transition duration-300 ease-in-out"></span>
                        <span class="hamburger_line bg-black transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>

                    <nav id="nav-menu" class="hidden absolute py-5 bg-white backdrop-blur-sm lg:backdrop-blur-none shadow-lg rounded-[10px] max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none lg:pr-8 font-semibold">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="" class="text-base font- py-2 mx-8 flex text-orange border-b-2 border-orange">Home</a>
                            </li>
                            <li class="group">
                                <a href="/room" class="text-base font-medium text-dark py-2 mx-8 flex group-hover:text-orange">Room</a>
                            </li>
                            <li class="group">
                                <a href="" class="text-base font-medium text-dark py-2 mx-8 flex group-hover:text-orange">Facility</a>
                            </li>
                            <li class="group">
                                <a href="" class="text-base font-medium text-dark py-2 mx-8 flex group-hover:text-orange">My Booking</a>
                            </li>
                            <li class=" mt-3 lg:mt-0">
                                <button class="w-[130px] h-[30px] lg:h-[40px] border-2 border-orange rounded-[5px] lg:rounded-[10px] mx-8 py-2 lg:mx-0 flex items-center justify-center gap-2 text-orange font-medium text-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-orange w-4" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path d="M399 384.2C376.9 345.8 335.4 320 288 320H224c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM512 256c0 141.4-114.6 256-256 256S0 397.4 0 256S114.6 0 256 0S512 114.6 512 256zM256 272c39.8 0 72-32.2 72-72s-32.2-72-72-72s-72 32.2-72 72s32.2 72 72 72z" />
                                    </svg> Sign In
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-orange" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Navbar End -->

    <!-- Book Start -->
    <div class="container lg:px-[60px]">
        <div class="pt-[110px]">
            <div class="lg:px-[28px]">
                <img src="assets/image/landing.png" alt="" class=" z-20 h-[200px] lg:w-screen lg:h-[300px] bg-cover lg:rounded-lg">
                <div class="lg:px-[40px] px-1 relative">
                    <div class="bg-white w-full h-[80px] lg:h-[125px] rounded-[10px] shadow-lg z-40 lg:-mt-16 -mt-11 mb-12 grid grid-cols-4 mx-auto">
                        <div class="">
                            <div class="justify-center flex mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-orange w-2 mr-2 lg:w-4" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z"/></svg>
                                <h3 class="text-orange font-semibold text-[8px] lg:text-[16px]">Check In</h3>
                            </div>
                            <div class="flex self-item-center justify-center ">
                                <input class="text-[8px] mt-5 lg:text-[16px]" type="date">
                            </div>
                        </div>
                        <div class="">
                            <div class="justify-center flex mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-orange w-2 mr-2 lg:w-4" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                                <h3 class="text-orange font-semibold text-[8px] lg:text-[16px]">Guest & Room</h3>
                            </div>
                            <div class="flex self-item-center justify-center mt-[13px]">
                                <select class=" text-[8px] lg:text-[16px] lg:px-3 lg:w-[160px] leading-5.6 ease-soft block w-[100px] rounded-lg bg-white bg-clip-padding px-2 py-2 font-normal text-dark transition-all focus:transition-shadow">
                                    <option>1 guest 1 room</option>
                                    <option>1 guest 1 room</option>
                                    <option>1 guest 1 room</option>
                                    <option>1 guest 1 room</option>
                                </select>
                            </div>
                        </div>
                        <div class="">
                            <div class="justify-center flex mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-orange w-2 mr-2 lg:w-4" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z"/></svg>
                                <h3 class="text-orange font-semibold text-[8px] lg:text-[16px]">Check Out</h3>
                            </div>
                            <div class="flex self-item-center justify-center ">
                                <input class="text-[8px] mt-5 lg:text-[16px]" type="date">
                            </div>
                        </div>
                        <div class="flex justify-center items-center">
                                <button class="w-[80px] h-[30px] lg:h-[60px] lg:w-[160px] border-2 border-orange rounded-[5px] lg:rounded-[10px] py-2 lg:mx-0 flex items-center justify-center gap-2 text-orange font-medium text-[8px] lg:text-[12px]">
                                    Check Availability <svg xmlns="http://www.w3.org/2000/svg" class="fill-orange w-3 mr-1 lg:w-4" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                                </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Book End -->

    <!-- Hero Start -->
    <div class="container lg:px-[60px] px-[10px]">
    <div class="lg:flex">
        <div class="px-[28px] w-1/2">
            <img src="assets/image/landing2.png" alt="" class=" hidden lg:block rounded-[10px] h-[700px] w-[600px]">
        </div>
        <div class="lg:w-1/2 w-full text-center">
            <h1 class="text-2xl font-bold mb-2">We're more than just a room</h1>
            <h2 class="text-lg font-semibold mb-2">Are you dreaming of a place to stay? We are here!</h2>
            <p class="text-slate-500 text-xs">Imagine a place where you can be yourself</p>
            <div class="items-center justify-center">
                <div class="grid grid-cols-2 gap-4 mt-5">
                    <div class="mx-auto">
                        <div class="bg-[#F9B3BC] rounded-full w-[50px] h-[50px] flex items-center justify-center mx-auto mb-5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 fill-red" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M416 0C400 0 288 32 288 176V288c0 35.3 28.7 64 64 64h32V480c0 17.7 14.3 32 32 32s32-14.3 32-32V352 240 32c0-17.7-14.3-32-32-32zM64 16C64 7.8 57.9 1 49.7 .1S34.2 4.6 32.4 12.5L2.1 148.8C.7 155.1 0 161.5 0 167.9c0 45.9 35.1 83.6 80 87.7V480c0 17.7 14.3 32 32 32s32-14.3 32-32V255.6c44.9-4.1 80-41.8 80-87.7c0-6.4-.7-12.8-2.1-19.1L191.6 12.5c-1.8-8-9.3-13.3-17.4-12.4S160 7.8 160 16V150.2c0 5.4-4.4 9.8-9.8 9.8c-5.1 0-9.3-3.9-9.8-9L127.9 14.6C127.2 6.3 120.3 0 112 0s-15.2 6.3-15.9 14.6L83.7 151c-.5 5.1-4.7 9-9.8 9c-5.4 0-9.8-4.4-9.8-9.8V16zm48.3 152l-.3 0-.3 0 .3-.7 .3 .7z"/></svg>
                        </div>
                        <h3 class="font-semibold text-1xl justify-center flex mb-1">Makanan Enak</h3>
                        <h4 class="font-medium text-[10px] mx-auto text-gray-500">Makanan yang kami sediakan dibuat oleh anak TBG, sedap lah pokoknya</h4>
                    </div>
                    <div class="mx-auto">
                        <div class="bg-[#9DC0F5] rounded-full w-[50px] h-[50px] flex items-center justify-center mx-auto mb-5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 fill-blue" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M416 0C400 0 288 32 288 176V288c0 35.3 28.7 64 64 64h32V480c0 17.7 14.3 32 32 32s32-14.3 32-32V352 240 32c0-17.7-14.3-32-32-32zM64 16C64 7.8 57.9 1 49.7 .1S34.2 4.6 32.4 12.5L2.1 148.8C.7 155.1 0 161.5 0 167.9c0 45.9 35.1 83.6 80 87.7V480c0 17.7 14.3 32 32 32s32-14.3 32-32V255.6c44.9-4.1 80-41.8 80-87.7c0-6.4-.7-12.8-2.1-19.1L191.6 12.5c-1.8-8-9.3-13.3-17.4-12.4S160 7.8 160 16V150.2c0 5.4-4.4 9.8-9.8 9.8c-5.1 0-9.3-3.9-9.8-9L127.9 14.6C127.2 6.3 120.3 0 112 0s-15.2 6.3-15.9 14.6L83.7 151c-.5 5.1-4.7 9-9.8 9c-5.4 0-9.8-4.4-9.8-9.8V16zm48.3 152l-.3 0-.3 0 .3-.7 .3 .7z"/></svg>
                        </div>
                        <h3 class="font-semibold text-1xl justify-center flex mb-1">Pelayanan Cepat</h3>
                        <h4 class="font-medium text-[10px] mx-auto text-gray-500">Karyawan kami mempunyai kekuatan seperti flash agar bisa cepat melayani anda</h4>
                    </div>
                    <div class="mx-auto">
                        <div class="bg-[#F6D4BB] rounded-full w-[50px] h-[50px] flex items-center justify-center mx-auto mb-5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 fill-orange" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M240 0c4.6 0 9.2 1 13.4 2.9L441.7 82.8c22 9.3 38.4 31 38.3 57.2c-.5 99.2-41.3 280.7-213.7 363.2c-16.7 8-36.1 8-52.8 0C41.3 420.7 .5 239.2 0 140c-.1-26.2 16.3-47.9 38.3-57.2L226.7 2.9C230.8 1 235.4 0 240 0zm0 66.8V444.8C378 378 415.1 230.1 416 141.4L240 66.8l0 0z"/></svg>
                        </div>
                        <h3 class="font-semibold text-1xl justify-center flex mb-1">Keamanan Ketat</h3>
                        <h4 class="font-medium text-[10px] mx-auto text-gray-500">Karena ada GDS</h4>
                    </div>
                    <div class="mx-auto">
                        <div class="bg-[#B1F8E2] rounded-full w-[50px] h-[50px] flex items-center justify-center mx-auto mb-5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 fill-green" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 112.5V422.3c0 18 10.1 35 27 41.3c87 32.5 174 10.3 261-11.9c79.8-20.3 159.6-40.7 239.3-18.9c23 6.3 48.7-9.5 48.7-33.4V89.7c0-18-10.1-35-27-41.3C462 15.9 375 38.1 288 60.3C208.2 80.6 128.4 100.9 48.7 79.1C25.6 72.8 0 88.6 0 112.5zM288 352c-44.2 0-80-43-80-96s35.8-96 80-96s80 43 80 96s-35.8 96-80 96zM64 352c35.3 0 64 28.7 64 64H64V352zm64-208c0 35.3-28.7 64-64 64V144h64zM512 304v64H448c0-35.3 28.7-64 64-64zM448 96h64v64c-35.3 0-64-28.7-64-64z"/></svg>
                        </div>
                        <h3 class="font-semibold text-1xl justify-center flex mb-1">Harga Murah</h3>
                        <h4 class="font-medium text-[10px] mx-auto text-gray-500">Karena kamar yang kami sediakan sempit</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Hero End -->

    <script src="assets/js/script.js"></script>
</body>

</html>