<x-app-layout>
    <div class="py-6">
        <div class="max-w-8xl mx-auto text-center text-gray-600 dark:text-gray-200">
            <div class="bg-gradient-to-r from-slate-100 to-slate-700 h-80 p-6 md:p-8">
                <div class="flex items-center h-full w-full">
                    <h1 class="p-3 text-6xl text-gray-900 font-bold font-serif lg:p-36">Add Job</h1>
                </div>
            </div>

            <div class="max-w-5xl mt-8 mx-auto">
                <form action="{{ route('jobs.store') }}" method="post">
                    @csrf
                    <div class="grid grid-cols-1 gap-6">
                        <div>
                            <textarea name="job_title" placeholder="{{ __('Job Title') }}" class="block w-full border-gray-300 focus:border-indigo-300 focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('job_title') }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('message')" />
                        </div>
                        <div>
                            <textarea name="ship_type" placeholder="{{ __('Ship Type') }}" class="block w-full border-gray-300 focus:border-indigo-300 focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('ship_type') }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('message')" />
                        </div>
                        <div>
                            <textarea name="salary" placeholder="{{ __('Salary') }}" class="block w-full border-gray-300 focus:border-indigo-300 focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('salary') }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('message')" />
                        </div>
                        <div>
                            <textarea name="contract_in_months" placeholder="{{ __('Contract Period') }}" class="block w-full border-gray-300 focus:border-indigo-300 focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('contract_in_months') }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('message')" />
                        </div>
                        <div>
                            <textarea name="requirement" placeholder="{{ __('Requirement') }}" class="block w-full border-gray-300 focus:border-indigo-300 focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('requirement') }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('message')" />
                        </div>
                    </div>
                    <div class="mt-6 flex justify-start">
                        <div class="flex items-center bg-gray-600 dark:bg-gray-200 rounded-md w-36 h-12 text-lg text-white justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                                                   
                            <button type="submit" class="mx-3">{{ __('Create') }}</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>