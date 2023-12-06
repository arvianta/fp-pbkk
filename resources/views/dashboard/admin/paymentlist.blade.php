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
                    <!-- Card header -->
                    <div class="items-center justify-between lg:flex">
                        <div class="mb-4 lg:mb-0">
                        <h3 class="mb-2 text-xl font-bold text-gray-900 ">Transactions</h3>
                        <span class="text-base font-normal text-gray-500 ">This is a list of latest transactions</span>
                        </div>
                        <div class="items-center sm:flex">
                        <div class="flex items-center">
                            <button id="dropdownDefault" data-dropdown-toggle="dropdown"
                            class="mb-4 sm:mb-0 mr-4 inline-flex items-center text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-4 py-2.5      "
                            type="button">
                            Filter by status
                            <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdown" class="z-10 hidden w-56 p-3 bg-white rounded-lg shadow ">
                            <h6 class="mb-3 text-sm font-medium text-gray-900 ">
                                Category
                            </h6>
                            <ul class="space-y-2 text-sm" aria-labelledby="dropdownDefault">
                                <li class="flex items-center">
                                <input id="apple" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500   focus:ring-2  " />
                        
                                <label for="apple" class="ml-2 text-sm font-medium text-gray-900 ">
                                    Completed (56)
                                </label>
                                </li>
                        
                                <li class="flex items-center">
                                <input id="fitbit" type="checkbox" value="" checked class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500   focus:ring-2  " />
                        
                                <label for="fitbit" class="ml-2 text-sm font-medium text-gray-900 ">
                                    Cancelled (56)
                                </label>
                                </li>
                        
                                <li class="flex items-center">
                                <input id="dell" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500   focus:ring-2  " />
                        
                                <label for="dell" class="ml-2 text-sm font-medium text-gray-900 ">
                                    In progress (56)
                                </label>
                                </li>
                        
                                <li class="flex items-center">
                                <input id="asus" type="checkbox" value="" checked class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500   focus:ring-2  " />
                        
                                <label for="asus" class="ml-2 text-sm font-medium text-gray-900 ">
                                    In review (97)
                                </label>
                                </li>
                            </ul>
                            </div>
                        </div>
                        <div date-rangepicker class="flex items-center space-x-4">
                            <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z"></path>
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"></path>
                                </svg>
                            </div>
                            <input name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5       " placeholder="From">
                            </div>
                            <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z"></path>
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"></path>
                                </svg>
                            </div>
                            <input name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5       " placeholder="To">
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- Table -->
                    <div class="flex flex-col mt-6">
                        <div class="overflow-x-auto rounded-lg">
                        <div class="inline-block min-w-full align-middle">
                            <div class="overflow-hidden shadow sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 ">
                                <thead class="bg-gray-50 ">
                                <tr>
                                    <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase ">
                                    User
                                    </th>
                                    <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase ">
                                    Product
                                    </th>
                                    <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase ">
                                    Amount
                                    </th>
                                    <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase ">
                                    Payment method
                                    </th>
                                    <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase ">
                                    Date Time
                                    </th>
                                    <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase ">
                                    Payment Photo
                                    </th>
                                    <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase ">
                                    Status
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white ">
                                @foreach($payments_list as $payment)
                                <tr>
                                    <td class="p-4 text-sm text-gray-500 whitespace-nowrap">
                                        {{ $payment->user_id }}
                                    </td>
                                    @if(is_numeric($payment->product))
                                        <td class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap ">
                                            Membership 
                                            <span class="bg-green-100 text-green-800 text-xs font-medium ml-2 px-2.5 py-0.5 rounded-md border border-green-100 ">{{ $payment->product }} Month</span>
                                        </td>
                                    @else
                                        <td class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap ">
                                            Personal Trainer 
                                            <span class="bg-green-100 text-green-800 text-xs font-medium ml-2 px-2.5 py-0.5 rounded-md border border-green-100 ">{{ $payment->product }}</span>
                                        </td>
                                    @endif
                                    <td class="p-4 text-sm text-gray-500 whitespace-nowrap ">
                                        {{ $payment->total }}
                                    </td>
                                    <td class="p-4 text-sm text-gray-500 whitespace-nowrap ">
                                        {{ $payment->method }}
                                    </td>
                                    <td class="p-4 text-sm text-gray-500 whitespace-nowrap ">
                                        {{ $payment->date }}
                                    </td>
                                    <td class="p-4 text-sm text-gray-500 whitespace-nowrap ">
                                        @if($payment->payment_photo)
                                        <img src="{{ asset('storage/'.$payment->payment_photo) }}" class="w-24 h-24">
                                        @else
                                        <img src="{{ asset('img/default.png') }}" class="w-24 h-24">
                                        @endif
                                    </td>
                                    <td>
                                        <form method="post" action="{{ route('payment.update'), $payment->id }}">
                                            @csrf
                                            @method('patch')

                                            <input type="hidden" name="id" value="{{ $payment->id }}">
                                            <input type="hidden" name="method" value="{{ $payment->method }}">
                                            <input type="hidden" name="total" value="{{ $payment->total }}">
                                            <input type="hidden" name="date" value="{{ $payment->date }}">
                                            <input type="hidden" name="user_id" value="{{ $payment->user_id }}">
                                            <input type="hidden" name="product" value="{{ $payment->product }}">
                                            <select name="status" onchange="this.form.submit()" class="block w-2/3 px-4 py-2 text-sm text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500">
                                                <option value="Completed" {{ $payment->status === 'Completed' ? 'selected' : '' }}>Completed</option>
                                                <option value="Failed" {{ $payment->status === 'Failed' ? 'selected' : '' }}>Failed</option>
                                                <option value="Pending" {{ $payment->status === 'Pending' ? 'selected' : '' }}>Pending</option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            </div>
                        </div>
                        </div>
                    </div>
                    @if(count($payments_list)>0)
                    <nav class="mx-auto w-full overflow-x-auto justify-between pt-4" aria-label="Table navigation">
                        {{ $payments_list->appends(['sort_by' => request('sort_by')])->appends(['query' => request ('query')])->links() }}
                    </nav>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
