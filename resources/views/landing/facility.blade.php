<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facility</title>

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
                                <a href="" class="text-base font-medium text-dark py-2 mx-8 flex group-hover:text-orange">Room</a>
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

    <!-- Carousel Start -->

    <div class="container px-2 lg:px-[60px] pt-[130px]">
        <div class="carousel w-full">
            <div id="slide1" class="carousel-item relative w-full flex ">
                <div class="mx-auto self-center">
                    <img src="assets/image/hero.jpg" class="rounded-lg w-[300px] h-[400px]" />
                    <div class="w-full bg-dark bg-opacity-80 h-10 relative -mt-10 rounded-b-lg text-center">
                        <span class="text-white">Tes</span>
                    </div>
                </div>
                <div class="absolute flex justify-between transform -translate-y-1/2 w-full top-1/2">
                    <a href="#slide4" class="text-orange hover:opacity-75">❮</a>
                    <a href="#slide2" class="text-orange hover:opacity-75">❯</a>
                </div>
            </div>
            <div id="slide2" class="carousel-item relative w-full flex ">
                <div class="mx-auto self-center">
                    <img src="assets/image/hero.jpg" class="rounded-lg w-[300px] h-[400px]" />
                    <div class="w-full bg-dark bg-opacity-80 h-10 relative -mt-10 rounded-b-lg">

                    </div>
                </div>
                <div class="absolute flex justify-between transform -translate-y-1/2 w-full top-1/2">
                    <a href="#slide1" class="text-orange hover:opacity-75">❮</a>
                    <a href="#slide3" class="text-orange hover:opacity-75">❯</a>
                </div>
            </div>
            <div id="slide3" class="carousel-item relative w-full">
                <img src="/images/stock/photo-1414694762283-acccc27bca85.jpg" class="w-full" />
                <div class="absolute flex justify-between transform -translate-y-1/2 w-full top-1/2">
                    <a href="#slide2" class="text-orange hover:opacity-75">❮</a>
                    <a href="#slide4" class="text-orange hover:opacity-75">❯</a>
                </div>
            </div>
            <div id="slide4" class="carousel-item relative w-full">
                <img src="/images/stock/photo-1665553365602-b2fb8e5d1707.jpg" class="w-full" />
                <div class="absolute flex justify-between transform -translate-y-1/2 w-full top-1/2">
                    <a href="#slide3" class="text-orange hover:opacity-7">❮</a>
                    <a href="#slide1" class="text-orange hover:opacity-75">❯</a>
                </div>
            </div>
        </div>

    </div>

    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <!-- The button to open modal -->
    <!-- The button to open modal -->
    <label for="my-modal-4" class="btn">open modal</label>

    <!-- Put this part before </body> tag -->
    <input type="checkbox" id="my-modal-4" class="modal-toggle" />
    <label for="my-modal-4" class="modal cursor-pointer">
        <label class="modal-box relative" for="">
            <div class="flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 fill-red-500" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M368 128c0 44.4-25.4 83.5-64 106.4V256c0 17.7-14.3 32-32 32H176c-17.7 0-32-14.3-32-32V234.4c-38.6-23-64-62.1-64-106.4C80 57.3 144.5 0 224 0s144 57.3 144 128zM168 176a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm144-32a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM3.4 273.7c7.9-15.8 27.1-22.2 42.9-14.3L224 348.2l177.7-88.8c15.8-7.9 35-1.5 42.9 14.3s1.5 35-14.3 42.9L295.6 384l134.8 67.4c15.8 7.9 22.2 27.1 14.3 42.9s-27.1 22.2-42.9 14.3L224 419.8 46.3 508.6c-15.8 7.9-35 1.5-42.9-14.3s-1.5-35 14.3-42.9L152.4 384 17.7 316.6C1.9 308.7-4.5 289.5 3.4 273.7z" />
                </svg>
            </div>
            <div class="flex justify-center mt-5 text-xl">
                <p class="py-4">Are you sure you want to delete this item?</p>
            </div>
            <div class="flex justify-center mt-2">
                <button data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                    Yes, I'm sure
                </button>
                <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
            </div>
        </label>
    </label>
</body>

</html>


    <!-- Carousel End -->

    <!-- Footer Start -->
    <footer class="bg-orange w-full h-[100px] p-1 bottom-0 lg: lg:py-3 lg:px-[380px] lg:h-[150px] fixed">
        <div class="grid grid-cols-4 gap-3 items-center mb-1">
            <div>
                <img class="w-[100px] lg:w-[150px]" src="assets/image/white-logo.png" alt="logo">
                <div class="flex gap-3 lg:ml-4">
                    <svg class="w-3 fill-white lg:w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
                    </svg>
                    <svg class="w-3 fill-white lg:w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                    </svg>
                    <svg class="w-3 fill-white lg:w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                    </svg>
                    <svg class="w-3 fill-white lg:w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                    </svg>
                </div>
            </div>
            <div class="text-center text-white">
                <h4 class="text-sm font-semibold">Our Hotel</h4>
                <span class="block text-xs lg:text-sm">About Us</span>
                <span class="block text-xs lg:text-sm">Contact Us</span>
                <span class="block text-xs lg:text-sm">Careers</span>
            </div>
            <div class="text-center text-[8px] text-white">
                <h4 class="text-sm font-semibold">News</h4>
                <span class="block text-xs lg:text-sm">Newsletter</span>
                <span class="block text-xs lg:text-sm">Event Upcoming</span>
                <span class="block text-xs lg:text-sm">Discount</span>
            </div>
            <div class="text-center text-[8px] text-white">
                <h4 class="text-sm font-semibold">More</h4>
                <span class="block text-xs lg:text-sm">Why Us?</span>
                <span class="block text-xs lg:text-sm">Help Center</span>
                <span class="block text-xs lg:text-sm">FAQs</span>
            </div>
        </div>
        <div>

            <h1 class="text-[8px] text-white mx-auto block w-full lg:text-sm lg:-ml-[90px]">Copyrights ©2023 In Situ Hotel. Build by Papazola</h1>
        </div>
    </footer>
    <!-- Footer End -->

</body>

</html>
