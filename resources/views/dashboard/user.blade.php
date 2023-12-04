<x-app-layout>
    <x-slot name="title">
        Dashboard
    </x-slot>
    <div>
        @include('dashboard.user.sidebar')
        <div class="p-4 sm:ml-64 my-6">
            <div class="">
                <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 ml-5">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            {{ __("Welcome User") }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
