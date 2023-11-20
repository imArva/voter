@extends('layouts.admin')

@section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-14">
            
            
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-white">
        <thead class="text-xs bg-primary uppercase dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Judul Voting
                </th>
                <th scope="col" class="px-6 py-3">
                    URL Result
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($votings as $voting)
            <tr class="bg-primary border-b">
                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                    {{ strip_tags($voting->title) }}
                </th>
                <td class="px-6 py-4">
                    <a href="/result/{{ $voting->slug }}" class="hover:underline">www.voter.com/result/{{ $voting->slug }}</a>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>


            {{-- <section class="max-w-4xl p-6 mx-auto bg-secondary rounded-md shadow-md dark:bg-gray-800 ">
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
                
            </section> --}}
        </div>
    </div>


    @vite(['resources/js/alert.js']);
@endsection