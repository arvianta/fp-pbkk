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
                                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl ">All Instructor</h1>
                            </div>
                            <div class="items-center justify-between block sm:flex md:divide-x md:divide-gray-100 ">
                                <div class="flex items-center mb-4 sm:mb-0">
                                    <form class="sm:pr-3" action="#" method="GET">
                                        <label for="trainer-search" class="sr-only">Search</label>
                                        <div class="relative w-48 mt-1 sm:w-64 xl:w-96">
                                            <input type="text" name="email" id="trainer-search" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5      " placeholder="Search for trainer">
                                        </div>
                                    </form>
                                    <div class="flex items-center w-full sm:justify-end">
                                        <div class="flex pl-2 space-x-1">
                                            <a href="#" class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100   ">
                                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
                                            </a>
                                            <a href="#" class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100   ">
                                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                            </a>
                                            <a href="#" class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100   ">
                                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                            </a>
                                            <a href="#" class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100   ">
                                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path></svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <button id="createClassButton" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5   focus:outline-none " type="button" data-drawer-target="drawer-create-class-default" data-drawer-show="drawer-create-class-default" aria-controls="drawer-create-class-default" data-drawer-placement="right">
                                    Add new trainer
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <div class="overflow-x-auto">
                            <div class="inline-block min-w-full align-middle">
                                <div class="overflow-hidden shadow">
                                    <table class="min-w-full divide-y divide-gray-200 table-fixed ">
                                        <thead class="bg-gray-100 ">
                                            <tr>
                                                <th scope="col" class="p-4">
                                                    <div class="flex items-center">
                                                        <input id="checkbox-all" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300    ">
                                                        <label for="checkbox-all" class="sr-only">checkbox</label>
                                                     </div>
                                                </th>
                                                <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase ">
                                                    Instructor Name
                                                </th>
                                                <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase ">
                                                    Certification
                                                </th>
                                                <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase ">
                                                    Session Cost
                                                </th>
                                                <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase ">
                                                    Expertise
                                                </th>
                                                <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase ">
                                                    Actions
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach($trainers as $trainer)
                                            <tr class="hover:bg-gray-100 ">
                                                <td class="w-4 p-4">
                                                    <div class="flex items-center">
                                                        <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox"
                                                            class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300    ">
                                                        <label for="checkbox-1" class="sr-only">checkbox</label>
                                                    </div>
                                                </td>
                                                <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap ">{{ $trainer->name }}</td>
                                                <td class="p-4 max-w-md text-base font-medium text-gray-900 overflow-hidden whitespace-normal overflow-ellipsis">{{ $trainer->certification }}</td>
                                                <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap ">{{ $trainer->session_cost }}</td>
                                                <td class="p-4 max-w-md text-base font-medium text-gray-900 overflow-hidden whitespace-normal overflow-ellipsis">{{ $trainer->expertise_name}}</td>

                                                <td class="p-4 space-x-2 whitespace-nowrap">
                                                    <button type="button" id="updateClassButton" data-drawer-target="drawer-update-class-default" data-drawer-show="drawer-update-class-default" aria-controls="drawer-update-class-default" data-drawer-placement="right" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300   ">
                                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                                                        Update
                                                    </button>
                                                    <button type="button" id="deleteClassButton" data-drawer-target="drawer-delete-class-default" data-drawer-show="drawer-delete-class-default" aria-controls="drawer-delete-class-default" data-drawer-placement="right" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 ">
                                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            @endforeach                      
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if(count($trainers)>0)
                    <nav class="mx-auto w-full overflow-x-auto justify-between pt-4" aria-label="Table navigation">
                        {{ $trainers->appends(['sort_by' => request('sort_by')])->appends(['query' => request ('query')])->links() }}
                    </nav>
                    @endif

                    <!-- Edit Class Drawer -->
                    <div id="drawer-update-class-default" class="fixed top-0 right-0 z-40 w-full h-screen max-w-xs p-4 overflow-y-auto transition-transform translate-x-full bg-white " tabindex="-1" aria-labelledby="drawer-label" aria-hidden="true">
                        <h5 id="drawer-label" class="inline-flex items-center mb-6 text-sm font-semibold text-gray-500 uppercase ">Update Class</h5>
                        <button type="button" data-drawer-dismiss="drawer-update-class-default" aria-controls="drawer-update-class-default" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center  ">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Close menu</span>
                        </button>
                        <form action="#">
                            <div class="space-y-4">
                                <div>
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Name</label>
                                    <input type="text" name="title" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5      " value="Education Dashboard" placeholder="Type class name" required="">
                                </div>
                                <div>
                                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 ">Technology</label>
                                    <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5      ">
                                        <option selected="">Flowbite</option>
                                        <option value="RE">React</option>
                                        <option value="AN">Angular</option>
                                        <option value="VU">Vue JS</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 ">Price</label>
                                    <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5      " value="2999" placeholder="$149" required="">
                                </div>
                                <div>
                                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 ">Description</label>
                                    <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500      " placeholder="Enter event description here">Start developing with an open-source library of over 450+ UI components, sections, and pages built with the utility trainers from Tailwind CSS and designed in Figma.</textarea>
                                </div>
                                <div>
                                    <label for="discount" class="block mb-2 text-sm font-medium text-gray-900 ">Discount</label>
                                    <select id="discount" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5      ">
                                        <option selected="">No</option>
                                        <option value="5">5%</option>
                                        <option value="10">10%</option>
                                        <option value="20">20%</option>
                                        <option value="30">30%</option>
                                        <option value="40">40%</option>
                                        <option value="50">50%</option>
                                    </select>
                                </div>
                            </div>
                            <div class="bottom-0 left-0 flex justify-center w-full pb-4 mt-4 space-x-4 sm:absolute sm:px-4 sm:mt-0">
                                <button type="submit" class="w-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center   ">
                                    Update
                                </button>
                                <button type="button" class="w-full justify-center text-red-600 inline-flex items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center     ">
                                    <svg aria-hidden="true" class="w-5 h-5 mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                    Delete
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Delete Class Drawer -->
                    <div id="drawer-delete-class-default" class="fixed top-0 right-0 z-40 w-full h-screen max-w-xs p-4 overflow-y-auto transition-transform translate-x-full bg-white " tabindex="-1" aria-labelledby="drawer-label" aria-hidden="true">
                        <h5 id="drawer-label" class="inline-flex items-center text-sm font-semibold text-gray-500 uppercase ">Delete</h5>
                        <button type="button" data-drawer-dismiss="drawer-delete-class-default" aria-controls="drawer-delete-class-default" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center  ">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Close menu</span>
                        </button>
                        <svg class="w-10 h-10 mt-8 mb-4 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <h3 class="mb-6 text-lg text-gray-500 ">Are you sure you want to delete this class?</h3>
                        <a href="#" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2.5 text-center mr-2 ">
                            Yes, I'm sure
                        </a>
                        <a href="#" class="text-gray-900 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-blue-300 border border-gray-200 font-medium inline-flex items-center rounded-lg text-sm px-3 py-2.5 text-center      " data-drawer-hide="drawer-delete-class-default">
                            No, cancel
                        </a>
                    </div>

                    <!-- Add Class Drawer -->
                    <div id="drawer-create-class-default" class="fixed top-0 right-0 z-40 w-full h-screen max-w-xs p-4 overflow-y-auto transition-transform translate-x-full bg-white " tabindex="-1" aria-labelledby="drawer-label" aria-hidden="true">
                        <h5 id="drawer-label" class="inline-flex items-center mb-6 text-sm font-semibold text-gray-500 uppercase ">New Class</h5>
                        <button type="button" data-drawer-dismiss="drawer-create-class-default" aria-controls="drawer-create-class-default" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center  ">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Close menu</span>
                        </button>
                        <form action="#">
                            <div class="space-y-4">
                                <div>
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Name</label>
                                    <input type="text" name="title" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5      " placeholder="Type class name" required="">
                                </div>

                                <div>
                                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 ">Price</label>
                                    <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5      " placeholder="$2999" required="">
                                </div>
                                <div>
                                    <label for="category-create" class="block mb-2 text-sm font-medium text-gray-900 ">Technology</label>
                                    <select id="category-create" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5      ">
                                        <option selected="">Select category</option>
                                        <option value="FL">Flowbite</option>
                                        <option value="RE">React</option>
                                        <option value="AN">Angular</option>
                                        <option value="VU">Vue</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 ">Description</label>
                                    <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500      " placeholder="Enter event description here"></textarea>
                                </div>
                                <div>
                                    <label for="discount-create" class="block mb-2 text-sm font-medium text-gray-900 ">Discount</label>
                                    <select id="discount-create" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5      ">
                                        <option selected="">No</option>
                                        <option value="5">5%</option>
                                        <option value="10">10%</option>
                                        <option value="20">20%</option>
                                        <option value="30">30%</option>
                                        <option value="40">40%</option>
                                        <option value="50">50%</option>
                                    </select>
                                </div>
                                <div class="bottom-0 left-0 flex justify-center w-full pb-4 space-x-4 md:px-4 md:absolute">
                                    <button type="submit" class="text-white w-full justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center   ">
                                        Add class
                                    </button>
                                    <button type="button" data-drawer-dismiss="drawer-create-class-default" aria-controls="drawer-create-class-default" class="inline-flex w-full justify-center text-gray-500 items-center bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10      ">
                                        <svg aria-hidden="true" class="w-5 h-5 -ml-1 sm:mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                        Cancel
                                    </button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
