<x-app-layout>
    <div class="py-6">
        <div class="max-w-8xl mx-auto text-center text-gray-600 dark:text-gray-200">
            <div class="bg-gradient-to-r from-slate-100 to-slate-700 h-80 p-6 md:p-8">
                <div class="flex items-center h-full w-full">
                    <h1 class="p-3 text-6xl text-gray-900 font-bold font-serif lg:p-36">Article Detail</h1>
                </div>
            </div>

            <div class="max-w-7xl mx-auto mt-8 grid grid-cols-1 gap-6 text-justify p-6 md:p-8">
                <div class="p-6 grid grid-cols-1 gap-4 shadow-lg rounded-md">
                    <div class="flex justify-between items-center">
                        <div>
                            <small class="ml-2 text-sm text-gray-600">{{ $article->created_at->format('j M Y, g:i a') }}</small>
                            @unless ($article->created_at->eq($article->updated_at))
                            <small class="text-sm text-gray-600">
                                &middot; {{ __('edited') }}
                            </small>
                            @endunless
                            <small class="ml-2 text-sm text-gray-600">{{ $article->updated_at->format('j M Y, g:i a') }}</small>
                        </div>
                        <x-dropdown>
                            <x-slot name="trigger">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                    </svg>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <x-dropdown-link :href="route('articles.edit', $article)">
                                    {{ __('Edit') }}
                                </x-dropdown-link>
                                <form method="POST" action="{{ route('articles.destroy', $article) }}">
                                    @csrf
                                    @method('delete')
                                    <x-dropdown-link :href="route('articles.destroy', $article)" onclick="event.preventDefault(); this.closest('form').submit();">
                                        {{ __('Delete') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                    <div class="flex flex-row items-center space-x-8">                                                                       
                        <h1 class="text-5xl">{{ $article->title }}</h1>
                    </div>
                    <div class="flex flex-row items-center space-x-8">                 
                        <p class="text-2xl">{{ $article->content }}</p>
                    </div>
                    <div class="flex items-center border-2 border-gray-600 hover:opacity-75 rounded-md w-24 h-10 text-gray text-lg justify-center">
                        <a href="{{ route('articles.index') }}">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>