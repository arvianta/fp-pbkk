<x-app-layout>
    <x-slot name="title">
        Dashboard
    </x-slot>
    <div>
        @include('dashboard.admin.sidebar')
        <div class="">
            <div class="p-4 my-6 w-10/12 float-right">
                <div class="sm:px-6 mx-4"> 
                <form method="post" action="{{ route('personaltrainer.update', ['id' => $id]) }}" class="mt-6 space-y-6">
                    @csrf
                    @method('patch')

                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $name)" required autofocus autocomplete="name" />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        <div>
                            <x-input-label for="session_cost" :value="__('Session Cost')" />
                            <x-text-input id="session_cost" name="session_cost" type="text" class="mt-1 block w-full" :value="old('session_cost', $session_cost)" required autofocus autocomplete="session_cost" />
                            <x-input-error class="mt-2" :messages="$errors->get('session_cost')" />
                        </div>

                        <div>
                            <x-input-label for="certification" :value="__('Certification')" />
                            <x-text-input id="certification" name="certification" type="text" class="mt-1 block w-full" :value="old('certification', $certification)" required autofocus autocomplete="certification" />
                            <x-input-error class="mt-2" :messages="$errors->get('certification')" />
                        </div>
                        
                        <div>
                            <x-input-label for="" :value="__('Expertise')" />
                            @foreach($expertise_names as $expertise)
                                <span class="inline-block bg-green-500 text-white px-2 py-1 mr-2 mt-2 rounded">{{ $expertise }}</span>
                            @endforeach
                        </div>
                    
                    </div>

                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Save') }}</x-primary-button>
                        <div class="flex items-center gap-4">
                            <form method="post" action="{{ route('personaltrainer.delete', ['id' => $id]) }}" class="mt-6 space-y-6">
                                @csrf
                                @method('delete')
                                <x-danger-button>{{ __('Delete') }}</x-danger-button>
                            </form>
                        </div>
                    </div>

                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
