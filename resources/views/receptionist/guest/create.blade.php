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
                        <a class="opacity-50 text-slate-700" href="javascript:;">Pages</a>
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
                        <h6>Create</h6>
                    </div>

                    <div class="flex-auto p-6">
                        <form role="form" action="{{ route('guest.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Name</label>
                            <div class="mb-4">
                                <input type="text" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-orange focus:transition-shadow" placeholder="Name" name="guest_name"/>
                            </div>

                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Email</label>
                            <div class="mb-4">
                                <input type="email" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-orange focus:transition-shadow" placeholder="Email" name="email"/>
                            </div>

                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Phone Number</label>
                            <div class="mb-4">
                                <input type="text" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-orange focus:transition-shadow" placeholder="Phone Number" name="guest_phone"/>
                            </div>

                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Country</label>
                            <div class="mb-4">
                                <select class=" text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-orange focus:transition-shadow>" name="guest_country">
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->name }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Address</label>
                            <div class="mb-4">
                                <textarea class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-orange focus:transition-shadow" name="guest_address" id="" rows="5"></textarea>
                            </div>

                            <img class="guest-photo w-60">
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Guest Photo</label>
                            <div class="mb-4">
                                <input type="file" class="guest-photo text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-orange focus:transition-shadow" name="guest_photo" id="guest_photo" onchange="guestPhoto()" />
                            </div>

                            <img class="guest-id-card w-60">
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Guest ID Card</label>
                            <div class="mb-4">
                                <input type="file" class="guest-id-card text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-orange focus:transition-shadow" name="guest_id_card" id="guest_id_card" onchange="guestIdCard()" />
                            </div>

                            <div class="text-center">
                                <button type="submit" class="inline-block w-full px-6 py-3 mt-6 mb-0 font-bold text-center text-black uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs ease-soft-in tracking-tight-soft bg-sky-600 hover:scale-102 hover:shadow-soft-xs active:opacity-85">Create</button>
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

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buat Akun Tamu</title>
</head>
<body>
    <h1>Buat Akun Tamu</h1>
    <form action="{{ route('guest.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="guest_name"></td>
                @error('guest_name')
                    <span>{{ $message }}</span>
                @enderror
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
                @error('email')
                    <span>{{ $message }}</span>
                @enderror
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" id="password"></td>
                @error('password')
                    <span>{{ $message }}</span>
                @enderror
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td><input type="password" name="password_confirmation" id="password_confirmation"></td>
            </tr>
            <tr>
                <td>Generated Password</td>
                <td><input type="checkbox" name="generated_password" id="generated_password" onclick="disablePasswordField()"></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td><input type="file" name="guest_photo"></td>
                @error('guest_photo')
                    <span>{{ $message }}</span>
                @enderror
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td><input type="text" name="guest_phone"></td>
                @error('guest_phone')
                    <span>{{ $message }}</span>
                @enderror
            </tr>
            <tr>
                <td>Negara</td>
                <td><input type="text" name="guest_country"></td>
                @error('guest_country')
                    <span>{{ $message }}</span>
                @enderror
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <textarea name="guest_address" id="" cols="30" rows="10"></textarea>
                </td>
                @error('guest_address')
                    <span>{{ $message }}</span>
                @enderror
            </tr>
            <tr>
                <td>ID Card</td>
                <td><input type="file" name="guest_id_card"></td>
                @error('guest_id_card')
                    <span>{{ $message }}</span>
                @enderror
            </tr>
            <button type="submit">Kirim</button>
        </table>
    </form>
</body>

<script>
    function disablePasswordField() {
        const isGeneratedPassword = document.getElementById("generated_password");
        const password = document.getElementById("password");
        const passwordConfirmation = document.getElementById("password_confirmation");
        if (isGeneratedPassword.checked == true) {
            password.disabled = true;
            passwordConfirmation.disabled = true;
        } else {
            password.disabled = false;
            passwordConfirmation.disabled = false;
        }
    }
</script>
</html> --}}
