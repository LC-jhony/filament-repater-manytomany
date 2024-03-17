<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />

    <meta name="application-name" content="{{ config('app.name') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>{{ config('app.name') }}</title>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    @filamentStyles
    @vite('resources/css/app.css')
</head>

<body class="font-sans antialiased bg-zinc-100">
    <x-container>
        <div class="flex flex-col">
            <h2 class="mb-4 text-xl font-bold text-stone-600">
                TailwindCSS Simple Filter
            </h2>

            <div class="p-6 bg-white shadow-lg rounded-xl">
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                    <div class="flex flex-col">
                        <label for="name" class="text-sm font-medium text-stone-600">Name</label>
                        <input type="text" id="name" placeholder="john doe"
                            class="block w-full mt-2 border-gray-300 rounded-md shadow-sm focus:border-orange-300 focus:ring focus:ring-orange-200 focus:ring-opacity-50">
                    </div>

                    <div class="flex flex-col">
                        <label for="email" class="text-sm font-medium text-stone-600">Email</label>
                        <input type="email" id="email" placeholder="johndoe@example.com"
                            class="block w-full mt-2 border-gray-300 rounded-md shadow-sm focus:border-orange-300 focus:ring focus:ring-orange-200 focus:ring-opacity-50">
                    </div>

                    <div class="flex flex-col">
                        <label for="date" class="text-sm font-medium text-stone-600">Published Date</label>
                        <input type="date" id="date"
                            class="block w-full mt-2 border-gray-300 rounded-md shadow-sm focus:border-orange-300 focus:ring focus:ring-orange-200 focus:ring-opacity-50">
                    </div>

                    <div class="flex flex-col">
                        <label for="status" class="text-sm font-medium text-stone-600">Status</label>

                        <select id="status"
                            class="block w-full mt-2 border-gray-300 rounded-md shadow-sm focus:border-orange-300 focus:ring focus:ring-orange-200 focus:ring-opacity-50">
                            <option>Active</option>
                            <option>Pending</option>
                            <option>Deleted</option>
                        </select>
                    </div>
                </div>

                <div class="grid justify-end w-full grid-cols-2 mt-6 space-x-4 md:flex">
                    <button
                        class="px-4 py-2 font-bold text-white transition duration-200 ease-in-out rounded-lg shadow-lg text-stone-50 bg-stone-400 hover:bg-stone-500 shadow-stone-200 translate-10">
                        Reset
                    </button>

                    <button
                        class="px-4 py-2 font-bold text-white transition duration-200 ease-in-out bg-orange-400 rounded-lg shadow-lg text-orange-50 hover:bg-orange-500 shadow-orange-200 translate-10">
                        Search
                    </button>
                </div>
            </div>
        </div>
    </x-container>
    <main class="w-full p-8 m-2">
        {{ $slot }}
    </main>
    @filamentScripts
    @vite('resources/js/app.js')
</body>

</html>
