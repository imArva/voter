@extends('layouts.admin')

@section('content')

 <!-- Start profile Card -->

 <div class="p-4 sm:ml-64">
    <div class="p-4 mt-14">
        <div class="grid grid-cols-1 md:grid-cols-3">
            <!-- card 1 -->
                <div class="p-4 max-w-sm">
                    <a href="/new">
                    <div class="flex rounded-3xl h-auto bg-purple-600 p-8 flex-col">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-white text-purple-600 flex-shrink-0">
                                <i class="fa fa-plus fa-fw"></i>
                            </div>
                            <h2 class="text-white dark:text-white text-lg font-medium">New Vote Link</h2>
                        </div>
                        <div class="flex flex-col justify-between flex-grow">
                            <div class="mt-3 text-white inline-flex items-center">View page
                                <i class="fa fa-arrow-right fa-fw px-2"></i>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
        
            <!-- card 2 -->
            <div class="p-4 max-w-sm">
                <a href="/mylinks">
                <div class="flex rounded-3xl h-auto bg-blue-500 p-8 flex-col">
                    <div class="flex items-center mb-3">
                        <div
                            class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-white text-blue-500 flex-shrink-0">
                            <i class="fa fa-link fa-fw"></i>
                        </div>
                        <h2 class="text-white dark:text-white text-lg font-medium">Vote Link</h2>
                    </div>
                    <div class="flex flex-col justify-between flex-grow">
                        <div class="mt-3 text-white inline-flex items-center">View page
                            <i class="fa fa-arrow-right fa-fw px-2"></i>
                        </div>
                    </div>
                </div>
                </a>
            </div>
        
            <!-- card 3 -->
            <div class="p-4 max-w-sm">
                <a href="/result">
                <div class="flex rounded-3xl h-auto bg-blue-900 p-8 flex-col">
                    <div class="flex items-center mb-3">
                        <div
                            class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-white text-blue-900 flex-shrink-0">
                            <i class="fa fa-chart-line fa-fw"></i>
                        </div>
                        <h2 class="text-white dark:text-white text-lg font-medium">Result</h2>
                    </div>
                    <div class="flex flex-col justify-between flex-grow">
                        <div class="mt-3 text-white inline-flex items-center">View page
                            <i class="fa fa-arrow-right fa-fw px-2"></i>
                        </div>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>
 </div>
<!-- End profile Card -->


    {{-- <div class="p-4 sm:ml-64">
        <div class="p-4 mt-14">
            <section class="max-w-4xl p-6 mx-auto bg-secondary rounded-md shadow-md dark:bg-gray-800 ">
                <h1 class="text-xl font-bold text-white capitalize dark:text-white">New Vote Link</h1>
                <form>
                    <div class="grid grid-cols-1 gap-6 mt-4">
                        <div>
                            <label class="text-white dark:text-gray-200" for="username">Judul vote</label>
                            <input id="username" type="text" placeholder="Judul vote kamu"
                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        </div>
                        <div>
                            <label class="text-white dark:text-gray-200" for="username">Custom url</label>
                            <input id="username" type="text" placeholder="www.vote.com/example"
                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        </div>
                    </div>
                    <div class="flex justify-end mt-6">
                        <button
                            class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-pink-500 rounded-md hover:bg-pink-700 focus:outline-none focus:bg-gray-600">Save</button>
                    </div>
                </form>
            </section>
        </div>
    </div> --}}
    
@endsection