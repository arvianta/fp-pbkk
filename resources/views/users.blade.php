<x-app-layout>
    <x-slot name="title">
        Users
    </x-slot>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight inline-block">
                {{ __('Users') }}
            </h2>
            <form action="{{ route('users') }}" method="get" class="w-1/2 inline-block">   
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" name="query" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search here..." required>
                    <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </form>
        </div>
    </x-slot>

    
    <div class="relative overflow-x-auto py-10">
    @if(isset($users))
    <div class="mx-auto w-full px-8 overflow-x-auto lg:px-56 md:px-14">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>    
                <th scope="col" class="px-6 py-3 rounded-tl-lg">
                    Number
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Phone Number
                </th>
                <th scope="col" class="px-6 py-3">
                    Age
                </th>
                <th scope="col" class="px-6 py-3">
                    Height
                </th>
                <th scope="col" class="px-6 py-3 rounded-tr-lg">
                    Weight
                </th>
            </tr>
        </thead>
        @if(count($users)>0)
        <tbody>
            @foreach($users as $index => $user)
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <td class="px-6 py-4">
                        {{ $index + $users->firstItem() }}
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $user->name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $user->email }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $user->phone_number }}
                    </td> 
                    <td class="px-6 py-4">
                        {{ $user->age }}
                    </td> 
                    <td class="px-6 py-4">
                        {{ $user->height }}
                    </td> 
                    <td class="px-6 py-4">
                        {{ $user->weight }}
                    </td> 
                </tr>
            @endforeach
        </tbody>
        @else
            <tr>
                <td class="text-center py-6 font-semibold" colspan="7">
                    <h2 class="text-xl font-bold">"{{ $query }}" not found!</h2>
                </td>
            </tr>
        @endif
    </table>
    </div>
    @endif
    @if(count($users)>0)
        <nav class="mx-auto w-full px-8 overflow-x-auto lg:px-56 md:px-24 justify-between pt-4" aria-label="Table navigation">
            {{ $users->links() }}
        </nav>
    @endif
    
</x-app-layout>
