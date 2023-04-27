<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Wikrama | My Booking</title>
    @vite('resources/css/app.css')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>

<body class="font-poppins bg-body">
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
                                <a href="/" class="text-base font-medium text-dark py-2 mx-8 flex group-hover:text-orange">Home</a>
                            </li>
                            <li class="group">
                                <a href="" class="text-base font-medium text-dark py-2 mx-8 flex group-hover:text-orange">Room</a>
                            </li>
                            <li class="group">
                                <a href="" class="text-base font-medium text-dark py-2 mx-8 flex group-hover:text-orange">Facility</a>
                            </li>
                            <li class="group">
                                <a href="" class="text-base font-medium py-2 mx-8 flex text-orange border-b-2 border-orange">My Booking</a>
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

    <!-- Main Start -->
    <main>
        <div class="container mt-[139px] mb-[70px] lg:px-16">
            <div class="bg-white p-3 rounded-md">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 grid-rows-4 md:grid-rows-2 lg:grid-rows-2 gap-4">
                    <div class="w-full h-[297] lg:h-[280px] overflow-hidden rounded-md">
                      <img class="h-full w-full object-cover" src="assets/image/doublebed.jpg" alt="">
                    </div>

                    <div class="bg-gray1 rounded-md p-2 md:col-span-2 lg:col-span-1 text-sm lg:h-[280px]">
                      <div class="flex flex-col">
                        <div class="flex flex-col">
                        <div class="flex justify-between py-2">
                            <span class="text-gray-600 font-medium">ID Booking :</span>
                            <span class="text-gray-800">B001</span>
                        </div>
                        <div class="flex justify-between py-2">
                            <span class="text-gray-600 font-medium">Guest Name :</span>
                            <span class="text-gray-800">John Doe</span>
                        </div>
                        <div class="flex justify-between py-2">
                            <span class="text-gray-600 font-medium">Room :</span>
                            <span class="text-gray-800">Deluxe Room</span>
                        </div>
                        <div class="flex justify-between py-2">
                            <span class="text-gray-600 font-medium">Status :</span>
                            <span class="text-red">Cancelled</span>
                        </div>
                        <div class="flex justify-between py-2">
                            <span class="text-gray-600 font-medium">Booking Date :</span>
                            <span class="text-gray-800">2023-04-04</span>
                        </div>
                        <div class="flex justify-between py-2">
                            <span class="text-gray-600 font-medium">Check In :</span>
                            <span class="text-gray-800">2023-04-10</span>
                        </div>
                        <div class="flex justify-between py-2">
                            <span class="text-gray-600 font-medium">Check Out :</span>
                            <span class="text-gray-800">2023-04-15</span>
                        </div>
                        </div>
                      </div>
                    </div>

                    <div class="bg-gray1 rounded-md p-2 h-[149px] lg:h-[170px] lg:w-[830px]">
                        <div class="flex justify-between items-center mb-4 m">
                            <span class="text-orange font-medium mr-[45px] text-sm lg:text-xl">Reguler Double Bed</span>
                            <div class="flex items-center gap-2">
                                <svg class="fill-orange w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                <span class="text-orange text-sm">4.7</span>
                                <span class="text-slate-500 text-[10px] lg:text-sm">(1.254 review)</span>
                            </div>
                          </div>
                          <div class="flex flex-col">
                            <div class="flex justify-between py-2 text-sm">
                              <span class="text-gray-600 font-medium">Guests:</span>
                              <span class="text-gray-800">2 adults</span>
                            </div>
                            <div class="flex justify-between py-2 text-sm">
                              <span class="text-gray-600 font-medium">Breakfast:</span>
                              <span class="text-gray-800">Included</span>
                            </div>
                            <div class="flex justify-between py-2 text-sm">
                              <span class="text-gray-600 font-medium">Price:</span>
                              <span class="text-gray-800">Rp. 250k/Night</span>
                            </div>
                          </div>
                    </div>

                      <div class=" rounded-md p-2 flex items-center justify-center mt-[-120px] h-[293px] lg:mt-0 lg:w-[300px] lg:ml-[275px] lg:p-0">
                        <label for="dropzone-file" class="mx-auto cursor-pointer flex w-full max-w-lg flex-col items-center rounded-xl border-2 border-dashed  bg-white p-6 text-center lg:h-[170px] lg:mt-[-122px]">
                            <div class="">
                                <div class="flex items-center justify-center">
                                <svg class="w-10 lg:w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M246.6 9.4c-12.5-12.5-32.8-12.5-45.3 0l-128 128c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 109.3V320c0 17.7 14.3 32 32 32s32-14.3 32-32V109.3l73.4 73.4c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-128-128zM64 352c0-17.7-14.3-32-32-32s-32 14.3-32 32v64c0 53 43 96 96 96H352c53 0 96-43 96-96V352c0-17.7-14.3-32-32-32s-32 14.3-32 32v64c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V352z"/></svg>
                                </div>
                                <h2 class="mt-4 text-xl font-medium text-gray-700 tracking-wide lg:text-base">Payment Proof</h2>
                                <p class="mt-2 text-gray-500 tracking-wide lg:text-sm">Upload your Payment Proof file<br> SVG, PNG, JPG or GIF. </p>
                                <input id="dropzone-file" type="file" class="hidden" />
                            </div>
                        </label>
                      </div>

                </div>  
                <div class="w-full border-2 border-orange rounded-md flex items-center justify-center py-3 mt-[-80px] hover:text-white hover:bg-orange text-orange">
                    <button type="submit">Upload Payment Proof</button>
                </div>               
            </div>
        </div>
    </main>
    <!-- Main End -->

    <!-- Footer Start -->
    <footer>
        <div class="p-5 bg-orange text-white">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2">
                    <div class="mb-3 mx-auto">
                        <div class="flex items-center justify-center">
                            <img class="w-[80px] lg:w-[150px]" src="assets/image/white-logo.png" alt="logo">
                        </div>
                        <div class="flex gap-3 lg:ml-4">
                            <a href="/"><svg class="w-3 fill-white lg:w-5 hover:fill-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg></a>
                            <a href="/"><svg class="w-3 fill-white lg:w-5 hover:fill-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a>
                            <a href="/"><svg class="w-3 fill-white lg:w-5 hover:fill-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg></a>
                            <a href="/"><svg class="w-3 fill-white lg:w-5 hover:fill-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg></a>
                        </div>
                    </div>
                    <div class="mb-2">
                        <h4 class="text-lg pb-2 font-semibold">Our Hotel</h4>
                        <ul class="font-medium">
                            <li class="pb-2 flex"><svg class="w-2 mr-3 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
                                <a href="/" class="hover:text-dark text-sm">About Us</a></li>
                            <li class="pb-2 flex"><svg class="w-2 mr-3 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
                                <a href="/" class="hover:text-dark text-sm">Contact Us</a></li>
                            <li class="pb-2 flex"><svg class="w-2 mr-3 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
                                <a href="/" class="hover:text-dark text-sm">Careers</a></li>
                        </ul>
                    </div>
                    <div class="mb-2">
                        <h4 class="text-lg pb-2 font-semibold">News</h4>
                        <ul class="font-medium">
                            <li class="pb-2 flex"><svg class="w-2 mr-3 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
                                <a href="/" class="hover:text-dark text-sm">Newsletter</a></li>
                            <li class="pb-2 flex"><svg class="w-2 mr-3 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
                                <a href="/" class="hover:text-dark text-sm">Event Upcoming</a></li>
                            <li class="pb-2 flex"><svg class="w-2 mr-3 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
                                <a href="/" class="hover:text-dark text-sm">Discount</a></li>
                        </ul>
                    </div>
                    <div class="mb-2">
                        <h4 class="text-lg pb-2 font-semibold">More</h4>
                        <ul class="font-medium">
                            <li class="pb-2 flex"><svg class="w-2 mr-3 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
                                <a href="/" class="hover:text-dark text-sm">FAQs</a></li>
                            <li class="pb-2 flex"><svg class="w-2 mr-3 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
                                <a href="/" class="hover:text-dark text-sm">Terms Of Services</a></li>
                            <li class="pb-2 flex"><svg class="w-2 mr-3 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
                                <a href="/" class="hover:text-dark text-sm">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-dark w-full text-white px-10">
            <div>
                <div class="text-center text-xs text-white py-2">
                    <div>
                        <span>Copyrights ©2023 In Situ Hotel. Build by Papazola</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <script src="assets/js/script.js"></script>
</body>

</html>