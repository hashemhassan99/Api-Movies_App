@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">POPULAR MOVIES</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($popularActors as $actor)
                    <div class="actor mt-8">
                        <a href="">
                            <img src="{{'https://image.tmdb.org/t/p/w500/'.$actor['profile_path']}}" alt="profile image"
                                 class="hover:opacity-75">
                        </a>
                        <div class="mt-2">
                            <a href="" class="text-lg hover:text-gray-300">{{$actor['name']}}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
