<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Bacain - Register</title>
</head>

<body class="">

    <div class=" flex flex-col  mx-auto bg-tertiary-blue min-h-screen shadow-lg">

        <!-- hider gambar gatau gambar aoaan -->
        <div class="relative w-full flex-2 bg-tertiary-blue">
            <img src="" alt="header img" class="w-full h-full object-cover">
        </div>


        <div
            class="py-6 bg-primary-white flex-[0.5] h-full flex flex-col gap-5 rounded-tl-3xl rounded-tr-3xl">
            <p class="text-left text-md ml-4 mt-4">
                <a href="#" class="text-tertiary-blue font-semibold">← Back To Login</a>
            </p>

            <h1 class="text-6xl font-medium text-center">Sign Up</h1>
            <p class="text-center text-gray-600 mt-1">
                Selamat Datang Kembali
            </p>

            <form class="mt-6 space-y-4 w-full px-5">

                <div
                    class="bg-white rounded-tl-3xl rounded-br-3xl w-full shadow-md rounded-md px-4 py-3 flex items-center">
                    <span class="text-gray-400 mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25H4.5A2.25 2.25 0 012.25 17.25V6.75m0 0L12 12.75l9.75-6m-19.5 0A2.25 2.25 0 014.5 4.5h15a2.25 2.25 0 012.25 2.25" />
                        </svg>
                    </span>
                    <input type="text" placeholder="Nama Lengkap" class="w-full bg-transparent focus:outline-none">
                </div>
                <div
                    class="bg-white rounded-tl-3xl rounded-br-3xl w-full shadow-md rounded-md px-4 py-3 flex items-center">
                    <span class="text-gray-400 mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25H4.5A2.25 2.25 0 012.25 17.25V6.75m0 0L12 12.75l9.75-6m-19.5 0A2.25 2.25 0 014.5 4.5h15a2.25 2.25 0 012.25 2.25" />
                        </svg>
                    </span>
                    <input type="email" placeholder="Email" class="w-full bg-transparent focus:outline-none">
                </div>

                <div class="bg-white rounded-tl-3xl rounded-br-3xl shadow-md rounded-md px-4 py-3 flex items-center">
                    <span class="text-gray-400 mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M16.5 10.5V7.875a4.875 4.875 0 00-9.75 0V10.5m-.75 0h11.25a1.5 1.5 0 011.5 1.5v7.5a1.5 1.5 0 01-1.5 1.5H6a1.5 1.5 0 01-1.5-1.5v-7.5a1.5 1.5 0 011.5-1.5z" />
                        </svg>
                    </span>
                    <input type="password" placeholder="Password" class="w-full bg-transparent focus:outline-none">
                </div>

                <div class="bg-white rounded-tl-3xl rounded-br-3xl shadow-md rounded-md px-4 py-3 flex items-center">
                    <span class="text-gray-400 mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M16.5 10.5V7.875a4.875 4.875 0 00-9.75 0V10.5m-.75 0h11.25a1.5 1.5 0 011.5 1.5v7.5a1.5 1.5 0 01-1.5 1.5H6a1.5 1.5 0 01-1.5-1.5v-7.5a1.5 1.5 0 011.5-1.5z" />
                        </svg>
                    </span>
                    <input type="password" placeholder="Confirm Password"
                        class="w-full bg-transparent focus:outline-none">
                </div>

                <div class="text-right -mt-2">
                    <a href="#" class="text-sm text-blue-500">Forgot Password</a>
                </div>

                <button
                    class="w-full bg-tertiary-blue text-white py-3 rounded-tl-3xl rounded-br-3xl rounded-md font-semibold mt-2 shadow-md active:scale-[0.98] transition">
                    Sign Up
                </button>
            </form>
        </div>
    </div>

</body>

</html>
