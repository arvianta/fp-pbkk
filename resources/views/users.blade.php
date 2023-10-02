<x-app-layout>
    <x-slot name="title">
        Users
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>
    
    <div class="relative overflow-x-auto py-10">
    <table class="mx-auto w-2/3 text-sm text-left text-gray-500 dark:text-gray-400">
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
    </table>
    <nav class="mx-auto w-2/3 justify-between pt-4" aria-label="Table navigation">
        {{ $users->links() }}
    </nav>
    
</x-app-layout>
