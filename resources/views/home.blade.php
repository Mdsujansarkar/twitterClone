@extends('layouts.app')

@section('content')
    <div class="flex">

        <div class="lg:w-1/6">
            @include('_sidebar-links')
        </div>

        <div class="lg:flex-1 lg:max-10 mr-10">
            
            <div class="border border-blue-400 rounded-l p-8">
              @include('_publish-tweet-panel')
            </div>

            <div class="border border-gray-400 rounded-lg mt-10 bg-gray-400">
                @include('_single-twitter')
                @include('_single-twitter')
                @include('_single-twitter')
                @include('_single-twitter')
                @include('_single-twitter')
            </div>
        </div>

        <div class="lg:w-1/6">

            @include('_friends-list')
        </div>
    </div>
@endsection
