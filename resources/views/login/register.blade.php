<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="font-poppins bg-cover bg-fixed bg-center bg-no-repeat" style="background-image: url('assets/image/bgmin.jpg')">
    <!-- Login Form Start -->
    <div class="flex justify-center items-center min-h-screen">
        <div class="container 2xl:w-[550px] 2xl:h-[850px] lg:w-[450px] lg:h-[590px] md:w-[400px] md:h-[560px] w-[300px] h-[480px] bg-white/30 backdrop-blur-sm rounded-[10px] shadow-md 2xl:py-14 py-8 px-10 border-[1px] border-white">
            <h2 class="font-semibold md:text-lg 2xl:text-xl text-sm block text-center">Create Account</h2>
            <p class="text-[13px] 2xl:text-[14px] font-medium text-grey md:mt-2 mt-1 block text-center 2xl:mb-20 lg:mb-15 mb-10">Fill The Form Below </p>

            <form action="{{ route('store') }}" method="POST" autocomplete="off">@csrf

                <label for="name" class="block  2xl:mb-5 md:mb-3 mb-2 font-medium md:text-[15px] 2xl:text-[16px] text-xs">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror w-full 2xl:h-[50px] lg:h-[40px] md:h-[35px] h-[25px] text-[10px] md:text-sm bg-white/50 mb-5 px-5 backdrop-blur-sm border-[1px] border-white md:rounded-[10px] rounded-[5px]" id="name" name="name" placeholder="name" value="{{ old('name') }}" autofocus required>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                <label for="email" class="block  2xl:mb-5 md:mb-3 mb-2 font-medium md:text-[15px] 2xl:text-[16px] text-xs">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your Email address" class="form-control @error('email') is-invalid @enderror w-full 2xl:h-[50px] lg:h-[40px] md:h-[35px] h-[25px] text-[10px] md:text-sm bg-white/50 mb-5 px-5 backdrop-blur-sm border-[1px] border-white md:rounded-[10px] rounded-[5px]" required>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                <label for="password" class="block 2xl:mb-5 md:mb-3 mb-2 font-medium md:text-[15px] text-xs">Password</label>
                <div class="relative">
                    <input type="password" name="password" id="password" placeholder="Enter your Password" class="form-control @error('password') is-invalid @enderror w-full 2xl:h-[50px] lg:h-[40px] md:h-[35px] h-[25px] md:rounded-[10px] rounded-[5px] text-[10px] md:text-sm bg-white/50 px-5 backdrop-blur-sm border-[1px] border-white" required>
                    <img class="2xl:w-5 2xl:h-5 lg:w-4 lg:h-4 w-3 h-3 absolute top-1/2 -translate-y-1/2 right-3" src="assets/image/eye.svg" alt="">
                </div>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

                <label class="block 2xl:mt-5 md:mt-3 lg:mt-4 mt-5 2xl:mb-5 md:mb-3 mb-2 font-medium md:text-[15px] text-xs">Confirm Password</label>
                <div class="relative">
                    <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control @error('password_confirmation') is-invalid @enderror w-full 2xl:h-[50px] lg:h-[40px] md:h-[35px] h-[25px] md:rounded-[10px] rounded-[5px] text-[10px] md:text-sm bg-white/50 px-5 backdrop-blur-sm border-[1px] border-white" required>
                    <img class="2xl:w-5 2xl:h-5 lg:w-4 lg:h-4 w-3 h-3 absolute top-1/2 -translate-y-1/2 right-3" src="assets/image/eye.svg" alt="">
                </div>
            <div class="mt-8">
                <button type="submit" class="w-full lg:h-[40px] 2xl:h-[50px] md:h-[35px] h-[30px] md:rounded-[10px] rounded-[7px] bg-orange text-white 2xl:text-base text-[10px] md:text-sm font-normal">Sign in</button>
            </div>
            <h1 class="block text-center lg:mt-3 md:mt-2 mt-1 2xl:text-base text-[10px] md:text-sm font-normal">or</h1>
            <div>
                <button class="w-full 2xl:h-[50px] lg:h-[40px] md:h-[35px] h-[30px] 2xl:text-base text-[10px] md:text-sm flex justify-center items-center bg-white/50 rounded-[10px] md:mt-2 mt-1 "><img class="mr-3 w-5 md:w-6 2xl:w-7" src="assets/image/g-icon.png">Sign in with Google</button>
            </div>
            <h1 class="block text-center 2xl:mt-7 mt-4 text-grey 2xl:text-[15px] md:text-[13px] text-[10px]">Already have an account?<a class="text-dark" href="/login"><span class="underline underline-offset-1">Sign In </span></a></h1>
            </form>
        </div>
    </div>
    <!-- Login Form End -->
</body>

</html>
