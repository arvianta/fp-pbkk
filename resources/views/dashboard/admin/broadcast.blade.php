<x-app-layout>
    <x-slot name="title">
        Dashboard
    </x-slot>
    <div>
        @include('dashboard.admin.sidebar')
        <div class="">
            <div class="p-4 my-6 w-10/12 float-right">
                <div class="">
                    <div class="sm:px-6 mx-4"> 
                    <div class="block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5  ">
                        <div class="w-full mb-1">
                            <div class="mb-4">
                                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl ">Send Broadcast Notifications</h1>
                            </div>
                            <form class="flex gap-5 justify-between" action="{{ route('create.notification') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="w-11/12">
                                    <input type="text" id="text" name="message" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 placeholder-gray-500" placeholder="Your Massages" required>
                                </div>
                                <button type="submit" class="text-white w-1/12 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm sm:w-auto px-10 py-2.5 text-center">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
