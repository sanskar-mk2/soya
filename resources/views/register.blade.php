@extends('layouts.master')
@section('main')
    <div x-data="onboarding" class="flex flex-col min-h-screen text-xl bg-gray-100">

        <header class="flex items-center bg-white px-4 py-2 justify-between">
            <button @click="prev" :disabled="prev_disabled">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
            </button>

            <div class="flex items-end text-3xl">
                <h1 class="font-bold">soya</h1>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 pb-1">
                    <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                </svg>
            </div>

            <div @click="open=true">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </div>
        </header>

        <template x-if="page==1">
            <div class="flex bg-gray-900 py-3 pl-2 items-center gap-1 shadow-xl">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                </svg>
                <h2 class="font-bold text-white">About Me</h2>
            </div>
        </template>
        <template x-if="page==2">
            <div class="flex bg-gray-900 py-3 pl-2 items-center gap-1 shadow-xl">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                </svg>
                <h2 class="font-bold text-white">Matches</h2>
            </div>
        </template>
        <template x-if="page==3">
            <div class="flex bg-gray-900 py-3 pl-2 items-center gap-1 shadow-xl">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.098 19.902a3.75 3.75 0 005.304 0l6.401-6.402M6.75 21A3.75 3.75 0 013 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 003.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008z" />
                </svg>
                <h2 class="font-bold text-white">Interests</h2>
            </div>
        </template>

        <template x-if="page==4">
            <div class="flex bg-gray-900 py-3 pl-2 items-center gap-1 shadow-xl">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.098 19.902a3.75 3.75 0 005.304 0l6.401-6.402M6.75 21A3.75 3.75 0 013 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 003.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008z" />
                </svg>
                <h2 class="font-bold text-white">League of Legends</h2>
            </div>
        </template>

        <template x-if="page==5">
            <div class="flex bg-gray-900 py-3 pl-2 items-center gap-1 shadow-xl">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.098 19.902a3.75 3.75 0 005.304 0l6.401-6.402M6.75 21A3.75 3.75 0 013 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 003.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008z" />
                </svg>
                <h2 class="font-bold text-white">Valorant</h2>
            </div>
        </template>

        <template x-if="page==6">
            <div class="flex bg-gray-900 py-3 pl-2 items-center gap-1 shadow-xl">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                </svg>
                <h2 class="font-bold text-white">Describe Yourself</h2>
            </div>
        </template>

        <template x-if="page==7">
            <div class="flex bg-gray-900 py-3 pl-2 items-center gap-1 shadow-xl">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                </svg>
                <h2 class="font-bold text-white">Info</h2>
            </div>
        </template>

        <template x-if="page==8">
            <div class="flex bg-gray-900 py-3 pl-2 items-center gap-1 shadow-xl">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.114 5.636a9 9 0 010 12.728M16.463 8.288a5.25 5.25 0 010 7.424M6.75 8.25l4.72-4.72a.75.75 0 011.28.53v15.88a.75.75 0 01-1.28.53l-4.72-4.72H4.51c-.88 0-1.704-.507-1.938-1.354A9.01 9.01 0 012.25 12c0-.83.112-1.633.322-2.396C2.806 8.756 3.63 8.25 4.51 8.25H6.75z" />
                </svg>
                <h2 class="font-bold text-white">Voice Recording</h2>
            </div>
        </template>

        <template x-if="page==9">
            <div class="flex bg-gray-900 py-3 pl-2 items-center gap-1 shadow-xl">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                </svg>
                <h2 class="font-bold text-white">You</h2>
            </div>
        </template>

        <nav x-cloak
            x-show="open" class="fixed right-0 z-10 flex justify-end w-full bg-black/50">
            <div x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-x-full"
                x-transition:enter-end="opacity-100 translate-x-0"
                x-transition:leave="transition ease-in duration-300 transform"
                x-transition:leave-start="opacity-100 translate-x-0"
                x-transition:leave-end="opacity-0 translate-x-full"
                x-show="open"
                @click.outside="open=false" class="flex-col p-3 flex gap-8 justify-start shadow-xl bg-white w-1/2 min-h-screen">
                <svg @click="open=false" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="drop-shadow self-end w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
                <button class="bg-pink-600 text-white shadow-xl p-2 rounded-full w-full">Log in</button>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                    </svg>
                    <span>About</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                    </svg>
                    <span>Contact</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-pink-600 animate-pulse">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
                    </svg>
                    <span>Premium</span>
                </div>
            </div>
        </nav>


        <template x-if="page==1">
            <div class="max-w-xl h-96 self-center flex flex-col bg-white w-10/12 mt-4 rounded py-8 gap-8 items-center">
                <h3 class="text-2xl font-bold self-start pl-2 pt-2">I identify as...</h3>

                <button class="pill p-1 w-40 font-semibold">A Woman</button>
                <button class="pill p-1 w-40 font-semibold">A Man</button>
                <button class="pill p-1 w-40 font-semibold">Non-Binary</button>
            </div>
        </template>

        <template x-if="page==2">
            <div class="max-w-xl h-96 self-center flex flex-col bg-white w-10/12 mt-4 rounded py-8 gap-8 items-center">
                <h3 class="text-2xl font-bold self-start pl-2 pt-2">I want to be matched with...</h2>

                <button class="pill p-1 w-40 font-semibold">Women</button>
                <button class="pill p-1 w-40 font-semibold">Men</button>
                <button class="pill p-1 w-40 font-semibold">Everyone</button>
            </div>
        </template>

        <template x-if="page==3">
            <div class="max-w-xl h-96 self-center flex flex-col bg-white w-10/12 mt-4 rounded pb-8 pt-1 gap-2 overflow-y-auto items-center">
                <p class="text-sm">Pick up to 10</p>
                <h3 class="text-xl font-bold self-start pl-2 pt-2">Games</h3>
                <div class="flex flex-wrap w-full text-sm gap-2 px-2">
                    <template x-for="(game, index) in games">
                        <button class="pill px-2 flex items-center font-semibold">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                            </svg>
                            <p x-text="game"></p>
                        </button>
                    </template>
                    </button>
                </div>

                <h3 class="text-xl font-bold self-start pl-2 pt-2">Music</h3>
                <div class="flex flex-wrap w-full text-sm gap-2 px-2">
                    <template x-for="(music, index) in musics">
                        <button class="pill px-2 flex items-center font-semibold">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                            </svg>
                            <p x-text="music"></p>
                        </button>
                    </template>
                    </button>
                </div>

                <h3 class="text-xl font-bold self-start pl-2 pt-2">Hobbies</h3>
                <div class="flex flex-wrap w-full text-sm gap-2 px-2">
                    <template x-for="(hobby, index) in hobbies">
                        <button class="pill px-2 flex items-center font-semibold">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                            </svg>
                            <p x-text="hobby"></p>
                        </button>
                    </template>
                    </button>
                </div>
            </div>
        </template>

        <template x-if="page==4">
            <div class="max-w-xl h-96 self-center flex flex-col bg-white w-10/12 mt-4 rounded py-8 gap-8 items-center">
                <h3 class="text-2xl font-bold self-start pl-2 pt-2">What's your rank in League of Legends?</h2>
                <div class="flex flex-wrap w-full text-sm gap-2 px-2">
                    <template x-for="(rank, index) in league_ranks">
                        <button class="pill px-2 flex items-center font-semibold">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                            </svg>
                            <p x-text="rank"></p>
                        </button>
                    </template>
                    </button>
                </div>
            </div>
        </template>

        <template x-if="page==5">
            <div class="max-w-xl h-96 self-center flex flex-col bg-white w-10/12 mt-4 rounded py-8 gap-8 items-center">
                <h3 class="text-2xl font-bold self-start pl-2 pt-2">What's your rank in Valorant?</h3>
                <div class="flex flex-wrap w-full text-sm gap-2 px-2">
                    <template x-for="(rank, index) in valorant_ranks">
                        <button class="pill px-2 flex items-center font-semibold">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                            </svg>
                            <p x-text="rank"></p>
                        </button>
                    </template>
                    </button>
                </div>
            </div>
        </template>

        <template x-if="page==6">
            <div class="max-w-xl relative h-96 self-center flex flex-col bg-white w-10/12 mt-4 rounded py-8 gap-8 items-center">
                <h3 class="text-2xl font-bold self-start pl-2 pt-2">Write about yourself!</h3>
                <p class="absolute right-8 bottom-8"><span x-text="about.length"></span>/250</p>
                <textarea x-model="about"
                    class="resize-none w-10/12 h-96 rounded border-2 border-gray-300 p-2" placeholder="Are you a dog or a cat person? Do you love trying new foods, or do you have a go-to comfort meal? What’s your main role in league? Tell us about you!"></textarea>
            </div>
        </template>

        <template x-if="page==7">
            <div class="max-w-xl relative overflow-y-auto h-96 self-center flex flex-col bg-white w-10/12 mt-4 rounded py-8 gap-2 items-center">
                <div class="w-full flex flex-col items-center">
                    <label for="dob" class="text-2xl font-bold self-start pl-2 pt-2">DOB</label>
                    <input id="dob"
                        class="rounded w-10/12 border-2 border-gray-300 p-2"
                        type="date" />
                </div>
                <div class="w-full flex flex-col items-center">
                    <label for="fname" class="text-2xl font-bold self-start pl-2 pt-2">First Name</label>
                    <input id="fname"
                        class="rounded w-10/12 border-2 border-gray-300 p-2"
                        type="text" placeholder="Name" />
                </div>
                <div class="w-full flex flex-col items-center">
                    <label for="email" class="text-2xl font-bold self-start pl-2 pt-2">Email</label>
                    <input id="email"
                        class="rounded w-10/12 border-2 border-gray-300 p-2"
                        type="email" placeholder="Email" />
                </div>
                <div class="w-full flex flex-col items-center">
                    <label for="password" class="text-2xl font-bold self-start pl-2 pt-2">Password</label>
                    <input id="password"
                        class="rounded w-10/12 border-2 border-gray-300 p-2"
                        type="password" placeholder="Password" />
                </div>
                <div class="w-full flex flex-col items-center">
                    <label for="password_confirmation" class="text-2xl font-bold self-start pl-2 pt-2">Confirm Password</label>
                    <input id="password_confirmation"
                        class="rounded w-10/12 border-2 border-gray-300 p-2"
                        type="password" placeholder="Confirm Password" />
                </div>
            </div>
        </template>

        <template x-if="page==8">
            <div class="max-w-xl relative h-96 self-center flex flex-col bg-white w-10/12 mt-4 rounded py-8 gap-8 items-center justify-between">
                <h3 class="text-2xl font-bold self-start pl-2 pt-2">Say something for your profile!</h3>
                <button @click="recording ? stopRecording : startRecording">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-32 h-32" :class="{'text-red-500': recording}">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 18.75a6 6 0 006-6v-1.5m-6 7.5a6 6 0 01-6-6v-1.5m6 7.5v3.75m-3.75 0h7.5M12 15.75a3 3 0 01-3-3V4.5a3 3 0 116 0v8.25a3 3 0 01-3 3z" />
                    </svg>
                </button>
                <p class="text-sm p-1 font-semibold"><span x-text="timeLeft.toFixed(2)"></span>s</p>
                <button @click="playAudio" x-show="audioURL" x-cloak>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                    </svg>
                </button>
                <audio x-show="audioURL" x-bind:src="audioURL" controls x-cloak></audio>
            </div>
        </template>

        <template x-if="page==9">
            <div class="max-w-xl relative h-96 self-center flex flex-col bg-white w-10/12 mt-4 rounded py-8 gap-8 items-center justify-between">
                <h3 class="text-2xl font-bold self-start pl-2 pt-2">Say something for your profile!</h3>
                <div class="grid grid-cols-3 grow gap-2 px-2">
                    <template x-for="(image, index) in images">
                        <div x-show="image" class="relative flex-shrink-0 w-24 h-24">
                            <img x-bind:src="image" class="object-cover w-full h-full rounded">
                        </div>
                    </template>
                    <template x-for="(button, index) in buttons">
                        <div x-show="!images[index]" class="relative flex-shrink-0 w-24 h-24">
                            <button x-bind:id="'button-' + index" x-on:click="uploadImage(index)" class="flex items-center justify-center w-full h-full bg-gray-100 rounded text-2xl font-bold focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-black">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                                </svg>
                            </button>
                            <input type="file" x-bind:id="'input-' + index" x-on:change="handleFileInput($event, index)" accept="image/*" capture="camera" style="display: none;">
                        </div>
                    </template>
                </div>
            </div>
        </template>

        <button @click="next"
            class="bg-gray-800 text-white mt-8 shadow-xl self-center p-2 font-semibold rounded-full w-10/12">
            Next
        </button>
        <div x-cloak x-show="page===6||page===8" class="pt-2 flex justify-center">
            <button @click="next" class="text-sm p-1 font-semibold">Skip For Now</button>
        </div>
    </div>
@endsection
