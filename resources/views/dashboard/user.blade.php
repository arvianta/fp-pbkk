<x-app-layout>
    <x-slot name="title">
        Dashboard
    </x-slot>
    <div>
        @include('dashboard.user.sidebar')
        <div class="">
            <div class="p-4 my-6 w-10/12 float-right">
                <div class="sm:px-6 mx-4"> 
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
