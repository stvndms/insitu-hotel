<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resetpass Page</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="font-poppins bg-cover bg-fixed bg-center bg-no-repeat" style="background-image: url('assets/image/bgmin.jpg')">
    <!-- Login Form Start -->
    <div class="flex justify-center items-center min-h-screen">
        <div class="container 2xl:w-[500px] 2xl:h-[450px] lg:w-[450px] lg:h-[520px] md:w-[400px] md:h-[500px] w-[300px] h-[420px] bg-white/30 backdrop-blur-sm rounded-[10px] shadow-md 2xl:py-14 py-8 px-10 border-[1px] border-white">
            <h2 class="font-semibold md:text-lg 2xl:text-xl text-sm block text-center">Forgot your password?</h2>
            <p class="text-[13px] 2xl:text-[14px] font-medium text-grey md:mt-2 mt-1 block text-center 2xl:mb-20 lg:mb-15 mb-10">Please Enter Your Email</p>
            @if ($errors->any())
                <div class="alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session()->has('status'))
                <div class="alert alert-success">
                    {{session()->get('status')}}
                </div>
            @endif
            <form action="{{route('password.update')}}" method="POST" autocomplete="off"> @csrf
                <input type="hidden" name="token" value="{{request()->token}}">
                <input type="hidden" name="email" value="{{request()->email}}">
                <label class="block  2xl:mb-5 md:mb-3 mb-2 font-medium md:text-[15px] 2xl:text-[16px] text-xs">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your Password" class="form-control w-full 2xl:h-[50px] lg:h-[40px] md:h-[35px] h-[25px] text-[10px] md:text-sm bg-white/50 mb-5 px-5 backdrop-blur-sm border-[1px] border-white md:rounded-[10px] rounded-[5px]" autofocus required>
                <label class="block  2xl:mb-5 md:mb-3 mb-2 font-medium md:text-[15px] 2xl:text-[16px] text-xs">Password Confirmation</label>
                <input type="password" name="password_confirmation"  placeholder="Confirm Password" class="form-control w-full 2xl:h-[50px] lg:h-[40px] md:h-[35px] h-[25px] text-[10px] md:text-sm bg-white/50 mb-5 px-5 backdrop-blur-sm border-[1px] border-white md:rounded-[10px] rounded-[5px]" autofocus required>
            <div class="mt-5 2xl:mt-7">
                <button class="w-full lg:h-[40px] 2xl:h-[50px] md:h-[35px] h-[30px] md:rounded-[10px] rounded-[7px] bg-orange text-white 2xl:text-base text-[10px] md:text-sm font-normal" type="submit" value="Update Password">Update Password</button>
            </div>

        </form>
    </div>
    <!-- Login Form End -->
</body>

</html>