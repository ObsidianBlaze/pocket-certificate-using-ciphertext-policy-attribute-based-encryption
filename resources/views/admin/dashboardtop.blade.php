<!doctype html>
<html lang="en">
@include('layouts.navstyle')
<style>
    body {
        /*overflow: hidden; !* Hide scrollbars *!*/
    }
</style>

<body>
<section class="mb-40">

    @include('layouts.nav')

</section>
@include('layouts.main')
@if(session('successMsg'))
    <div class="flex p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-gray-800 dark:text-green-400" role="alert">
        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Info</span>
        <div>
            <span class="font-medium">{{session('successMsg')}}</span>
        </div>
    </div>
@endif

@if(session('errorMsg'))
    <div class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-gray-800 dark:text-red-400"
         role="alert">
        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20"
             xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                  d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                  clip-rule="evenodd"></path>
        </svg>
        <span class="sr-only">Info</span>
        <div>
            <span class="font-medium">{{session('errorMsg')}}</span>
        </div>
    </div>
@endif

<div style="text-align: center; font-size: xx-large;"><h2>Admin Dashboard</h2></div>
<div class="relative min-h-screen md:flex">

    <!-- mobile menu bar -->
    <div class="bg-gray-800 text-gray-100 flex justify-between md:hidden">
        <!-- logo -->
        <a href="#" class="block p-4 text-white font-bold">Better Dev</a>

        <!-- mobile menu button -->
        <button class="mobile-menu-button p-4 focus:outline-none focus:bg-gray-700">
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- sidebar -->
    <div class="sidebar bg-blue-800 text-blue-100 w-64 space-y-6 py-7 px-2 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out">

        <!-- logo -->
        <a href="#" class="text-white flex items-center space-x-2 px-4">
            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
            </svg>
            <span class="text-2xl font-extrabold">Better Dev</span>
        </a>

        <!-- nav -->
        <nav>
            <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700 hover:text-white">
                Home
            </a>
            <a href="" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700 hover:text-white">
                About
            </a>
            <a href="" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700 hover:text-white">
                Features
            </a>
            <a href="" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700 hover:text-white">
                Pricing
            </a>
        </nav>
    </div>
