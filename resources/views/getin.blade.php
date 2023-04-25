@extends('layouts.master')
@section('main')
    <style>
        #bg {
            background: rgb(237,163,255);
            background: linear-gradient(115deg, rgba(237,163,255,1) 0%, rgba(121,159,255,1) 50%, rgba(237,163,255,1) 100%);
        }
    </style>
    <div id="bg" class="flex flex-col items-center min-h-screen text-xl">

        <div class="flex items-end text-3xl my-4 ml-4">
            <h1 class="font-bold">soya</h1>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 pb-1">
                <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
            </svg>
        </div>
        
        <div class="max-w-xl w-full self-center flex flex-col px-2">
            <h2 class="text-2xl bg-pink-600 font-semibold py-2 text-white text-center">Welcome Back!</h2>
            <div class="px-4 flex font-semibold flex-col gap-3 h-96 justify-around bg-gray-50">
                <input type="text" class="border-2 border-gray-300 p-2 rounded-lg" placeholder="Email">
                <div class="flex flex-col gap-2">
                    <input type="password" class="border-2 border-gray-300 p-2 rounded-lg" placeholder="Password">
                    <p class="text-right text-sm">Forgot password?</p>
                </div>
                <div class="flex flex-col gap-2">
                    <button class="bg-pink-600 text-white shadow-xl p-2 rounded-full w-full">Log in</button>
                    <p class="text-center">Don't have an account? <a href="#" class="text-pink-600">Sign up</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
