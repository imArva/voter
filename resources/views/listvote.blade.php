@extends('layouts.user')

@section('listvote')
    <div class=" m-8 h-auto items-center justify-center">
        @foreach ($votings as $voting)
        <div
            class="mb-5 w-full  p-4 bg-primary border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
            <div class="grid grid-cols-1 md:grid-cols-2 text-center text-white">
                <div class="title py-5">
                    <h5 class="text-xl font-bold">Title</h5>
                    <hr class="py-4">
                    <p>{{ strip_tags($voting->title) }}</p>
                </div>
                <div class="Url py-5">
                    <h5 class="text-xl font-bold">URL</h5>
                    <hr  class="py-4">
                    <a href="/voting/{{ $voting->slug }}" class="text-blue-500 underline">www.voter.com/voting/{{ $voting->slug }}</a>
                </div>
                
            </div>
        </div>
        @endforeach
    </div>
@endsection
