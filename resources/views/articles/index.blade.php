<x-app-layout>
    <div class="py-6">
        <div class="max-w-8xl mx-auto text-center text-gray-600 dark:text-gray-200">
            <div class="bg-gradient-to-r from-slate-100 to-slate-700 h-80 p-6 md:p-8">
                <div class="flex items-center h-full w-full">
                    <h1 class="p-3 text-6xl text-gray-900 font-bold font-serif lg:p-36">Forum</h1>
                </div>
            </div>

            <div class="m-8 flex justify-end">
                <div class="flex items-center border-2 border-gray-600 dark:border-gray-200 rounded-md w-38 h-12 text-lg justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-3 w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 10.5v6m3-3H9m4.06-7.19l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                    </svg>                      
                    <a href="{{ route('articles.create') }}" class="mx-3">Add Articles</a>
                </div>
            </div>
            
            <div class="max-w-7xl mx-auto">
                {{ $articles->links() }}    
            </div>            

            <div class="max-w-7xl mx-auto mt-8 flex flex-col text-justify p-6 md:p-8">
                
                @foreach ($articles as $article)
                    <div class="mt-8 p-3 flex flex-col space-y-3 rounded-md shadow-md">
                        <a href="{{ route('articles.show', $article) }}" class="text-2xl hover:text-blue-600">{{ $article->title }}</a>
                        <p class="text-xl">{{ $article->content }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>