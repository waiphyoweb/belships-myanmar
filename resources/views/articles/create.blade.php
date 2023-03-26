<x-app-layout>
    <div class="py-6">
        <div class="max-w-8xl mx-auto text-center text-gray-600 dark:text-gray-200">
            <div class="bg-gradient-to-r from-slate-100 to-slate-700 h-80 p-6 md:p-8">
                <div class="flex items-center h-full w-full">
                    <h1 class="p-3 text-6xl text-gray-900 font-bold font-serif lg:p-36">Add Article</h1>
                </div>
            </div>

            <div class="max-w-5xl mt-8 mx-auto">
                <form action="{{ route('articles.store') }}" method="post">
                    @csrf
                    <div class="grid grid-cols-1 gap-6">
                        <div>
                            <textarea name="title" placeholder="{{ __('Article Title') }}" class="block w-full border-gray-300 focus:border-indigo-300 focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('title') }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('message')" />
                        </div>
                        <div>
                            <textarea name="content" placeholder="{{ __('Content') }}" class="block w-full border-gray-300 focus:border-indigo-300 focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('content') }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('message')" />
                        </div>
                        <div class="flex justify-start">
                            <x-primary-button>
                                {{ __('Create') }}
                            </x-primary-button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>