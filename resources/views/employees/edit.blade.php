<x-app-layout>
    <div class="py-6">
        <div class="max-w-8xl mx-auto text-center text-gray-600 dark:text-gray-200">
            <div class="bg-gradient-to-r from-slate-100 to-slate-700 h-80 p-6 md:p-8">
                <div class="flex items-center h-full w-full">
                    <h1 class="p-3 text-6xl text-gray-900 font-bold font-serif lg:p-36">Employee Edit</h1>
                </div>
            </div>

            <div class="max-w-7xl mt-8 mx-auto p-6 md:p-8">
                <form action="{{ route('employees.update', $employee) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="grid grid-cols-1 gap-6">
                        <div>
                            <textarea name="name" placeholder="{{ __('Name') }}" class="block w-full border-gray-300 focus:border-indigo-300 focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('name', $employee->name) }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('message')" />
                        </div>
                        <div>
                            <textarea name="age" placeholder="{{ __('Age') }}" class="block w-full border-gray-300 focus:border-indigo-300 focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('age', $employee->age) }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('message')" />
                        </div>
                        <div>
                            <textarea name="contact" placeholder="{{ __('Contact') }}" class="block w-full border-gray-300 focus:border-indigo-300 focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('contact', $employee->contact) }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('message')" />
                        </div>
                        <div>
                            <textarea name="email" placeholder="{{ __('Email') }}" class="block w-full border-gray-300 focus:border-indigo-300 focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('email', $employee->email) }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('message')" />
                        </div>
                        <div>
                            <textarea name="address" placeholder="{{ __('Address') }}" class="block w-full border-gray-300 focus:border-indigo-300 focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('address', $employee->address) }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('message')" />
                        </div>
                        <div>
                            <textarea name="job_id" placeholder="{{ __('Job') }}" class="hidden block w-full border-gray-300 focus:border-indigo-300 focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('job_id', $employee->job_id) }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('message')" />
                        </div>
                    </div>
                    <div class="mt-2 flex justify-start items-center space-x-2">
                        <x-primary-button>{{ __('Save') }}</x-primary-button>
                        <a href="{{ route('employees.index') }}">{{ __('Cancel') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>