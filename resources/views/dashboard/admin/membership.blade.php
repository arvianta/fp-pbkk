<x-app-layout>
    <x-slot name="title">
        Dashboard
    </x-slot>
    <div>
        @include('dashboard.admin.sidebar')
        <div class="p-4 sm:ml-64 my-4">
            <div class="px-4">
                <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
                    <!-- if active membership -->
                    <div>
                        <div class="bg-white overflow-hidden shadow-md sm:rounded-lg mr-12 pb-6 mb-6">
                            <div class="flex items-center">
                                <div class="p-6 text-gray-900 font-bold text-xl">{{ __("Basic Plan") }}</div>
                                <span class="inline-block px-2 py-1 text-xs font-semibold text-gray-700 bg-primary rounded-full">active until 30 December 2023</span>
                            </div>
                            <div class="px-6">
                                <p> Benefits: </p>
                                <ul class="list-disc list-inside ml-4">
                                    <li>2 team members</li>
                                    <li>20GB Cloud storage</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="bg-white overflow-hidden shadow-md sm:rounded-lg mr-12 pb-6 mb-6">
                            <div class="flex items-center">
                                <div class="p-6 text-gray-900 font-bold text-xl">{{ __("Basic Plan") }}</div>
                                <span class="inline-block px-2 py-1 text-xs font-semibold text-gray-700 bg-primary rounded-full">active until 30 December 2023</span>
                            </div>
                            <div class="px-6">
                                <p> Benefits: </p>
                                <ul class="list-disc list-inside ml-4">
                                    <li>2 team members</li>
                                    <li>20GB Cloud storage</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="bg-white overflow-hidden shadow-md sm:rounded-lg mr-12 pb-6 mb-6">
                            <div class="flex items-center">
                                <div class="p-6 text-gray-900 font-bold text-xl">{{ __("Basic Plan") }}</div>
                                <span class="inline-block px-2 py-1 text-xs font-semibold text-gray-700 bg-primary rounded-full">active until 30 December 2023</span>
                            </div>
                            <div class="px-6">
                                <p> Benefits: </p>
                                <ul class="list-disc list-inside ml-4">
                                    <li>2 team members</li>
                                    <li>20GB Cloud storage</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
